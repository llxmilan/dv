##taskinfo##
tasktype=common

##sourceinfo##
source={'db':youtubedb,
	'table':user_visit_daily,
}

##targetinfo##
target={'db':youtubedb,
	'table':user_visit_category_daily,
}

##exload##
insert into `user_visit_category_daily`(`category_name`,`category_video_num`,`category_views_num`,`category_rate_avg`,`category_comments_num`)
	select 
		category,
		count(category),
		sum(views),
		avg(rate),
		sum(comments)
	from user_visit_daily
	where category is not null
	group by category
	order by category

##targetDDL##
create table if not exists `user_visit_category_daily`(
        `category_id` int(10) not null auto_increment,
	`category_name` varchar(20),
        `category_video_num` int(10),
	`category_views_num` int(10),
	`category_rate_avg` float,
	`category_comments_num` int(10),
	primary key(`category_id`),
	key `category_name`(`category_name`)
)engine=MyISAM default charset=utf8
