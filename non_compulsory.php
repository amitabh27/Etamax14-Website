<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>ETAMAX14 | Non-Compulsory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../sjJopf_3nf81c74JunHSK/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../sjJopf_3nf81c74JunHSK/css/style.css" />
		<link rel="stylesheet" type="text/css" href="../sjJopf_3nf81c74JunHSK/css/animate-custom.css" />
    </head>
	
	
<script>

window.history.forward();
function noBack() 
{ 
window.history.forward(); 
}

function validateform()
{
var v1=document.forms["reg"]["f1"].value;
var atpos1=v1.indexOf("\"");
var atpos2=v1.indexOf("'");
if ((v1==null || v1=="")|| atpos1!=-1 || atpos2!=-1)
  {
  alert("Enter your roll number");
  return false;
  }
var v2=document.forms["reg"]["f2"].value;
var atpos3=v2.indexOf("\"");
var atpos4=v2.indexOf("'");
if ((v2==null || v2=="")|| atpos3!=-1 || atpos4!=-1)
  {
  alert("Enter your registration number");
  return false;
  }


var v3=document.forms["reg"]["f3"].value;
if (v3=="none")
  {
  alert("Choose  Your non-compulsory event");
  return false;
  }
return true;
}
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

	
	        <div class="container">
            <!-- Codrops top bar -->
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">


<?php

include("connect.php");


$xyzf3="";



$nca="";
$ncb="";
$ncc="";
$ncd="";
$nce="";
$ncf="";
$ncg="";
$nch="";
$nci="";
$ncj="";
$nck="";
$ncl="";
$ncm="";
$ncn="";
$nco="";
$chday=0;
$cday=0;
$variable="";
$eventv1="";





$comp="";
$f11="";
$f22="";
$y1="";
$y2="";
$y3="";
$h1="";
$h2="";
$h3="";
$h4="";
$flag="";
$fg1="";
$f15="1";

$eventflag="";

?>

<h1>REGISTRATION FORM</h1>
<hr><hr>
<form name="reg" method="post" onSubmit="return validateform()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><b>
Roll Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="f1" value="<?PHP print $f11 ; ?>"><br>
Registration Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="f2" value="<?PHP print $f22 ; ?>"><br>

<h2>Choose Your Non-Compulsory Event :</h2>

<select name="f3" size="1">
<option selected value"none">None</option>
<option  value="film_making-TL">Film Making TL</option>
<option  value="film_making-TM">Film Making TM</option>
<option  value="street_play-TL">Street Play TL</option>
<option  value="street_play-TM">Street Play TM</option>
<option  value="solo_singing-elims">Solo Singing Elims</option>
<option  value="duet_singing-elims-TL">Duet Singing Elims TL</option>
<option  value="duet_singing-elims-TM">Duet Singing Elims TM</option>
<option  value="photography">Photography</option>
<option  value="kirigami-day1">Kirigami day 1</option>
<option  value="kirigami-day2">Kirigami day 2</option>
<option  value="hairstyle_and_makeup">Hairstyle and Makeup</option>
<option  value="Dance_workshop-day1-TL">Dance Workshop day 1 TL</option>
<option  value="Dance_workshop-day1-TM">Dance Workshop day 1 TM</option>
<option  value="Dance_workshop-day2-TL">Dance Workshop day 2 TL</option>
<option  value="Dance_workshop-day2-TM">Dance Workshop day 2 TM</option>
<option  value="Dance_workshop-day3-TL">Dance Workshop day 3 TL</option>
<option  value="Dance_workshop-day3-TM">Dance Workshop day 3 TM</option>
<option  value="handwriting_analysis">Handwriting Analysis</option>
<option  value="self_defense">Self Defense</option>
<option  value="palm_reading">Palm Reading</option>
<option  value="salad_carving">Salad Carving</option>
<option  value="caricature">Caricature</option>
<option  value="hoolahoop">Hoolahoop</option>
<option  value="robotrack-TL">Robotrack TL</option>
<option  value="robotrack-TM">Robotrack TM</option>
<option  value="robosoccer-TL">Robosoccer TL</option>
<option  value="robosoccer-TM">Robosoccer TM</option>
<option  value="robo_maze-day1-TL">Robo maze day 1 TL</option>
<option  value="robo_maze-day1-TM">Robo maze day 1 TM</option>
<option  value="robo_maze-day2-TL">Robo maze day2 TL</option>
<option  value="robo_maze-day3-TL">Robo maze day3 TL</option>
<option  value="robo_maze-day2-TM">Robo maze day2 TM</option>
<option  value="robo_maze-day3-TM">Robo maze day3 TM</option>
<option  value="robosumo-TL">Robosumo TL</option>
<option  value="robosumo-TM">Robosumo TM</option>
<option  value="search_and_rescue-TL">Search and Rescue TL</option>
<option  value="search_and_rescue-TM">Search and Rescue TM</option>
<option  value="truss-TL">Truss TL</option>
<option  value="truss-TM">Truss TM</option>
<option  value="contraption-qualifier-TL">Contraption Qualifier TL</option>
<option  value="contraption-qualifier-TM">Contraption Qualifier TM</option>
<option  value="unknown_coding">Unknown Coding</option>
<option  value="reverse_engineering-TL">Reverse Engineering TL</option>
<option  value="reverse_engineering-TM">Reverse Engineering TM</option>
<option  value="junkyard_wars-TL">Junkyard Wars TL</option>
<option  value="junkyard_wars-TM">Junkyard Wars TM</option>
<option  value="tpp-TL">TPP TL</option>
<option  value="line_following_robo-TL">Line Following Robo TL</option>
<option  value="tpp-TM">TPP TM</option>
<option  value="line_following_robo-TM">Line Following Robo TM</option>
<option  value="ethical_hacking">Ethical Hacking</option>
<option  value="level_3_robotics-TL">level 3 Robotics TL</option>
<option  value="level_3_robotics-TM">level 3 Robotics TM</option>
<option  value="application_of_probability">Application of Probability</option>
<option  value="automobile_workshop-day1">Automobile Workshop day1</option>
<option  value="automobile_workshop-day2">Automobile Workshop day2</option>
<option  value="dj_soundmixing-day1">DJ Soundmixing day1</option>
<option  value="dj_soundmixing-day3">DJ Soundmixing day3</option>
<option  value="photoshop-day1">Photoshop day1</option>
<option  value="photoshop-day2">Photoshop day2</option>
<option  value="android_development-day2">Android Development day2</option>
<option  value="android_development-day3">android Development day3</option>
<option  value="rubiks_cube">Rubiks Cube</option>
<option  value="mech_dept_seminar-Sem4,6">Mech Dept Seminar Sem 4 & 6</option>
<option  value="mech_dept_seminar-Sem8">Mech Dept Seminar Sem8</option>
<option  value="humanities_dept_seminar">Humanities Dept Seminar</option>
<option  value="computer_dept_seminar">Computer Dept Seminar</option>
<option  value="it_dept_seminar">IT Dept Seminar</option>
<option  value="extc_dept_seminar">EXTC Dept Seminar</option>
<option  value="elec_dept_seminar-Sem4,6">Elec Dept Seminar Sem 4 & 6</option>
<option  value="elec_dept_seminar-Sem8">Elec Dept Seminar Sem8</option>
<option  value="group_dance">Group Dance</option>
<option  value="live_concert">Live Concert</option>
<option  value="jam_session">Jam Session</option>
</select>

<br><br><br>

<input class="btn btn-1" type="submit" value="submit"  name="submit">
<input class="btn btn-1" type="reset" value="reset"  name="reset">
</b>
<br>
</form>



<?php
include("connect.php");


function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$f11=isset($_POST["f1"]) ? test_input($_POST["f1"]) : '';
$f22=isset($_POST["f2"]) ? test_input($_POST["f2"]) : '';
$f33=isset($_POST["f3"]) ? test_input($_POST["f3"]) : '';


if($f33!="none")
{

/* validating  registration  number*/
$query=mysql_query("SELECT rg_no FROM reg_users WHERE(r_no='$f11');");
while($row = mysql_fetch_array($query))
{
  if($row['rg_no'] == $f22)
  {
   $y1="1";
  }
  else
  {
    $y1="0";
  }
}

/* validating  roll number*/

$query=mysql_query("SELECT r_no FROM reg_users WHERE(rg_no='$f22')");
while($row = mysql_fetch_array($query))
{
  if($row['r_no'] == $f11)
  {
    $y2="1";
  }
  else
 	{
		$y2="0";
	}
}

/*message*/
if($y1=="0" || $y2=="0")
{
$h1="*Invalid combination of roll number and registration number";
}


/*checking whether he has registered for compulsory events*/
$query=mysql_query("SELECT active FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
while($row = mysql_fetch_array($query))
{
   if($row['active'] == '2')
	{
	  $comp="1";
	  break;
	}
   else
	{
	  $comp="0";
	  break;
	}
}

if($comp=="0")
{
$h2="*First you need to register for compulsory events";
}

$ftl=$f33;
/*checking whether he has already taken part in this event*/
if($y1=="1" && $y2=="1" && $comp=="1")
{

	$query=mysql_query("SELECT e1 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
	  $nca=$row['e1'];

	  $xyz=stripos("$nca","-TM");
	  $xyz1=stripos("$nca","-TL");

	  if($xyz==true)
	  {
	    $nca=str_replace("-TM","",$nca);
	  }
	  if($xyz1==true)
	  {
		$nca=str_replace("-TL","",$nca);
	  }

	}



	$query=mysql_query("SELECT e2 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncb=$row['e2'];

		$xyz=stripos("$ncb","-TM");
		$xyz1=stripos("$ncb","-TL");
		if($xyz==true)
		{
		  $ncb=str_replace("-TM","",$ncb);
		}
		if($xyz1==true)
		{
		  $ncb=str_replace("-TL","",$ncb);
		}

	}



	$query=mysql_query("SELECT e3 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncc=$row['e3'];

		$xyz=stripos("$ncc","-TM");
		$xyz1=stripos("$ncc","-TL");
		if($xyz==true)
		{
		  $ncc=str_replace("-TM","",$ncc);
		}
		if($xyz1==true)
		{
		  $ncc=str_replace("-TL","",$ncc);
		}

	}



	$query=mysql_query("SELECT e4 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncd=$row['e4'];

		$xyz=stripos("$ncd","-TM");
		$xyz1=stripos("$ncd","-TL");
		if($xyz==true)
		{
			$ncd=str_replace("-TM","",$ncd);
		}
		if($xyz1==true)
		{
			$ncd=str_replace("-TL","",$ncd);
		}

	}



	$query=mysql_query("SELECT e5 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$nce=$row['e5'];

		$xyz=stripos("$nce","-TM");
		$xyz1=stripos("$nce","-TL");
		if($xyz==true)
		{
			$nce=str_replace("-TM","",$nce);
		}
		if($xyz1==true)
		{
			$nce=str_replace("-TL","",$nce);
		}

	}




	$query=mysql_query("SELECT e6 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncf=$row['e6'];

		$xyz=stripos("$ncf","-TM");
		$xyz1=stripos("$ncf","-TL");
		if($xyz==true)
		{
			$ncf=str_replace("-TM","",$ncf);
		}
		if($xyz1==true)
		{
			$ncf=str_replace("-TL","",$ncf);
		}

	}



	$query=mysql_query("SELECT e7 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncg=$row['e7'];

		$xyz=stripos("$ncg","-TM");
		$xyz1=stripos("$ncg","-TL");
		if($xyz==true)
		{
			$ncg=str_replace("-TM","",$ncg);
		}
		if($xyz1==true)
		{
			$ncg=str_replace("-TL","",$ncg);
		}

	}




	$query=mysql_query("SELECT e8 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$nch=$row['e8'];

		$xyz=stripos("$nch","-TM");
		$xyz1=stripos("$nch","-TL");
		if($xyz==true)
		{
			$nch=str_replace("-TM","",$nch);
		}
		if($xyz1==true)
		{
			$nch=str_replace("-TL","",$nch);
		}

	}




	$query=mysql_query("SELECT e9 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$nci=$row['e9'];

		$xyz=stripos("$nci","-TM");
		$xyz1=stripos("$nci","-TL");
		if($xyz==true)
		{
			$nci=str_replace("-TM","",$nci);
		}
		if($xyz1==true)
		{
			$nci=str_replace("-TL","",$nci);
		}

	}




	$query=mysql_query("SELECT e10 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncj=$row['e10'];

		$xyz=stripos("$ncj","-TM");
		$xyz1=stripos("$ncj","-TL");
		if($xyz==true)
		{
			$ncj=str_replace("-TM","",$ncj);
		}
		if($xyz1==true)
		{
			$ncj=str_replace("-TL","",$ncj);
		}

	}





	$query=mysql_query("SELECT e11 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$nck=$row['e11'];

		$xyz=stripos("$nck","-TM");
		$xyz1=stripos("$nck","-TL");
		if($xyz==true)
		{
			$nck=str_replace("-TM","",$nck);
		}
		if($xyz1==true)
		{
			$nck=str_replace("-TL","",$nck);
		}

	}




	$query=mysql_query("SELECT e12 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncl=$row['e12'];

		$xyz=stripos("$ncl","-TM");
		$xyz1=stripos("$ncl","-TL");
		if($xyz==true)
		{
			$ncl=str_replace("-TM","",$ncl);
		}
		if($xyz1==true)
		{
			$ncl=str_replace("-TL","",$ncl);
		}

	}




	$query=mysql_query("SELECT e13 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncm=$row['e13'];

		$xyz=stripos("$ncm","-TM");
		$xyz1=stripos("$ncm","-TL");
		if($xyz==true)
		{
			$ncm=str_replace("-TM","",$ncm);
		}
		if($xyz1==true)
		{
			$ncm=str_replace("-TL","",$ncm);
		}

	}





	$query=mysql_query("SELECT e14 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$ncn=$row['e14'];

		$xyz=stripos("$ncn","-TM");
		$xyz1=stripos("$ncn","-TL");
		if($xyz==true)
		{
			$ncn=str_replace("-TM","",$ncn);
		}
		if($xyz1==true)
		{
			$ncn=str_replace("-TL","",$ncn);
		}

	}





	$query=mysql_query("SELECT e15 FROM reg_users where (r_no='$f11' AND rg_no='$f22')");
	while($row = mysql_fetch_array($query))
	{
		$nco=$row['e15'];

		$xyz=stripos("$nco","-TM");
		$xyz1=stripos("$nco","-TL");
		if($xyz==true)
		{
			$nco=str_replace("-TM","",$nco);
		}
		if($xyz1==true)
		{
			$nco=str_replace("-TL","",$nco);
		}

	}









$ftl=$f33;
$xyz=stripos("$ftl","-TM");
$xyz1=stripos("$ftl","-TL");
if($xyz==true)
{
$ftl=str_replace("-TM","",$ftl);
}
if($xyz1==true)
{
$ftl=str_replace("-TL","",$ftl);
}




if($ftl!=$nca && $ftl!=$ncb && $ftl!=$ncc && $ftl!=$ncd && $ftl!=$nce && $ftl!=$ncf && $ftl!=$ncg && $ftl!=$nch && $ftl!=$nci && $ftl!=$ncj && $ftl!=$nck && $ftl!=$ncl && $ftl!=$ncm && $ftl!=$ncn && $ftl!=$nco) 
{
$y3="1";
}
if($y3=="")
{
$h3="*You have already choosen a seat for this event earlier";
}
}

/*seats availability*/
if($y3=="1" && $y1=="1" && $y2=="1" && $comp=="1")
{
$flag="1";

$z=$f33;
$z1=stripos("$z","-TM");
$ds=0;


if($z1==true)
{
$xyzf3="1";
}


if($z1!=true)
{



$d=mysql_query("SELECT seats FROM events WHERE(name='$z')"); 
while($row = mysql_fetch_array($d))
{
$ds=$row['seats'];
}
if($ds<1)
{
$flag="0";
$h4="*Seats of  choosen  event are already filled";
}
else
{
$flag="1";
}
}
if($flag=="1")
{
$fg1="1";

}
if($flag=="0")
{
$fg1="0";
}


}


/*checking if he had already registered for 15 events*/

$query=mysql_query("SELECT e15 FROM reg_users WHERE(r_no='$f11')");
while($row = mysql_fetch_array($query))
{
if($row['e15']  != 'x')
{
$f15="0";
$h4="*You cannot participate in more than 15 events";
}}

$clash="false";
$clashecho="";

if($y3=="1" && $y1=="1" && $y2=="1" && $fg1=="1" && $comp=="1" && $f15=="1" && $clash=="false")
{

$variable="";
$cday=0;
$chday=0;
$sameday=0;

$clb=0;
$cub=0;
$chlb=0;
$field123="";

$chub=0;
$choosenevent="";

$i=0;
$current_event=array("e1","e2","e3","e4","e5","e6","e7","e8","e9","e10","e11","e12","e13","e14","e15");


$current1="";


for($i=0;$i<=14 && $clash=="false";$i++)
{

$field123=$current_event[$i] ;
$query=mysql_query("SELECT  $field123 FROM reg_users where(r_no='$f11')");
while($row = mysql_fetch_array($query))
{
$current1=$row[$field123];
}


if($current1 != 'x')
{

$query=mysql_query("SELECT day  FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$chday=$row['day'];
}


$query=mysql_query("SELECT day  FROM events WHERE(name='$current1')");
while($row = mysql_fetch_array($query))
{
$cday=$row['day'];
}

if($chday==$cday)
{
$sameday=1;
}


if($sameday==1)
{
$query=mysql_query("SELECT t_lb FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$chlb=$row['t_lb'];
}
$query=mysql_query("SELECT t_ub FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$chub=$row['t_ub'];
}


$query=mysql_query("SELECT t_ub FROM events WHERE(name='$current1')");
while($row = mysql_fetch_array($query))
{
$cub=$row['t_ub'];
}
$query=mysql_query("SELECT t_lb FROM events WHERE(name='$current1')");
while($row = mysql_fetch_array($query))
{
$clb=$row['t_lb'];
}


if( ($chday==$cday)&& ($chlb<$clb && $chub>$clb && $chub<$cub) || ($chlb>=$clb && $chub<=$cub) || ($chlb>$clb && $chub>$clb && $chub>$cub && $chlb<$cub) ||($chlb<$clb && $chub>$cub))
{
$clash="true";


echo '<font color="red">';
echo "*Chosen event clashes with previously chosen event: " . $current1;
echo '</font>';

}









}
}
$sameday=0;
}

}





/*event heads logic*/
if($y3=="1" && $y1=="1" && $y2=="1" && $fg1=="1" && $comp=="1" && $f15=="1" && $clash=="false") 
{


 $eve=mysql_query("SELECT e_no,e_name FROM eventheads");



$ef33=str_replace("-TL","",$f33);
$ef33=str_replace("-TM","",$ef33);


while($row = mysql_fetch_array($eve))
{
  if($f11==$row['e_no'] && $ef33==$row['e_name'])
  {
    $eventflag="1";
	 break;
  }
}

if($eventflag=="1")
{
$eve=mysql_query("SELECT e_name FROM eventheads where e_no='$f11'");
while($row = mysql_fetch_array($eve))
{
 $desig=$row['e_name'];
 break;
}

if($desig==$ef33)
{
      mysql_query("UPDATE events SET seats=seats+1 WHERE name='$f33'");
      $eventv1="1";
}	  


}







 
 
}

























/*actual updation*/
if($y3=="1" && $y1=="1" && $y2=="1" && $fg1=="1" && $comp=="1" && $f15=="1" && $clash=="false")
{
$place=0;
$names=array("e4","e5","e6","e7","e8","e9","e10","e11","e12","e13","e14","e15");
$i=0;
$field="";

for($i=0; $i<12 && $place==0; $i++)
{
$field=$names[$i];

$query=mysql_query("SELECT $field FROM reg_users WHERE(r_no='$f11')");
while($row = mysql_fetch_array($query))
{
if($row[$field]  == 'x')
{



//mysql_query("UPDATE reg_users SET  $field='$f33' WHERE r_no='$f11'");
/*for event heads*/
if($eventv1=="1")
{

mysql_query("UPDATE   reg_users SET $field='$ef33' WHERE r_no ='$f11'");
}
else
{

mysql_query("UPDATE reg_users SET $field='$f33' WHERE r_no ='$f11'");
}




if($xyzf3!="1")
{
mysql_query("UPDATE events SET seats=seats-1 WHERE name='$f33'");
}


$initial_amount=0;
$event_amount=0;
$f_amount=0;
$query=mysql_query("SELECT amt FROM reg_users WHERE(r_no='$f11')");
while($row = mysql_fetch_array($query))
{
$initial_amount=$row['amt'];
}
$query=mysql_query("SELECT amount FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$event_amount=$row['amount'];
}
$f_amount=$initial_amount + $event_amount;
mysql_query("UPDATE reg_users SET amt='$f_amount' WHERE r_no='$f11'");
$place=1;

echo "<br><h3>Your registration for the event ".$f33." has been done </h3>";

}
}

}


}


if($h1!="")
{
echo '<font color="red">';
echo $h1;
echo '</font>';
}
if($h1=="" && $h2!="")
{
echo '<font color="red">';
echo $h2;
echo '</font>';
}
if($h1=="" && $h2=="" && $h3!="")
{
echo '<font color="red">';
echo $h3;
echo '</font>';
}
if($h1=="" && $h2=="" && $h3=="" && $h4!="")
{
echo '<font color="red">';
echo $h4;
echo '</font>';
}





}

if($f33=="none")
{
echo "<h2>No event selected</h2>";
}

?>


							
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

