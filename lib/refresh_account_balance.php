<?php
//snippet from my functions.php

function refresh_account_balance()
{
    if (is_logged_in()) {
        //cache account balance via BGD_Bills_History history
        $query = "UPDATE BGD_Accounts set balance = (SELECT IFNULL(SUM(diff), 0) from BGD_Bills_History WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => get_user_account_id()]);
            get_or_create_account(); //refresh session data
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }
}

?>