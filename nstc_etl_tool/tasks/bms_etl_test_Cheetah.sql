##sourceinfo##
source={'db':bmsdb,
	'table':bms_etl_test,
}

##targetinfo##
target={'db':bmsdb,
	'table':bms_etl_test_Cheetah,
}

##extract##
select 
	staff_id,
	staff_name,
	staff_email 
from bms_etl_test
#if not $isReload
limit 2
#end if

##preload##
#if $isReload
drop table bms_etl_test_Cheetah 
#end if

##targetDDL##
#if $isReload
create table if not exists `bms_etl_test_Cheetah`(
        `staff_id` int,
	`staff_name` varchar(20),
	`staff_email` varchar(20)
)default character set gbk
#end if

##dbload##
load data infile '/tmp/temp.txt'
replace into table bms_etl_test_Cheetah
fields terminated by ',' lines terminated by '\n'
