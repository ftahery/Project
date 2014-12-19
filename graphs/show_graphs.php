<?php
$dbhost="localhost";
$dbuser="wild";
$dbpass="munirali";
$dbname="college";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or  die("Error " . mysqli_error($connection));

if(isset($_POST["Submit_s"]))
{
$value=$_POST["selection"];
$select=null;
$select1=null;
}

else if(isset($_POST["Submit_c"]))
{
$select = $_POST["graph1"];
$value=1;
$select1=null;
}

else if(isset($_POST["Submit_y"]))
{

$select1=$_POST["graph2"];
$select =null;
$value=1;
}


require_once("../includes/functions.php");
?>
<html lang="en">
	<?php 
	$par="Graphs";
	echo head_body_graph($par);
	?>
	<body>
	
	 <?php
	 $par="Graph";
	echo navigation_bar($par);
	?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  <ul class="selected">
                <form method="post"
        	    <form>
        	    <p>Select</p>
        	    <select name="selection">
        		<option  value="company_wise">Company Wise</option>
        		<option  value="yearly">Yearly</option>


        	    </select>
        	    <button class="btn btn-default" type="submit" name="Submit_s">Select&raquo;</button>

        		</form>
      </ul>
	  </div>
    </div>
	
   <!--	<div id="container" style="width:35%; height:400px; margin-left: 350px" ></div>
	<div id="container1" style="width:35%; height:400px; margin-left: 350px"></div>
	   -->
	<div class="container">
	<div class="row">
        
		
		<?php
		if(isset($value) && !empty($value))
		{
		  if($value=="company_wise")
			{
		?>
				<form method="post"
				<form>
				<p>Select A Company</p>
				<select name="graph1">
		<?php

				$query="SELECT Name from (SELECT Name FROM (";
				$query.="SELECT Name FROM company_2010 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2011 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2012 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2013 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2014 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2015 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2016 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2017 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2018 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2019 ";
				$query.="UNION ALL ";
				$query.="SELECT Name FROM company_2020 ";
				$query.= ")ALL_USERS GROUP BY Name ORDER BY Name)";
				$query.="ALL_USERS;" ;

                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($result))
                {
                   $name=$row['Name'];
				echo "<option value=\"{$name}\">{$name}</option>";
				}
        ?>


          	</select>
          	<button class="btn btn-default" type="submit" name="Submit_c">Enter&raquo;</button>

		    </form>

		<?php
            }



                if(isset($select) && !empty($select))
                {?>

                    <form method="post"
                <form>
                <p>Select A Company</p>
                <select name="graph1">
        <?php

                $query="SELECT Name from (SELECT Name FROM (";
                $query.="SELECT Name FROM company_2010 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2011 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2012 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2013 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2014 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2015 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2016 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2017 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2018 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2019 ";
                $query.="UNION ALL ";
                $query.="SELECT Name FROM company_2020 ";
                $query.= ")ALL_USERS GROUP BY Name ORDER BY Name)";
                $query.="ALL_USERS;" ;

                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($result))
                {
                   $name=$row['Name'];
                echo "<option value=\"{$name}\">{$name}</option>";
                }
        ?>


            </select>
            <button class="btn btn-default" type="submit" name="Submit_c">Enter&raquo;</button>

            </form>

        <?php

                    $company=$select;

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2010 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2010 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2010 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\" ; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data1=$row['count'];
                    if($data1==null)
                    $data1=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2011 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2011 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2011 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\" ;";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data2=$row['count'];
					if($data2==null)
                    $data2=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2012 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2012 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2012 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\" ;";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data3=$row['count'];
					if($data3==null)
                    $data3=0;
					

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2013 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2013 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2013 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data4=$row['count'];
					if($data4==null)
                    $data4=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2014 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2014 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2014 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data5=$row['count'];
					if($data5==null)
                    $data5=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2015 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2015 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2015 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\" ;";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data6=$row['count'];
					if($data6==null)
                    $data6=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2016 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2016 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2016 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\" ;";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data7=$row['count'];
					if($data7==null)
                    $data7=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2017 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2017 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2017 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data8=$row['count'];
					if($data8==null)
                    $data8=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2018 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2018 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2018 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data9=$row['count'];
					if($data9==null)
                    $data9=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2019 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2019 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2019 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data10=$row['count'];
					if($data10==null)
                    $data10=0;

                    $query="";

                    $query="SELECT count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_2020 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_2020 ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_2020 ";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users WHERE user=\"{$company}\"; ";

                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_array($result);
                    $data11=$row['count'];
					if($data11==null)
                    $data11=0;



                   ?>

                   <div id="container" style="width:50%; height:400px; margin-left: 350px;"></div>
                   <script>

                   $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo "{$company}";?>'
        },
        
        xAxis: {
            categories: ['2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Selections',
                align: 'low'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' students'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        /*legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },*/
        credits: {
            enabled: false
        },
        series: [{
            name: '<?php echo "{$company}";?>',
            data: [<?php echo "{$data1}"; ?>, <?php echo "{$data2}"; ?>, <?php echo "{$data3}"; ?>,<?php echo "{$data4}"; ?>,
					<?php echo "{$data5}"; ?>,<?php echo "{$data6}"; ?>,<?php echo "{$data7}"; ?>,<?php echo "{$data8}"; ?>,
					<?php echo "{$data9}"; ?>,<?php echo "{$data10}"; ?>,<?php echo "{$data11}"; ?>
					]
        }]
    });
});


                   </script>
    <?php

                }
				
				
				if($value=="yearly")
				{
				?>
				 <form method="post"
        	    <form>
        	    <p>Select A Year</p>
        	    <select name="graph2">
        		<option  value="2010">2010</option>
                <option  value="2011">2011</option>
                <option  value="2012">2012</option>
                <option  value="2013">2013</option>
                <option  value="2014">2014</option>
                <option  value="2015">2015</option>
                <option  value="2016">2016</option>
                <option  value="2017">2017</option>
                <option  value="2018">2018</option>
                <option  value="2019">2019</option>
                <option  value="2020">2020</option>



        	    </select>
        	    <button class="btn btn-default" type="submit" name="Submit_y">Select&raquo;</button>

        		</form>

				<?php
                   }
                if(isset($select1) && !empty($select1))
                { ?>

                     <form method="post"
                <form>
                <p>Select A Year</p>
                <select name="graph2">
                <option  value="2010">2010</option>
                <option  value="2011">2011</option>
                <option  value="2012">2012</option>
                <option  value="2013">2013</option>
                <option  value="2014">2014</option>
                <option  value="2015">2015</option>
                <option  value="2016">2016</option>
                <option  value="2017">2017</option>
                <option  value="2018">2018</option>
                <option  value="2019">2019</option>
                <option  value="2020">2020</option>



                </select>
                <button class="btn btn-default" type="submit" name="Submit_y">Select&raquo;</button>

                </form>

                <?php
                $Year=$select1;

                    $query="SELECT user,count from (SELECT user,count(*) as count ";
                    $query.="FROM ( ";
                    $query.="SELECT company_name1 as user FROM final_{$Year} WHERE company_name1 in (select Name from company_{$Year}) ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name2 FROM final_{$Year} WHERE company_name2 in (select Name from company_{$Year}) ";
                    $query.="UNION ALL ";
                    $query.="SELECT company_name3 FROM final_{$Year} WHERE company_name3 in (select Name from company_{$Year})";
                    $query.=")all_users GROUP BY user ORDER BY user)";
                    $query.="all_users; ";

                    $result=mysqli_query($connection,$query);

                            ?>
                    <div id="container" style="width:75%; height:500px; margin-left: 150px" ></div>

                    <script>



                    $(function () {

                        // Radialize the colors
                        Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                            return {
                                radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                                stops: [
                                    [0, color],
                                    [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                                ]
                            };
                        });

                        // Build the chart
                        $('#container').highcharts({
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false
                            },
                            title: {
                                text: '<?php echo "Year {$Year}";?> '
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                        style: {
                                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                        },
                                        connectorColor: 'silver'
                                    }
                                }
                            },
                            series: [{
                                type: 'pie',
                                name: 'Company Percentage',
                                data: [
                                    <?php

                                    while($row=mysqli_fetch_array($result))
                                    {
                                    $name1=$row['user'];
                                    $count1=$row['count'];

                                    echo "['{$name1}',{$count1}],";

                                    }

                                    ?>
                                    

                                ]
                            }]
                        });
                    });


                    </script>

                <?php }


				
        }
	?>



	</body>
</html>

<?php
mysqli_close($connection);
?>