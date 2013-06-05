<?php
	$action=$_POST['action'];
	$filename=$_POST['name'];
	if($action=='start_test')
	{
		chdir("/home/dv/nstc_etl_tool");
       		$etl_com='python etltool.py -f tasks/hbms_etl_test.sql -p ';
      		echo $etl_com;
		echo getcwd();
		$result=system($etl_com,$callback);
		echo $result;
		echo $callback;
		//echo getcwd();
		$file=fopen('log/' . $filename . '.sql.log','r');
		
		while(!feof($file))
        	{
			echo fgets($file)."<br />";
        	}
        	fclose($file);
	}
?>
