##sourceinfo##
source={'db':hbmsdb,
	'table':bms_etl_test,
}

##targetinfo##
target={'db':bmsdb,
	'table':bms_etl_test,
}

##extract##
select 
	staff_id,
	staff_name,
	staff_email,
	unix_timestamp() 
from bms_etl_test

##preload##
delete from  bms_etl_test


##targetDDL##
create table if not exists `bms_etl_test`(
        `staff_id` int,
	`staff_name` varchar(20),
	`staff_email` varchar(20),
	`staff_timestamp` int(11)
)default character set gbk

##dbload##
load data infile '/tmp/temp.txt' 
replace into table bms_etl_test 
fields terminated by ',' lines terminated by '\n'
