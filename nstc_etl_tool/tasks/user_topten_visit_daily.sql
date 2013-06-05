##sourceinfo##
source={'db':hyoutubedb,
	'table':user_visit_daily,
}

##targetinfo##
target={'db':youtubedb,
	'table':user_topten_visit_daily,
}

##extract##
select video_id,uploader,category,views,rate,ratings,comments from user_visit_daily
order by views desc
limit 10

##targetDDL##
create table if not exists `user_topten_visit_daily`(
        `video_id` varchar(20),
	`uploader` varchar(20),
	`category` varchar(20),
	`views` int(10),
	`rate` float,
	`ratings` int(10),
	`comments` int(10),
        primary key(`video_id`),
	key `uploader`(`uploader`)
)engine=MyISAM default charset=utf8
