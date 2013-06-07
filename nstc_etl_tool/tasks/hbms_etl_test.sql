##sourceinfo##
source={'db':bmsdb,
	'table':bms_staff,
}

##targetinfo##
target={'db':hbmsdb,
	'table':bms_etl_test,
}

##extract##
select 
	staff_id,
	staff_name,
	staff_email,
	unix_timestamp()
from bms_staff 
limit 3

##preload##
drop table bms_etl_test

##targetDDL##
create table if not exists `bms_etl_test` (
        `staff_id` int,
	`staff_name` string,
	`staff_email` string,
	`datekey` int	
)ROW FORMAT DELIMITED FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n'

##dbload##
load data local inpath '/tmp/temp.txt' into table bms_etl_test
