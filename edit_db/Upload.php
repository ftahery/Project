<?php
session_start();
require_once("../includes/functions.php");

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}


$user_os        =   getOS();
$user_browser   =   getBrowser();

//$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";



if($user_os=="Ubuntu" || $user_os=="Linux")
    {
        $path="/var/www/html/"; $check=1;
    }

else if($user_os=="Windows 8.1" && $user_os=="Windows 8" && $user_os=="Windows 7" && $user_os=="Windows Vista" && $user_os=="Windows Server 2003/XP x64" && $user_os=="Windows XP")
    {
        $path='C:\ '; $check=0;
    }

define("UPLOAD_DIR", "{$path}");
 
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
 
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }
 
    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
        
       

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
 
    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }

 echo " this is the name of the file {$name}";

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);

}




$connection=mysqli_init();
mysqli_options($connection,MYSQLI_OPT_LOCAL_INFILE,true);
mysqli_real_connect($connection,"localhost","wild","munirali","college");

$year = $_SESSION["upload_year"];
$table = $_SESSION["upload_table"];


if($table=="student")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(USN,Name,DOB,Sex,10th,YOP1,12th,YOP2,BE_CGPA,Email,Phone_no1,Phone_no2)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}        

else if($table=="company")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(Name,Address)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}

else if($table=="placement")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(Name,Date,Address)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}

else if($table=="test")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(USN,Name,Company_name1,Date_1,Pass_fail1,Company_name2,Date_2,Pass_fail2,Company_name3,Date_3,Pass_fail3)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}

else if($table=="interview")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(USN,Name,Company_name1,Date_1,Pass_fail1)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}

else if($table=="final")
{
    $query="LOAD DATA LOCAL INFILE '{$path}{$name}' INTO TABLE {$table}_{$year} fields terminated by ',' enclosed by '\"' lines terminated by '\n'(USN,Name,DOB,Sex,10th,YOP1,12th,YOP2,BE_CGPA,Company_name1,Date_1,Company_name2,Date_2,Company_name3,Date_3,Email,Phone_no1,Phone_no2)";
    $result=mysqli_query($connection,$query);

    if(mysqli_affected_rows($connection)>0)
        $flag=1;
    else
        $flag=0;
}

if($check==1)
unlink("../../{$name}");

else if($check==0)
unlink('C:\ ');

?>


<html lang="en">
<?php
  $par="File uploading";
  echo head_body_create($par); ?>

  <body>

    <?php
    $par="File Uploading";
    echo navigation_bar($par);
    ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <ul class="selected">
        
      
        <?php
        echo show_table_link();
        ?>
        
      </ul>
      </div>
    </div>

     <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">

        <?php
        if($flag==1)
        {?>

        
        <div class="alert alert-success" style="width:200px">
            <strong>Uploaded Successfully</strong><br>
            
            </div>
            

        <?php
            }
            else
            {?>
                <div class="alert alert-error" style="width:200px">
            <strong>No New Data Uploaded</strong><br>
            <?php echo "mysqli_error($connection)";?>
            </div>
            
        ?>
        
        <?php } ?>

        </div>
        </div>
        </div>
</html>