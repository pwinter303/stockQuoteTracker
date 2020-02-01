drop table if exists userStocks;
drop table if exists users_stocks_xref;
drop table if exists stock_triggers;
drop table if exists trigger_statuses;
drop table if exists watch_types;
drop table if exists users;
drop table if exists stocks;


truncate table migrations;


SELECT * FROM stockquotetracker.trigger_statuses;


load data  infile '/Tmp/NYSE.txt' into table stocks 
fields terminated by '\t' lines terminated by '\n' 
IGNORE 1 LINES
(ticker,name)
SET created_at = now(), updated_at = now();

select count(*) from stocks;
select * from stocks;
