<?php
$dbhost="localhost";
$dbuser="wild";
$dbpass="munirali";
$dbname="college";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or  die("Error " . mysqli_error($connection));

if(isset($_GET["id"]))
$id= $_GET["id"];
else
$id="";

if(isset($_POST["Submit_s"]))
{
$student_form_id=$_POST["Submit_s"];
$company_form_id=null;
$placement_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Submit_c"]))
{
$company_form_id=$_POST["Submit_c"];
$student_form_id=null;
$placement_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Submit_p"]))
{
$placement_form_id=$_POST["Submit_p"];
$student_form_id=null;
$company_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Submit_t"]))
{
$test_form_id=$_POST["Submit_t"];
$student_form_id=null;
$placement_form_id=null;
$company_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Submit_i"]))
{
$interview_form_id=$_POST["Submit_i"];
$student_form_id=null;
$placement_form_id=null;
$company_form_id=null;
$test_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Submit_f"]))
{
$final_form_id=$_POST["Submit_f"];
$student_form_id=null;
$placement_form_id=null;
$company_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Edit_i"]))
{
$edit_option_value=$_POST["interview"];
$student_form_id=null;
$company_form_id=null;
$placement_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
}

else if(isset($_POST["Edit_t"]))
{
$edit_option_value_t=$_POST["test"];
$student_form_id=null;
$company_form_id=null;
$placement_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
}

else if(isset($_POST["Edit_upload"]))
{
$upload_table=$_POST["table"];
$upload_year=$_POST["year"];
$student_form_id=null;
$company_form_id=null;
$placement_form_id=null;
$test_form_id=null;
$interview_form_id=null;
$final_form_id=null;
$edit_option_value=null;
$edit_option_value_t=null;
}
?>