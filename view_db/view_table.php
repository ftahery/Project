<?php

$dbhost="localhost";
$dbuser="wild";
$dbpass="munirali";
$dbname="college";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or  die("Error " . mysqli_error($connection));;
session_start();

if(isset($_POST["student"]))
{
 $value=$_POST["anything"];
 $id=1;
}
else if(isset($_POST["company"]))
{
 $value=$_POST["anything"];
 $id=2;
}
else if(isset($_POST["placement"]))
{
 $value=$_POST["anything"];
 $id=3;
}
else if(isset($_POST["test"]))
{
 $value=$_POST["anything"];
 $id=4;
}
else if(isset($_POST["interview"]))
{
 $value=$_POST["anything"];
 $id=5;
}
else if(isset($_POST["final"]))
{
 $value=$_POST["anything"];
 $id=6;
}
else
{
$value="";
}
require_once("../includes/functions.php");
?>

<html lang="en">
  <?php
  $par="View Table";
  echo head_body_create($par); ?>

  <body>

    <?php
	$par="View";
	echo navigation_bar($par);
	?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  <ul class="selected">
		
	  <form method="post"
	  <form>
	  <p>Select A Year</p>
	<select name="anything">
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
	<br>
	<button class="btn btn-default" type="submit" name="student">Student&raquo;</button>
	<button class="btn btn-default" type="submit" name="company">Company&raquo;</button>
	<button class="btn btn-default" type="submit" name="placement">Placement&raquo;</button>
	<button class="btn btn-default" type="submit" name="test">Test&raquo;</button>
	<button class="btn btn-default" type="submit" name="interview">Interview&raquo;</button>
	<button class="btn btn-default" type="submit" name="final">Final Placement&raquo;</button>
	<!--<input type="submit" name="view_t" value="View">-->
		</form>
		
		<?php
		//echo show_view_link();
		?>
		
      </ul>
	  </div>
    </div>

	
	
	
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
		<?php
		
		if(isset($value) && !empty($value) && $id==1)
		{
		
		$query="SELECT * FROM student_{$value} ORDER BY USN";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_student_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_student_table_info($row);	
		}
		echo "</table>";
		
		}
		else 
		{
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		}
		
		}
		
		
		else if(isset($value) && !empty($value) && $id==2)
		{
		
		$query="SELECT * FROM company_{$value} ORDER BY NAME";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_company_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_company_table_info($row);	
		}
		echo "</table>";
		}
		else 
		{
		
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		
		}

		}
		
		
		else if(isset($value) && !empty($value) && $id==3)
		{
		
		$query="SELECT * FROM placement_{$value} ORDER BY NAME";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_placement_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_placement_table_info($row);	
		}
		echo "</table>";
		}
		else 
		{
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		}

		}
		
		
		else if(isset($value) && !empty($value) && $id==4)
		{
		
		$query="SELECT * FROM test_{$value} ORDER BY USN";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_test_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_test_table_info($row);	
		}
		echo "</table>";
		}
		else 
		{
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		}

		}
		
		
		else if(isset($value) && !empty($value) && $id==5)
		{
		
		$query="SELECT * FROM interview_{$value} ";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_interview_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_interview_table_info($row);	
		}
		echo "</table>";
		}
		else 
		{
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		}

		}
		
		
		else if(isset($value) && !empty($value) && $id==6)
		{
		
		$query="SELECT * FROM final_{$value} ORDER BY USN";

		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)>0)
		{	
		echo make_final_table();
	
		while($row=mysqli_fetch_array($result))
		{
		view_final_table_info($row);	
		}
		echo "</table>";
		}
		else
		{
			?>

			<div class="alert alert-error" style="width:400px">
	  		<strong>Empty!</strong><br>
	  		Table You Are Trying To Access Has No Content In It
			</div>
			
			<?php
		} 
		
		}

		?>
         </div>
			</div>
				</div>
    <script src="../stylesheets/footer_1.js"></script>
    <script src="../stylesheets/footer_2.js"></script>
    <script src="../stylesheets/footer_3.js"></script>
  </body>
</html>

<?php
mysqli_close($connection);
?>