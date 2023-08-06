<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Shaimaa Husien (sh753)</td></tr>
<tr><td> <em>Generated: </em> 8/6/2023 1:13:04 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-shop-project/grade/sh753" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T06.31.03add%20item.jpg.webp?alt=media&token=e97a5c11-d630-4f30-8448-8226312cc296"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add Item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T06.47.51items%20list.jpg.webp?alt=media&token=b3eb34de-3a7b-49e3-a034-6ca37e6e9833"/></td></tr>
<tr><td> <em>Caption:</em> <p>items filter<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>on top we are checking the admin permission and then we got columns<br>of item table&nbsp;<div>and then using foreach loop we showed the fields with label<br>and on submit we called save-data function from helper in library .</div><div><br></div><div><b>admin creds&nbsp;</b></div><div><br></div><div><b>email:<br></b><a href="mailto:&#97;&#100;&#x6d;&#x69;&#110;&#x40;&#110;&#x6a;&#105;&#116;&#x2e;&#99;&#x6f;&#109;">&#97;&#100;&#x6d;&#x69;&#110;&#x40;&#110;&#x6a;&#105;&#116;&#x2e;&#99;&#x6f;&#109;</a><br><b>password :&nbsp;</b>zxcvbnm123<br><div><br></div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/30">https://github.com/shaimaahusein753/INIT_DB/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/admin/add_item.php">https://sh753-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.00.39shop%20products.jpg.webp?alt=media&token=3aebc04c-406a-4768-bd87-bce46987703f"/></td></tr>
<tr><td> <em>Caption:</em> <p>I can&#39;t show all products in single screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.02.21shop%20filter.jpg.webp?alt=media&token=3a5dd166-4927-46c0-8447-61228013f3a3"/></td></tr>
<tr><td> <em>Caption:</em> <p>filter is applied on stock sort and name<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.08.01filter%20code.jpg.webp?alt=media&token=e21ac84c-a832-406d-a94a-8605f1b9a3fc"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.08.06filter%20code%202.jpg.webp?alt=media&token=28472caa-5cae-47bf-a4c7-e27a93d10ab5"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>First we defined allowed array for filters and default is &#39;cost&#39;.<div>second there is<br>an array for orders setting asc and dsc.</div><div>after that we took filters and<br>applied conditions to check if any filter is selected or not and then<br>combined the query with filter and pagination.</div><div><br></div><div><br><div><br></div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/35">https://github.com/shaimaahusein753/INIT_DB/pull/35</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/shop.php?name=First&col=stock&order=asc">https://sh753-prod.herokuapp.com/Project/shop.php?name=First&col=stock&order=asc</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>This page is from admin side and we are filtering on the basis<br>of name here<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/30">https://github.com/shaimaahusein753/INIT_DB/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/admin/list_items.php">https://sh753-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.32.30items%20list.jpg.webp?alt=media&token=7e1ed0d0-a37e-4106-a255-2ee42cbd80bc"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.33.27edit%20item.jpg.webp?alt=media&token=b6bb9b8c-5f65-4ee7-a565-86174f03a01d"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>getting the item using id&nbsp;<div>and then mapping the result using columns array&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/30">https://github.com/shaimaahusein753/INIT_DB/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/admin/edit_item.php?id=14">https://sh753-prod.herokuapp.com/Project/admin/edit_item.php?id=14</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.43.39add%20cart%20error.jpg.webp?alt=media&token=c8404fd4-2016-44a0-a238-6f2bc5aebaee"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.44.34cart.jpg.webp?alt=media&token=5e09c7d8-acb6-43ba-87e1-3777f6a1c96e"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>cart is working as 1 cart for 1 user.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>on add to cart button we call cart function where we use user<br>id and item id and if product is already selected we increase the<br>quantity.<div>and update the item in cart otherwise insert an item .</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/31">https://github.com/shaimaahusein753/INIT_DB/pull/31</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.50.27cart-alt.jpg.webp?alt=media&token=73a056b4-6e3c-4e3f-a4ce-f0b5cbfb0a0e"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>we are using es function for subtotal and total using $total variable .<div>in<br>array for subtotla and in the end for total&nbsp;<br><div><div style="color: rgb(204, 204, 204);<br>background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;">&lt;span<br>style=&quot;color: #9cdcfe;&quot;&gt;$total</span><span style="color: #d4d4d4;"> += (</span><span style="color: #569cd6;">int</span><span style="color: #d4d4d4;">)</span><span style="color: #dcdcaa;">se</span><span style="color:<br>#d4d4d4;">(</span><span style="color: #9cdcfe;">$c</span><span style="color: #d4d4d4;">, </span><span style="color: #ce9178;">&quot;subtotal&quot;</span><span style="color: #d4d4d4;">, </span><span style="color: #b5cea8;">0</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt;, </span><span style="color: #569cd6;">false</span><span style="color: #d4d4d4;">);</span></div></div></div><div style="color: rgb(204, 204, 204); background-color: rgb(31,<br>31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="color: #d4d4d4;">//<br>for total </span></div><div style="color: rgb(204, 204, 204); background-color: rgb(31, 31, 31); font-family: Consolas,<br>&quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div style="line-height: 19px;"><span style="color: #d4d4d4;">&nbsp;</span><span style="color: #dcdcaa;">se</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt;(</span><span style="color: #9cdcfe;">$total</span><span style="color: #d4d4d4;">, </span><span style="color: #569cd6;">null</span><span style="color: #d4d4d4;">, </span><span style="color:<br>#b5cea8;">0</span><span style="color: #d4d4d4;">);</span></div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/31">https://github.com/shaimaahusein753/INIT_DB/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/cart_alt.php">https://sh753-prod.herokuapp.com/Project/cart_alt.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.57.48before%20update%20cart.jpg.webp?alt=media&token=ea2e7225-16bb-4dba-850f-9e278d17f78c"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before update the quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T07.57.52after%20update%20cart.jpg.webp?alt=media&token=b2a42f13-2409-4dbe-b451-dd270baf38bf"/></td></tr>
<tr><td> <em>Caption:</em> <p>After update the quantity<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.10.45empty%20cart.jpg.webp?alt=media&token=6ecc3765-16bb-48cc-bf3a-25f1dedd86df"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.11.05negative%20quantity.jpg.webp?alt=media&token=eed3a498-b6e7-47b2-b59b-b993ef755c88"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.12.15Screenshot_1.jpg.webp?alt=media&token=cb6f3cbf-e169-4719-b9f9-eb2f567028f0"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>applied min and max values in input<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/35">https://github.com/shaimaahusein753/INIT_DB/pull/35</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.00.49before%20removal.jpg.webp?alt=media&token=94f69ae3-fd73-42a5-83cf-0c00b2dab928"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before item removal<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.00.56after%20removal.jpg.webp?alt=media&token=2b3b5dc4-93b6-4265-94d8-16c3af516d9a"/></td></tr>
<tr><td> <em>Caption:</em> <p>After removal of item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.02.02before%20removal.jpg.webp?alt=media&token=6c9f9636-f6d7-4c13-988d-4179980083a8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before removal <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.02.15empty%20cart.jpg.webp?alt=media&token=868a0572-5eda-41f5-a1f8-d97e97f7ca7c"/></td></tr>
<tr><td> <em>Caption:</em> <p>after removal of all products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>we call the delete_cart api to delete on the basis of item id<br>and user id<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shaimaahusein753/INIT_DB/pull/31">https://github.com/shaimaahusein753/INIT_DB/pull/31</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsh753%2F2023-08-06T08.07.53board%20issues.jpg.webp?alt=media&token=324fcf92-c078-45d2-962e-c5b835954f3a"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://sh753-prod.herokuapp.com/Project/login.php">https://sh753-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-shop-project/grade/sh753" target="_blank">Grading</a></td></tr></table>