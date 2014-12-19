<?php
session_start();
include("../includes/header_create.php");
require_once("../includes/functions.php");
?>

<html lang="en">
  <?php
  $par="Create Database";
  echo head_body_create($par); ?>

  <body>

    <?php
	$par="Create";
	echo navigation_bar($par);
	?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" >
      <div class="container">
	  <ul class="selected">
     <?php echo show_table_link();
		?>
      </ul>
	  </div>
    </div>

	
	
	
    <div class="container">

      <div class="row">
      <form role="form" method="post">
        <div class="col-md-4">

         <?php
		 
		if($id=="1")
		{  	echo "<b>Student Form</b><br><br>" ;
			if(isset($student_form_id))
			{
		  
				$USN=$_POST["usn"];
				$Name=$_POST["fullname"];
				$DOB=$_POST["dob"];
				$Sex=$_POST["sex"];
				$Tenth=$_POST["10th_perc"];
				$YOP1=(int)$_POST["yop1"];
				$Twelth=$_POST["12th_perc"];
				$YOP2=(int)$_POST["yop2"];
				$BE_CGPA=$_POST["be_perc"];
				$Email=$_POST["email"];
				$Phone_no1=$_POST["phone_no1"];
				$Phone_no2=$_POST["phone_no2"];
				$Year=$_POST["year"];
			  
					if(empty($USN) || empty($Year)  )
					{
						echo "<script> alert(\"Fill all the Fields Or Leave a '-' \");</script>";
						echo "<script> history.back();</script>";
						
						
					}
		  
					else
					{
						$query= "INSERT INTO student_{$Year} VALUES('{$USN}','{$Name}','{$DOB}','{$Sex}','{$Tenth}',{$YOP1},'{$Twelth}',{$YOP2},'{$BE_CGPA}','{$Email}','{$Phone_no1}','{$Phone_no2}');";
						$result= mysqli_query($connection,$query);
						confirm_query($result);
					}
		    }
			
			echo show_student_form();  

        }
		  
		
		if($id==2)
		{	echo "<b>Company Form</b><br><br>" ;
			if(isset($company_form_id))
			{
				$Name=$_POST["company_name"];
				$Address=$_POST["company_address"];
				$Year=$_POST["year"];

				$Name=mysqli_real_escape_string($Name);
				$Address=mysqli_real_escape_string($Address);

					if(empty($Name) || empty($Year) )
					{
						echo "<script> alert(\"Fill all the Fields Or Leave a '-' \");</script>";
						echo "<script> history.back();</script>";
					}
			
					else
					{
						$query= "INSERT INTO company_{$Year} VALUES('{$Name}','{$Address}');";
						$result= mysqli_query($connection,$query);
						confirm_query($result);
					}
		  
			}
			echo show_company_form(); ?>
           
        <?php
        }
		
		if($id==3)
		{	echo "<b>Placement Form</b><br><br>" ;
			if(isset($placement_form_id))
			{
				$Name=$_POST["company_name"];
				$Interview_Date=$_POST["interview_date"];
				$Address=$_POST["company_address"];
				$Year=$_POST["year"];
			
				$Name=mysqli_real_escape_string($Name);
				$Address=mysqli_real_escape_string($Address);

				if(empty($Name) || empty($Year) )
				{
					echo "<script> alert(\"Fill all the Fields Or Leave a '-' \");</script>";
					echo "<script> history.back();</script>";
				}
			
				else
				{
					$query= "INSERT INTO placement_{$Year} VALUES('{$Name}','{$Interview_Date}','{$Address}');";
					$result= mysqli_query($connection,$query);
					confirm_query($result);
				}
			}
			
			echo show_placement_form();?>
           
        <?php
		}
		
		if($id==4)
		{	echo "<b>Test Form</b><br><br>" ;	
			if(isset($test_form_id))
			{
				$USN=$_POST["usn"];
				$Name=$_POST["fullname"];
				$Name1=$_POST["company_name1"];
				$Date1=$_POST["test_date1"];
				$Pass_fail1=$_POST["pass_fail1"];
				$Name2=$_POST["company_name2"];
				$Date2=$_POST["test_date2"];
				$Pass_fail2=$_POST["pass_fail2"];
				$Name3=$_POST["company_name3"];
				$Date3=$_POST["test_date3"];
				$Pass_fail3=$_POST["pass_fail3"];
				$Year=$_POST["year"];
			
					if(empty($USN) || empty($Year) )
					{
						echo "<script> alert(\"Fill all the Fields Or Leave a '-' \");</script>";
						echo "<script> history.back();</script>";
					}
				
					else
					{
						$query= "INSERT INTO test_{$Year} VALUES('{$USN}','{$Name}','{$Name1}','{$Date1}','{$Pass_fail1}','{$Name2}','{$Date2}','{$Pass_fail2}','{$Name3}','{$Date3}','{$Pass_fail3}');";
						$result= mysqli_query($connection,$query);
						confirm_query($result);
						echo "<script> alert(\"Submitted Successfully \");</script>";
					
					}
			}
		
			echo show_test_form(); ?>
            
        <?php
		}	
		
		if($id==5)
		{ 	echo "<b>Interview Form</b><br><br>" ;	
			if(isset($interview_form_id) && !empty($interview_form_id) )
			{
				$Year=$_POST["year"];
			
					if(empty($Year))
					{
						echo "<script> alert(\"Enter the Year \");</script>";
						echo "<script> history.back();</script>";
					}
			
					else
					{
						$query = "INSERT INTO interview_{$Year} (USN,Name,Company_name1,Company_name2,Company_name3) ";
						$query.= "SELECT USN,Name,"; 
						$query.= "(CASE WHEN T.Pass_fail1 = 1 THEN Company_name1 ELSE '' END) Company_name1,"; 
						$query.= "(CASE WHEN T.Pass_fail2 = 1 THEN Company_name2 ELSE '' END) Company_name2,"; 
						$query.= "(CASE WHEN T.Pass_fail3 = 1 THEN Company_name3 ELSE '' END) Company_name3 "; 
						$query.= "FROM test_{$Year} T WHERE T.USN NOT IN (SELECT USN FROM interview_{$Year});";
			
			
			
			
			
						$result= mysqli_query($connection,$query);
						confirm_query($result);
						
						if(mysqli_affected_rows($connection)>0)
						echo "<script> alert(\"Entered Successfully \");</script>";

						else
						die("No New Data Entered");
					}
			}
		
		
		
		
		echo show_interview_form(); ?>
           
        <?php
		}	
		
		if($id==6)
		{ 	echo "<b>Final Table Form</b><br><br>" ;

			if(isset($final_form_id) && !empty($final_form_id) )
			{
				$Year=$_POST["year"];
				
				
					if(empty($Year))
					{
						echo "<script> alert(\"Enter the Year \");</script>";
						echo "<script> history.back();</script>";
					}
						
					else
					{
						$query = "INSERT INTO final_{$Year} (USN,Name,DOB,Sex,10th,YOP1,12th,YOP2,BE_CGPA,Company_name1,Date_1,Company_name2,Date_2,Company_name3,Date_3,Email,Phone_no1,Phone_no2) ";
						$query.= "SELECT I.USN,I.Name,S.DOB,S.Sex,S.10th,S.YOP1,S.12th,S.YOP2,S.BE_CGPA,"; 
						$query.= "(CASE WHEN I.Pass_fail1 = 1 THEN Company_name1 ELSE '' END) Company_name1,";
						$query.= "(CASE WHEN I.Pass_fail1 = 1 THEN Date_1 ELSE '' END) Date_1,";
						$query.= "(CASE WHEN I.Pass_fail2 = 1 THEN Company_name2 ELSE '' END) Company_name2,"; 
						$query.= "(CASE WHEN I.Pass_fail2 = 1 THEN Date_2 ELSE '' END) Date_2,";
						$query.= "(CASE WHEN I.Pass_fail3 = 1 THEN Company_name3 ELSE '' END) Company_name3,";
						$query.= "(CASE WHEN I.Pass_fail3 = 1 THEN Date_3 ELSE '' END) Date_3,";
						$query.= "S.Email,S.Phone_no1,S.Phone_no2 ";
						$query.= "FROM interview_{$Year} I ";
						$query.= "LEFT JOIN student_{$Year} S ON S.USN=I.USN ";
						$query.= "WHERE I.USN NOT IN(SELECT USN FROM final_{$Year}) AND (I.Pass_fail1=1 or I.Pass_fail2=1 or I.Pass_fail3=1); ";
						
					
						$result= mysqli_query($connection,$query);
						confirm_query($result);
						
							if(mysqli_affected_rows($connection)>0)
							{
								echo "<div class=\"alert alert-success\" style=\"width:200px\">";
            					echo "<strong>Entered Successfully</strong><br></div>";
							}

							else
							die("No New Data Entered");
					}
			}
		
		
		
		
			echo show_final_form(); ?>
           
        <?php
		}
		
		if($id==7)
		{?>
		 
		 <form method="post">
	     <form>
	     <p>Select A Field</p>
		<select name="interview">
		<option  value="Name">Name</option>
		<option  value="DOB">DOB</option>
		<option  value="Sex">Sex</option>
		<option  value="10th">10th</option>
		<option  value="YOP1">YOP1</option>
		<option  value="12th">12th</option>
		<option  value="YOP2">YOP2</option>
		<option  value="Company_Name_1">Company Name 1</option>
		<option  value="Date_1">Date 1</option>
		<option  value="Pass_fail1">Pass/Fail 1</option>
		<option  value="Company_Name_2">Company Name 2</option>
		<option  value="Date_2">Date 2</option>
		<option  value="Pass_fail2">Pass/Fail 2</option>
		<option  value="Company_Name_3">Company Name 3</option>
		<option  value="Date_3">Date 3</option>
		<option  value="Pass_fail3">Pass/Fail 3</option>
		<option  value="Email">Email</option>
		<option  value="Phone_no1">Phone_no1</option>
		<option  value="Phone_no2">Phone_no2</option>
	</select>
	<br><br>
		<div class="form-group">
            <label for="InputName">Enter New Vealu</label>
            <div class="input-group">
            <input type="text" class="form-control" name="editvalue" placeholder="Enter Value" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>

        <div class="form-group">
            <label for="InputName">USN</label>
            <div class="input-group">
            <input type="text" class="form-control" name="usn" placeholder="Enter USN" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>	

        <div class="form-group">
            <label for="InputName">Year</label>
            <div class="input-group">
            <input type="text" class="form-control" name="year" placeholder="Enter Year" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>			
	<input type="submit" name="Edit_t" value="Submit" class="btn btn-info pull-left">
		</form>
		</form>
		<?php
		if(isset($edit_option_value) && !empty($edit_option_value))
		{
			$new_value=$_POST["editvalue"];
			$USN=$_POST["usn"];
			$Year=$_POST["year"];
		
			$new_value=mysqli_real_escape_string($new_value);

		if(empty($Year) || empty($USN) || empty($new_value))
		{
			echo "<script> alert(\"Enter all the fields\");</script>";
			echo "<script> history.back();</script>";
		}

		else
		{ 
			if($edit_option_value=="YOP1" || $edit_option_value=="YOP2" || $edit_option_value=="Pass_fail1"|| $edit_option_value=="Pass_fail2"||$edit_option_value=="Pass_fail3")
			$query= "UPDATE interview_{$Year} SET {$edit_option_value}={$new_value} WHERE USN='{$USN}' ;";
			
			else
			$query= "UPDATE interview_{$Year} SET {$edit_option_value}='{$new_value}' WHERE USN='{$USN}' ;";
			
			
			
			$result=mysqli_query($connection,$query);
			confirm_query($result);
			
			if(mysqli_affected_rows($connection)>0)
								echo "<script> alert(\"Entered Successfully \");</script>";
							
			else
			echo "<script> alert(\"No Data Updated\");</script>";

		}
		}?>
		
		
		
		<?php
		} 
			
		if($id==8)
		{?>
		 
		 <form method="post">
	     <form>
	     <p>Select A Field</p>
		<select name="test">
		<option  value="Name">Name</option>
		<option  value="DOB">DOB</option>
		<option  value="Sex">Sex</option>
		<option  value="10th">10th</option>
		<option  value="YOP1">YOP1</option>
		<option  value="12th">12th</option>
		<option  value="YOP2">YOP2</option>
		<option  value="Company_Name_1">Company Name 1</option>
		<option  value="Date_1">Date 1</option>
		<option  value="Pass_fail1">Pass/Fail 1</option>
		<option  value="Company_Name_2">Company Name 2</option>
		<option  value="Date_2">Date 2</option>
		<option  value="Pass_fail2">Pass/Fail 2</option>
		<option  value="Company_Name_3">Company Name 3</option>
		<option  value="Date_3">Date 3</option>
		<option  value="Pass_fail3">Pass/Fail 3</option>
		<option  value="Email">Email</option>
		<option  value="Phone_no1">Phone_no1</option>
		<option  value="Phone_no2">Phone_no2</option>
	</select>
	
	
		<div class="form-group">
            <label for="InputName">Enter New Vealu</label>
            <div class="input-group">
            <input type="text" class="form-control" name="editvalue" placeholder="Enter Value" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>

        <div class="form-group">
            <label for="InputName">USN</label>
            <div class="input-group">
            <input type="text" class="form-control" name="usn" placeholder="Enter USN" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>	

        <div class="form-group">
            <label for="InputName">Year</label>
            <div class="input-group">
            <input type="text" class="form-control" name="year" placeholder="Enter Year" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        	</div>
        </div>	
        <input type="submit" name="Edit_i" value="Submit" class="btn btn-info pull-left">		
		</form>
		</form>
		<?php
		if(isset($edit_option_value_t) && !empty($edit_option_value_t))
		{
			$new_value=$_POST["editvalue"];
			$USN=$_POST["usn"];
			$Year=$_POST["year"];
		
			$new_value=mysqli_real_escape_string($new_value);
		
		if(empty($Year) || empty($USN) || empty($new_value))
		{
			echo "<script> alert(\"Enter all the fields\");</script>";
			echo "<script> history.back();</script>";
		}

		else
		{ 
			if($edit_option_value_t=="YOP1" || $edit_option_value_t=="YOP2" || $edit_option_value_t=="Pass_fail1"|| $edit_option_value_t=="Pass_fail2"||$edit_option_value_t=="Pass_fail3")
			$query= "UPDATE test_{$Year} SET {$edit_option_value_t}={$new_value} WHERE USN='{$USN}' ;";
			
			else
			$query= "UPDATE test_{$Year} SET {$edit_option_value_t}='{$new_value}' WHERE USN='{$USN}' ;";
			
			
			
			$result=mysqli_query($connection,$query);
			confirm_query($result);
			
			if(mysqli_affected_rows($connection)>0)
			echo "<script> alert(\"Entered Successfully \");</script>";
							
			else
			echo "<script> alert(\"No Data Updated\");</script>";

		}

		}

		}
		?>
		
		
		
			
			 
        

     
      </form>
			<?php
			if($id==9)
			{

			?>

				 <form method="post">
			     <form>
			     <p>Select A Field</p>
				<select name="table">
				<option  value="student">student</option>
				<option  value="company">company</option>
				<option  value="placement">placement</option>
				<option  value="test">test</option>
				<option  value="interview">interview</option>
				<option  value="final">final</option>
				</select>
				<br><br>
				 <p>Select A Field</p>
				<select name="year">
				<?php 
				$i=2009;

				while($i<2021)
					{
						echo "<option  value=\"{$i}\">{$i}</option>";
					 	$i++;
					}
				?>
				
				</select>
				<br><br>
				<input type="submit" name="Edit_upload" value="Submit" class="btn btn-info pull-left">
				</form>
				</form>
				<br><br>


				<?php 

				if(isset($upload_table) && isset($upload_year) && !empty($upload_table) && !empty($upload_year))
				{
					$_SESSION["upload_table"]="{$upload_table}";
					$_SESSION["upload_year"]="{$upload_year}";
				?>

				<form action="Upload.php" method="post" enctype="multipart/form-data"> 
				<div class="form-group">
	                    <label for="InputName">Choose A file</label>
	                    <div class="input-group">
	                        <input type="file"  name="myFile" required>
	                    	
	                    </div>
	                </div>
	                <input type="submit" name="Submit_upload" value="Upload" class="btn btn-info pull-right">
	            </form>
        
        

        <?php
		}
		}

		?>	


    <script src="../stylesheets/footer_1.js"></script>
    <script src="../stylesheets/footer_2.js"></script>
    <script src="../stylesheets/footer_3.js"></script>
  </body>
</html>

<?php
mysqli_close($connection);
?>