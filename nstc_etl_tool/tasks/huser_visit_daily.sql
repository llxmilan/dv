##sourceinfo##
source={'db':youtubedb,
	'table':user_visit_daily,
}

##targetinfo##
target={'db':hyoutubedb,
	'table':user_visit_daily,
}

##extract##
select 
    * 
from 
    user_visit_daily

##targetDDL##
create table if not exists `user_visit_daily`(
        `video_id` string,
	`uploader` string,
	`length` int,
	`views` int,
	`rate` float,
	`ratings` int,
	`comments` int,
	`related_1` string,
        `related_2` string,
        `related_3` string,
        `related_4` string,
        `related_5` string,
        `related_6` string,
        `related_7` string,
        `related_8` string,
        `related_9` string,
        `related_10` string,
        `related_11` string,
        `related_12` string,
        `related_13` string,
        `related_14` string,
        `related_15` string,
        `related_16` string,
        `related_17` string,
        `related_18` string,
        `related_19` string,
        `related_20` string
)row format delimited fields terminated by ',' lines terminated by '\n'
