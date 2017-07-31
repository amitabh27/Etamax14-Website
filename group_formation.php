<?php
include("connect.php");




$upm="";
$checkingflag="";
$anothergroup="";


$teamuni="";
$teamuni1="";
$flag_uniq_id="";




$f11="";
$f22="";
$f33="";
$y1="";
$y2="";
$h1="";
$h2="";
$h3="";
$flag1="";
$flag2="";
$flag3="";
$h4="";
$duplicate="";
$duplim="";
$leader_member_flag="";
$leader_member="";
$unique123="";
$flag_tl ="0";
$mem_not="";
$a1="";
$a2="";
$a3="";
$a4="";
$a5="";
$a6="";
$a7="";
$a8="";
$a9="";
$a10="";
$a11="";
$a12="";
$a13="";
$a14="";
$a15="";
$flash="";
$f_m_1="";
$f_m_2="";



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
$f55=isset($_POST["f5"]) ? test_input($_POST["f5"]) : '';

$f66=isset($_POST["f6"]) ? test_input($_POST["f6"]) : '';


if($f33!="none")
{
 
 
 if (!preg_match("/^[a-zA-Z0-9]*$/",$f11) || !preg_match("/^[a-zA-Z0-9]*$/",$f22) || !preg_match("/^[a-zA-Z0-9]*$/",$f55))
{
echo "fail";
}


else
{

 
 
 
 
 

/* validating  registration  number*/
$query=mysql_query("SELECT rg_no FROM reg_users WHERE(r_no='$f11')");
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

/*finding whether event is group event*/
if($y1=="1" && $y2=="1")
{
$query=mysql_query("SELECT e_type FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{

if($row['e_type'] == 'G')
{
$flag1 = "1";
}
else
{
$flag1 = "0";
}

}
}

/*message*/
if($flag1=="0")
{
$h2="This event is not a group event";
}


/*whether team leader had choosen this event*/
if($flag1 == "1" &&  $y1 == "1"  &&  $y2 == "1")
{

$place=0;
$names=array("e1","e2","e3","e4","e5","e6","e7","e8","e9","e10","e11","e12","e13","e14","e15");
$i=0;
$field="";

for($i=0; $i<15 && $place==0; $i++)
{

$field=$names[$i];
$query=mysql_query("SELECT $field FROM reg_users WHERE(r_no='$f11')");
while($row = mysql_fetch_array($query))
{
if($row[$field] == $f33)
{
$place=1;
$flag2="1";
break;
}
}

}
if($place==0)
{
$h3="you havent registered for this group event";
}
}




/* checking whether member is unique*/

if($f11==$f55 && $flag1 == "1" &&  $y1 == "1"  &&  $y2 == "1"  && $flag2=="1")
{
$leader_member="you cannot register yourself as a team member";
$leader_member_flag="false";
}







/*whether member had registered for this evenr*/

$query=mysql_query("SELECT e1 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a1=$row['e1'];
}

$query=mysql_query("SELECT e2 FROM reg_users where(r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a2=$row['e2'];
}

$query=mysql_query("SELECT e3 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a3=$row['e3'];
}

$query=mysql_query("SELECT e4 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a4=$row['e4'];
}

$query=mysql_query("SELECT e5 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a5=$row['e5'];
}

$query=mysql_query("SELECT e6 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a6=$row['e6'];
}

$query=mysql_query("SELECT e7 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a7=$row['e7'];
}

$query=mysql_query("SELECT e8 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a8=$row['e8'];
}

$query=mysql_query("SELECT e9 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a9=$row['e9'];
}

$query=mysql_query("SELECT e10 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a10=$row['e10'];
}

$query=mysql_query("SELECT e11 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a11=$row['e11'];
}

$query=mysql_query("SELECT e12 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a12=$row['e12'];
}

$query=mysql_query("SELECT e13 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a13=$row['e13'];
}

$query=mysql_query("SELECT e14 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a14=$row['e14'];
}

$query=mysql_query("SELECT e15 FROM reg_users where (r_no ='$f55')");
while($row = mysql_fetch_array($query))
{
$a15=$row['e15'];
}


$ftl=str_replace("-TL","-TM",$f33);
if($ftl==$a1|| $ftl==$a2|| $ftl==$a3|| $ftl==$a4|| $ftl==$a5|| $ftl==$a6|| $ftl==$a7|| $ftl==$a8|| $ftl==$a9|| $ftl==$a10|| $ftl==$a11|| $ftl==$a12|| $ftl==$a13|| $ftl==$a14|| $ftl==$a15)
{
 $flag_tl="1";
 

 
 
 
 
 
 
 
 
 
}

if($flag_tl !="1" &&  $flag1 == "1" &&  $y1 == "1"  &&  $y2 == "1"  && $flag2=="1")
{
$checking=str_replace("-TL","",$f33);
if($checking==$a1|| $checking==$a2|| $checking==$a3|| $checking==$a4|| $checking==$a5|| $checking==$a6|| $checking==$a7|| $checking==$a8|| $checking==$a9|| $checking==$a10|| $checking==$a11|| $checking==$a12|| $checking==$a13|| $checking==$a14|| $checking==$a15)
{
 $checkingflag="1";
 $leaderroll="";
 




 $query=mysql_query("SELECT teamleader FROM grp_events where(gname='$f33' && (m1='$f55' || m2='$f55' || m3='$f55' || m4='$f55' || m5='$f55' || m6='$f55' || m7='$f55' || m8='$f55' || m9='$f55' || m10='$f55' || m11='$f55' || m12='$f55' || m13='$f55') || m14='$f55')");
 while($row=mysql_fetch_array($query))
 {
  $leaderroll=$row['teamleader'];
  break;
 }
 if($leaderroll==$f11)
 { echo "<br><h2><font color='red'> This member already exists in your group</font></h2><br>";
 }

  if($leaderroll!=$f11)
  { 		$anothergroup="Already a member of the group with team leader having Roll No ".$leaderroll."<br>";
  }



 }

  if($checkingflag!="1" && $f11!=$f55)

  {
$checking=str_replace("-TM","-TL",$f33);
    $mem_not="your member has not registered yet for this event yet.";
  }
}



/*actual updation and checking whether member is unique*/
if($flag1 == "1" &&  $y1 == "1"  &&  $y2 == "1" && $flag2=="1" && $leader_member_flag!="false" && $flag_tl=="1")
{

$query=mysql_query("SELECT min FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$min=$row['min'];
}

$query=mysql_query("SELECT max FROM events WHERE(name='$f33')");
while($row = mysql_fetch_array($query))
{
$max=$row['max'];
}

/*checking whether the leader is going to insert first member*/
$query=mysql_query("SELECT teamleader,gname FROM grp_events ");
while($row = mysql_fetch_array($query))
{
if($row['teamleader'] == $f11 && $row['gname'] == $f33)
{
$f_m_1="1";
}
}



if($f_m_1 != "1")
{
mysql_query("INSERT INTO grp_events (gname, teamleader,m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,m11,m12,m13,m14,gmin,gmax) VALUES ('$f33','$f11','x','x','x','x','x','x','x','x','x','x','x','x','x','x',$min,$max)");
}






$placec=0;
$namesc=array("teamleader","m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14");
$ic=0;
$fieldc="";

/*duplicate message generation*/
for($ic=0; $ic<11 && $placec==0; $ic++)
{
$fieldc=$namesc[$ic];

$query=mysql_query("SELECT $fieldc FROM grp_events WHERE(teamleader='$f11' && gname='$f33')");
while($row = mysql_fetch_array($query))
{
if($row[$fieldc]  == $f55)
{
$duplicate="1";
$unique123="1";
$flash="1";
$duplim="*This member already exists in your group";
$placec=1;
break;
}}}




$teamuni=mysql_query("select team_id from reg_users where (r_no='$f55')");
 while($row = mysql_fetch_array($teamuni))
 {
   $teamuni1=$row['team_id'];
   if($teamuni1==$f66)
   	{
	  $flag_uniq_id="1";
	
	  break; 
    }
 }


if($flag_uniq_id!="1")
{
echo "<br><h2>Invalid unique id of team member </h2><br>";
}


 
 if($flag_uniq_id=="1")
 {






if($unique123 != "1")
{
$place1=0;
$names1=array("m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14");
$i1=0;
$field1="";

for($i1=0; $i1<14 && $place1==0; $i1++)
{
$field1=$names1[$i1];


$query=mysql_query("select gmax from grp_events WHERE(teamleader='$f11' && gname='$f33')");
while($row = mysql_fetch_array($query))
{
$count_rem=$row['gmax'];
}



if($count_rem<1)
{
echo "<br><h3>Your Group for the event : ".$f33." is already full </h3>";
break;
}

if($count_rem>0)
{














$query=mysql_query("SELECT $field1 FROM grp_events WHERE(teamleader='$f11' && gname='$f33')");
while($row = mysql_fetch_array($query))
{
if($row[$field1]  == 'x' && $count_rem>0) 
{

/*amount*/
$query=mysql_query("SELECT amount FROM events WHERE(name='$ftl')");
while($row = mysql_fetch_array($query))
{
$current=$row['amount'];
}





mysql_query("UPDATE grp_events SET  $field1='$f55' WHERE(teamleader='$f11' && gname='$f33')");
mysql_query("UPDATE grp_events SET gmax=gmax-1 WHERE(teamleader='$f11' && gname='$f33')");
mysql_query("UPDATE reg_users SET amt=amt-$current WHERE(r_no='$f55')");









$query=mysql_query("SELECT e1 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e1'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e1='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e2 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e2'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e2='$ftl' WHERE(r_no='$f55')");
}

$query=mysql_query("SELECT e3 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e3'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e3='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e4 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e4'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e4='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e5 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e5'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e5='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e6 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e6'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e6='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e7 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e7'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e7='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e8 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e8'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e8='$ftl' WHERE(r_no='$f55')");
}



$query=mysql_query("SELECT e9 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e9'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e9='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e10 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e10'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e10='$ftl' WHERE(r_no='$f55')");
}



$query=mysql_query("SELECT e11 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e11'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e11='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e12 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e12'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e12='$ftl' WHERE(r_no='$f55')");
}



$query=mysql_query("SELECT e13 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e13'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e13='$ftl' WHERE(r_no='$f55')");
}


$query=mysql_query("SELECT e14 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e14'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e14='$ftl' WHERE(r_no='$f55')");
}




$query=mysql_query("SELECT e15 FROM reg_users where (r_no='$f55')");
while($row = mysql_fetch_array($query))
{
$upm=$row['e15'];
}
$ftl=str_replace("TL","TM",$f33);
if($upm==$ftl)
{
$ftl=str_replace("-TL","",$f33);
mysql_query("UPDATE reg_users SET e15='$ftl' WHERE(r_no='$f55')");
}

echo "<br><h3><font color='red'>The Member with the ROLL NO : ".$f55." has been successfully added to your team for the event ".$f33. " </font></h3>";





















$place1=1;
$flag3="1";
break;
}}


}//count_rem>0

}//for
}//unique123

}//unique id of team member


}





if($h1!="")
{
echo '<font color="red">';
echo $h1;
echo '</font>';
echo '<br>';
}
if($h1=="" && $h2!="")
{
echo '<font color="red">';
echo $h2;
echo '</font>';
echo '<br>';
}

if($h1=="" && $h2=="" && $h3!="")
{
echo '<font color="red">';
echo $h3;
echo '</font>';
}


if($h1=="" && $h2=="" && $h3 == "" && $leader_member!="")
{
echo '<font color="red">';
echo $leader_member;
echo '</font>';
echo '<br>';
}

if($h1=="" && $h2=="" && $h3 == "" && $duplim!="" && $flash=="1") 
{
echo '<font color="red">';
echo $duplim;
echo '</font>';
echo '<br>';
}

if($h1=="" && $h2=="" && $h3 == "" && $duplim =="" && $flash !="1" && $flag_tl !="1" && $checkingflag!="1") 
{
echo '<font color="red">';
echo $mem_not;
echo '</font>';
echo '<br>';
}



if($h1=="" && $h2=="" && $h3 == "" && $duplim =="" && $flash !="1" && $flag_tl !="1" && $checkingflag=="1") 
{
echo '<font color="red">';
echo $anothergroup;
echo '</font>';
echo '<br>';
}


}

}

if($f33=="none")
{
echo "No event selected ";
}



?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>ETAMAX14 | Group Formation</title>
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
if ((v1==null || v1=="") || atpos1!=-1 || atpos2!=-1)
  {
  alert("Enter your roll number");
  return false;
  }

var v2=document.forms["reg"]["f2"].value;
var atpos3=v1.indexOf("\"");
var atpos4=v1.indexOf("'");
if ((v2==null || v2=="") || atpos3!=-1 || atpos4!=-1)
  {
  alert("Enter your registration number");
  return false;
  }

/*
var v3=document.forms["reg"]["f3"].value;
if (v3==null || v3=="")
  {
  alert("Enter the event name");
  return false;
  }

*/

var v5=document.forms["reg"]["f5"].value;
var atpos5=v1.indexOf("\"");
var atpos6=v1.indexOf("'");
if ((v5==null || v5=="") || atpos5!=-1 || atpos6!=-1)
  {
  alert("Enter your team member's roll number");
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
                            




<h1>REGISTRATION</h1>
<h2>Group formation :</h2>
<br>

<form name="reg" method="post" onSubmit="return validateform()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><b>
Team Leader's Roll Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="f1" ><br>
Team Leader's Registration Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="f2" ><br>
Event name: &nbsp;&nbsp;
<select name="f3" size="1">
<option selected value="none">None</option>
<option  value="film_making-TL">Film Making TL</option>

<option  value="street_play-TL">Street Play TL</option>


<option  value="duet_singing-elims-TL">Duet Singing Elims TL</option>

<option  value="Dance_workshop-day1-TL">Dance Workshop day 1 TL</option>

<option  value="Dance_workshop-day2-TL">Dance Workshop day 2 TL</option>

<option  value="Dance_workshop-day3-TL">Dance Workshop day 3 TL</option>

<option  value="robotrack-TL">Robotrack TL</option>

<option  value="robosoccer-TL">Robosoccer TL</option>

<option  value="robo_maze-day1-TL">Robo maze day 1 TL</option>

<option  value="robo_maze-day2-TL">Robo maze day2 TL</option>
<option  value="robo_maze-day3-TL">Robo maze day3 TL</option>

<option  value="robosumo-TL">Robosumo TL</option>

<option  value="search_and_rescue-TL">Search and Rescue TL</option>

<option  value="truss-TL">Truss TL</option>

<option  value="contraption-qualifier-TL">Contraption Qualifier TL</option>

<option  value="reverse_engineering-TL">Reverse Engineering TL</option>

<option  value="junkyard_wars-TL">Junkyard Wars TL</option>

<option  value="tpp-TL">TPP TL</option>
<option  value="line_following_robo-TL">Line Following Robo TL</option>

<option  value="level_3_robotics-TL">level 3 Robotics TL</option>
</select>

<hr>

Enter team member's Roll Number :<input type="text" name="f5"><br>
Enter team member's unique id :<input type="text" name="f6"><br>



<br>
<hr>

<input class="btn btn-1" type="submit" value="submit"  name="submit">
<input class="btn btn-1" type="reset" value="reset"  name="reset">
</form>
<br>







	                   </div>
                </div>
            </div>  
        </section>
    </div>
</body>
</html>

