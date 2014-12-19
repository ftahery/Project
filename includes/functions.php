<?php

function make_student_table()
{

	$output="<table class=\"table table-hover\">";
	//$output.="<col style='width:500px; background:grey;'/>";
	//$output.="<col/><col/><col/><col/><col/><col/><col/><col/><col/><col/><col style='width:500px; background:grey;'/>";
	$output.="<tr>";
	$output.="<th> USN </th>";
	$output.="<th>Name</th>";
	$output.="<th>DOB</th>";
	$output.="<th> Sex </th>";
	$output.="<th>10th</th>";
	$output.="<th>YOP1</th>";
	$output.="<th>12th</th>";
	$output.="<th>YOP2</th>";
	$output.="<th>B.E_Perc</th>";
	$output.="<th>Email</th>";
	$output.="<th>Phone_No</th>";
	$output.="<th>Phone_No1</th>";
	$output.="</tr>";
	
return $output;
	}

	
function view_student_table_info($row)
{
	
	echo "<tr>";
	echo "<td>" . $row['USN'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['DOB'] . "</td>";
	echo "<td>" . $row['Sex'] . "</td>";
	echo "<td>" . $row['10th'] . "</td>";
	echo "<td>" . $row['YOP1'] . "</td>";
	echo "<td>" . $row['12th'] . "</td>";
	echo "<td>" . $row['YOP2'] . "</td>";
	echo "<td>" . $row['BE_CGPA'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "<td>" . $row['Phone_no1'] . "</td>";
	echo "<td>" . $row['Phone_no2'] . "</td>";
	echo "</tr>";
}

function make_company_table()
{

	$output="<table class=\"table table-hover\">";
	$output.="<tr>";
	$output.="<th>Name</th>";
	$output.="<th>Address</th>";
	$output.="</tr>";
return $output;
	}

	
function view_company_table_info($row)
{
	echo "<tr>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Address'] . "</td>";
	echo "</tr>";
}

function make_placement_table()
{

	$output="<table class=\"table table-hover\">";
	$output.="<tr>";
	$output.="<th> Name </th>";
	$output.="<th> Date</th>";
	$output.="<th> Address </th>";
	$output.="</tr>";
return $output;
	}

	
function view_placement_table_info($row)
{
	echo "<tr>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['Address'] . "</td>";
	echo "</tr>";
}

function make_test_table()
{

	$output="<table class=\"table table-hover\">";
	$output.="<tr>";
	$output.="<th> USN </th>";
	$output.="<th> Name </th>";
	$output.="<th> Company 1</th>";
	$output.="<th> Test Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="<th> Company 2</th>";
	$output.="<th> Test Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="<th> Company 3</th>";
	$output.="<th> Test Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="</tr>";
return $output;
	}

	
function view_test_table_info($row)
{
	echo "<tr>";
	echo "<td>" . $row['USN'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Company_name1'] . "</td>";
	echo "<td>" . $row['Date_1'] . "</td>";
	echo "<td>" . $row['Pass_fail1'] . "</td>";
	echo "<td>" . $row['Company_name2'] . "</td>";
	echo "<td>" . $row['Date_2'] . "</td>";
	echo "<td>" . $row['Pass_fail2'] . "</td>";
	echo "<td>" . $row['Company_name3'] . "</td>";
	echo "<td>" . $row['Date_3'] . "</td>";
	echo "<td>" . $row['Pass_fail3'] . "</td>";
	echo "</tr>";
}

function make_interview_table()
{

	$output="<table class=\"table table-hover\">";
	$output.="<tr>";
	$output.="<th> USN </th>";
	$output.="<th> Name </th>";
	$output.="<th> Company 1</th>";
	$output.="<th> Interview Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="<th> Company 2</th>";
	$output.="<th> Interview Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="<th> Company 3</th>";
	$output.="<th> Interview Date </th>";
	$output.="<th> Pass/Fail </th>";
	$output.="</tr>";
return $output;
	}

	
function view_interview_table_info($row)
{
	echo "<tr>";
	echo "<td>" . $row['USN'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Company_name1'] . "</td>";
	echo "<td>" . $row['Date_1'] . "</td>";
	echo "<td>" . $row['Pass_fail1'] . "</td>";
	echo "<td>" . $row['Company_name2'] . "</td>";
	echo "<td>" . $row['Date_2'] . "</td>";
	echo "<td>" . $row['Pass_fail2'] . "</td>";
	echo "<td>" . $row['Company_name3'] . "</td>";
	echo "<td>" . $row['Date_3'] . "</td>";
	echo "<td>" . $row['Pass_fail3'] . "</td>";
	echo "</tr>";
}

function make_final_table()
{

	$output="<table class=\"table table-hover\">";
	$output.="<tr>";
	$output.="<th> USN </th>";
	$output.="<th> Name </th>";
	$output.="<th> DOB </th>";
	$output.="<th> Sex </th>";
	$output.="<th> 10th </th>";
	$output.="<th> YOP1 </th>";
	$output.="<th> 12th </th>";
	$output.="<th> YOP2 </th>";
	$output.="<th> B.E_Perc </th>";
	$output.="<th> Company 1 </th>";
	$output.="<th> Date </th>";
	$output.="<th> Company 2 </th>";
	$output.="<th> Date </th>";
	$output.="<th> Company 3 </th>";
	$output.="<th> Date </th>";
	$output.="<th> Email </th>";
	$output.="<th> Phone_No </th>";
	$output.="<th> Phone_No1 </th>";
	$output.="</tr>";
return $output;
	}

	
function view_final_table_info($row)
{
	echo "<tr>";
	echo "<td>" . $row['USN'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['DOB'] . "</td>";
	echo "<td>" . $row['Sex'] . "</td>";
	echo "<td>" . $row['10th'] . "</td>";
	echo "<td>" . $row['YOP1'] . "</td>";
	echo "<td>" . $row['12th'] . "</td>";
	echo "<td>" . $row['YOP2'] . "</td>";
	echo "<td>" . $row['BE_CGPA'] . "</td>";
	echo "<td>" . $row['Company_name1'] . "</td>";
	echo "<td>" . $row['Date_1'] . "</td>";
	echo "<td>" . $row['Company_name2'] . "</td>";
	echo "<td>" . $row['Date_2'] . "</td>";
	echo "<td>" . $row['Company_name3'] . "</td>";
	echo "<td>" . $row['Date_3'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "<td>" . $row['Phone_no1'] . "</td>";
	echo "<td>" . $row['Phone_no2'] . "</td>";
	echo "</tr>";
}

function show_table_link()
{

$output= "<a class=\"btn btn-default\" href=\"create_table.php?id=1\" role=\"button\" >Student Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=2\" role=\"button\" >Company Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=3\" role=\"button\">Placement Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=4\" role=\"button\">Test Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=5\" role=\"button\">Generate Interview Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=6\" role=\"button\">Generate Final Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"create_table.php?id=9\" role=\"button\">Upload File&raquo;</a>";

return $output;
}


function show_company_form()
{
	
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Name Of The Company</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_name\" placeholder=\"Enter Name\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Address</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_address\" placeholder=\"Enter Address\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_c\">";
	
	return $output;
	
}

function show_test_form()
{
	$output="<a class=\"btn btn-default\" href=\"create_table.php?id=7\" role=\"button\">Edit&raquo;</a><br><br>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">USN</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"usn\" placeholder=\"Enter USN\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Name</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"fullname\" placeholder=\"Enter Name\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Company 1</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_name1\" placeholder=\"Enter Company Name\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Date</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"date_1\" placeholder=\"YYYY-MM-DD\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Pass/Fail</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"number\" class=\"form-control\" name=\"pass_fail1\"  >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Company 2</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_name2\" placeholder=\"Enter Company Name\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Date</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"date_2\" placeholder=\"YYYY-MM-DD\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Pass/Fail</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"number\" class=\"form-control\" name=\"pass_fail2\" >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Company 3</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_name3\" placeholder=\"Enter Company Name\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Date</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"date_3\" placeholder=\"YYYY-MM-DD\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Pass/Fail</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"number\" class=\"form-control\" name=\"pass_fail3\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_t\">";
	return $output;

}

function show_placement_form()
{
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Name Of The Company</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_name\" placeholder=\"Enter Name\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Address</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"company_address\" placeholder=\"Enter Address\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Date</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"interview_date\" placeholder=\"YYYY-MM-DD\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_p\">";
	return $output;

}

function show_student_form()
{
	
	$output="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">USN</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"usn\" placeholder=\"Enter USN\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Name</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"fullname\" placeholder=\"Enter Name\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Date Of Birth</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"dob\" placeholder=\"YYYY-MM-DD\" >";
	$output.="<span class=\"input-group-addon\"></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Sex</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"radio\" name=\"sex\" value=\"male\" checked>Male &nbsp;<input type=\"radio\" name=\"sex\" value=\"female\">Female";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">10th Percentage</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"10th\" placeholder=\"Enter percentage\" >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year Of Pass</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"yop1\" placeholder=\"Enter Year\" >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">12th Percentage</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"12th\" placeholder=\"Enter percentage\" >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year Of Pass</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"yop2\" placeholder=\"Enter Year\" >";
	$output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">BE Percentage</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"be_perc\" placeholder=\"Enter Percentage\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Email</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Enter Email\" >";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Phone # 1</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"phone_no1\" placeholder=\"Enter Contact Number\" >";
    $output.="</div></div>";
    $output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Phone # 2</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"phone_no2\" placeholder=\"Enter Contact Number\" >";
    $output.="</div></div>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_s\">";
	return $output;
}

function show_interview_form()
{	$output="<a class=\"btn btn-default\" href=\"create_table.php?id=7\" role=\"button\">Edit&raquo;</a><br><br>";
	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_i\">";
	return $output;

}

function show_final_form()
{

	$output.="<div class=\"form-group\">";
	$output.="<label for=\"InputName\">Year</label>";
	$output.="<div class=\"input-group\">";
	$output.="<input type=\"text\" class=\"form-control\" name=\"year\" required>";
	$output.="<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-asterisk\"></span></span>";
    $output.="</div></div>";
    $output.="<input type=\"submit\" class=\"btn btn-info pull-left\" name=\"Submit_f\">";
	return $output;

}

function navigation_bar($icon)
{
$output="<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">";
$output.="<div class=\"container\"><div class=\"navbar-header\">";
$output.="<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">";
$output.="<span class=\"sr-only\">Toggle navigation</span>";
$output.="<span class=\"icon-bar\"></span>";
$output.="<span class=\"icon-bar\"></span>";
$output.="<span class=\"icon-bar\"></span></button>";
$output.="<a class=\"navbar-brand\" >{$icon}</a></div>";
$output.="<div id=\"navbar\" class=\"navbar-collapse collapse\">";
$output.="<form class=\"navbar-form navbar-right\" role=\"form\">";
$output.="<a class=\"navbar-brand\" href=\"../index/first_page.php\" role=\"button\">Go Home</a>";
$output.="</form></div></div></nav>";
return $output;
}

function navigation_bar1($icon)
{
$output="<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">";
$output.="<div class=\"container\"><div class=\"navbar-header\">";
$output.="<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">";
$output.="<span class=\"sr-only\">Toggle navigation</span>";
$output.="<span class=\"icon-bar\"></span>";
$output.="<span class=\"icon-bar\"></span>";
$output.="<span class=\"icon-bar\"></span></button>";
$output.="<a class=\"navbar-brand\" >{$icon}</a></div>";
$output.="<div id=\"navbar\" class=\"navbar-collapse collapse\">";
$output.="<form class=\"navbar-form navbar-right\" role=\"form\">";
$output.="<a class=\"navbar-brand\" href=\"../aboutus/about_us.php\" role=\"button\">About Us</a>";
$output.="</form></div></div></nav>";
return $output;
}

function head_body_create($title)
{
$output="<head>";
$output.="<meta charset=\"utf-8\">";
$output.="<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
$output.="<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
$output.="<meta name=\"description\" content=\"\">";
$output.="<meta name=\"author\" content=\"\">";
$output.="<link rel=\"icon\" href=\"../../favicon.ico\">";
$output.="<title>{$title}</title>";
$output.="<link href=\"../stylesheets/first.css\" rel=\"stylesheet\">";
$output.="<link href=\"../stylesheets/second.css\" rel=\"stylesheet\">";
$output.="<script src=\"../stylesheets/third.js\"></script>";
$output.="<style>table, th, td {";
$output.="border: 1px solid black;";
$output.="border-collapse: collapse;}";
$output.="th, td {padding: 7px;}</style>";
$output.=" </head>";
return $output;
}
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
  }
  
function confirm_query($result_set) {
global $connection;
		if (!$result_set) {
			die("Database query failed.". mysqli_error($connection));
		}
	}
function head_body_graph($title)
{
$output="<head>";
$output.="<meta charset=\"utf-8\">";
$output.="<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
$output.="<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
$output.="<meta name=\"description\" content=\"\">";
$output.="<meta name=\"author\" content=\"\">";
$output.="<link rel=\"icon\" href=\"../../favicon.ico\">";
$output.="<title>{$title}</title>";
$output.="<script src=\"../stylesheets/jquery-1.8.3.min.js\"></script>";
$output.="<script src=\"../stylesheets/highcharts.js\"></script>";
$output.="<script src=\"../stylesheets/highcharts-3d.js\"></script>";
$output.="<link href=\"../stylesheets/first.css\" rel=\"stylesheet\">";
$output.="<link href=\"../stylesheets/second.css\" rel=\"stylesheet\">";
$output.="<script src=\"../stylesheets/third.js\"></script>";
$output.=" </head>";
return $output;
}

function change_button_color(){
$output="<script>";
$output.="function myFunction(button) {";
$output.= "var text = button.innerHTML;";
$output.= "button.setAttribute(\"class\", \"selected\");";
$output.="}</script>";
return $output;
}

function show_view_link()
{
$output= "<a class=\"btn btn-default\"href=\"view_table.php?id=1\" role=\"button\" >Student Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"view_table.php?id=2\" role=\"button\" >Company Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"view_table.php?id=3\" role=\"button\">Placement Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"view_table.php?id=4\" role=\"button\">Test Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"view_table.php?id=5\" role=\"button\">Interview Table&raquo;</a>";
$output.="<a class=\"btn btn-default\" href=\"view_table.php?id=6\" role=\"button\">Final Placement Table&raquo;</a>";
return $output;
}
?>
