USE `heroku_6a58510f6a72749`;
ALTER TABLE Users ADD COLUMN username varchar(30) 
unique default null