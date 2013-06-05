##sourceinfo##
source={'db':hyoutubedb,
	'table':huser_visit_daily,
}

##targetinfo##
target={'db':hyoutubedb,
	'table':huser_visit_category_daily,
}

##exload##
insert overwrite  table `user_visit_category_daily`
	select 
		category,
		count(category),
		sum(views),
		avg(rate),
		sum(comments)
	from user_visit_daily
	group by category
	order by category

##targetDDL##
create table if not exists `user_visit_category_daily`(
	`category_name` string,
        `category_video_num` int,
	`category_views_num` int,
	`category_rate_avg` float,
	`category_comments_num` int
)ROW FORMAT DELIMITED FIELDS TERMINATED BY '\t' LINES TERMINATED BY '\n'                            
