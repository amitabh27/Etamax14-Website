<?php
include("connect.php");


$xyzf3=$xyzf4=$xyzf5="";
$eventv2="0";
$eventv1="0";
$eventv3="0";
$ef44="";
$ef33="";
$ef55="";
$pdtrue="";
$sptrue="";
$dtrue="";



$repeat="";
$bluff="";
$bluffmsg1="";
$bluffmsg2="";
$bluffmsg3="";
$flag="";
$f11="";
$f22="";
$h1="";
$h21="";
$h22="";
$h23="";
$h3="";
$h4="";
$z=0;
$y1="";
$y2="";
$fg1=$fg2=$fg3=$fg4=0;

$avoid1="";
$avoid2="";
$avoid3="";
$avoidmsg1="";
$avoidmsg2="";
$avoidmsg3="";

/*
$bluff="0";
$avoid1="0";
$avoid2="0";
$avoid3="0";
*/





$eventflag="0";





//header("Location: http://localhost/newreg3.php");

$f11=$f22=$f33=$f44=$f55="";

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
$f44=isset($_POST["f4"]) ? test_input($_POST["f4"]) : '';
$f55=isset($_POST["f5"]) ? test_input($_POST["f5"]) : '';


if (!preg_match("/^[a-zA-Z0-9]*$/",$f11) || !preg_match("/^[a-zA-Z0-9]*$/",$f22))
{
echo "<h1><font color='red'>fail</font></h1>";
}

/* validating  registration  number*/


else
{
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

if($y1=="1" && $y2=="1")
{

$fg1=1;
/*checking whether he has completed this stage of registration*/
$repeat="true";
$query=mysql_query("SELECT active FROM reg_users where (r_no='$f11' AND rg_no='$f22')");

while($row = mysql_fetch_array($query))
{
if($row['active'] == '1')
{
$repeat="false";
break;
}
}

}

/*message*/
if($repeat == "true")
{
$h4="*You have already completed this stage of  registration process";
}

if($repeat=="false" && $y1=="1" && $y2=="1")
{
$fg2=1;
/*checking availability of seats for compulsory events*/

$flag="1";
$d1s=$d2s=$d3s=0;



$d1=mysql_query("SELECT seats FROM events WHERE name='$f33' "); 
while($row = mysql_fetch_array($d1))
{
$d1s=$row['seats'];
}
if($d1s<1)
{
$flag="0";
$h21="*Seats of  choosen Day1 event are already filled";
}







$d2=mysql_query("SELECT seats FROM events WHERE(name='$f44')"); 
while($row = mysql_fetch_array($d2))
{
$d2s=$row['seats'];
}
if($d2s<1)
{
$flag="0";
$h22="*Seats of  choosen Day2 event are already filled";
}





$d3=mysql_query("SELECT seats FROM events WHERE(name='$f55')"); 
while($row = mysql_fetch_array($d3))
{
$d3s=$row['seats'];
}
if($d3s<1)
{
$flag="0";
$h23="*Seats of  choosen Day3 event are already filled";
}





}
if($flag == "1")
{
$fg3=1;
$dtrue="0";
$pdtrue="0";

$bluff="0";
$avoid1="0";
$avoid2="0";
$avoid3="0";



/*checking whether he is that special  person*/
 
/*debate*/
$query=mysql_query("SELECT d_no FROM  debate");
while($row = mysql_fetch_array($query))
{
if($row['d_no']==$f11)
{
$dtrue="1";
break;
}}





/*personality development*/
$query=mysql_query("SELECT pd_no FROM  personality_development");
while($row = mysql_fetch_array($query))
{
if($row['pd_no']==$f11)
{
$pdtrue="1";
break;
}
else
$pdtrue="0";}


$x1="personality_development";
$x2="debate";


if($dtrue=="1" && $f33!=$x2)
{
$avoid1="1";
$avoidmsg1="*You need to register for  $x2";
}

if($pdtrue=="1" && $f33!=$x1)
{
$avoid3="1";
$avoidmsg3="*You need to register for  $x1";
}



if($dtrue=="0" && $f33=='debate')
{
$bluff="1";
$bluffmsg2="*You are not eligible for registering for  the choosen Day1 event	";

}
if($pdtrue=="0" && $f33=='personality_development')
{
$bluff="1";
$bluffmsg1="*You are not eligible for registering for  the choosen Day1 event	";
}



//}



/*event heads logic*/
if($fg1==1 && $fg2==1 && $fg3==1 && $bluff=="0" && $avoid1=="0" && $avoid2=="0" && $avoid3=="0")
{



$eve=mysql_query("SELECT e_no,e_name FROM eventheads");



$ef33=str_replace("-TL","",$f33);
$ef33=str_replace("-TM","",$ef33);
$ef44=str_replace("-TL","",$f44);
$ef44=str_replace("-TM","",$ef44);
$ef55=str_replace("-TL","",$f55);
$ef55=str_replace("-TM","",$ef55);




while($row = mysql_fetch_array($eve))
{
  if($f11==$row['e_no'] && ($ef33==$row['e_name']|| $ef44==$row['e_name']|| $ef55==$row['e_name']))
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
if($desig==$ef44)
  {

      mysql_query("UPDATE events SET seats=seats+1 WHERE name='$f44'");
	  $eventv2="1";

	  
  }  	  
if($desig==$ef55)
  { 
  
  
  
    mysql_query("UPDATE events SET seats=seats+1 WHERE name='$f55'");
    $eventv3="1";
  }

}//if(eventhead)




}

}//testing


$random_var=rand(1,4);
sleep($random_var);



/*actual updation of database*/
if($fg1==1 && $fg2==1 && $fg3==1 && $bluff=="0" && $avoid1=="0" && $avoid2=="0" && $avoid3=="0")
{

// duplication




$d1=mysql_query("SELECT seats FROM events WHERE name='$f33' "); 
while($row = mysql_fetch_array($d1))
{
$d1s=$row['seats'];
}
if($d1s<1)
{
$flag="0";
$h21="*Seats of  choosen Day1 event are already filled";
}







$d2=mysql_query("SELECT seats FROM events WHERE(name='$f44')"); 
while($row = mysql_fetch_array($d2))
{
$d2s=$row['seats'];
}
if($d2s<1)
{
$flag="0";
$h22="*Seats of  choosen Day2 event are already filled";
}





$d3=mysql_query("SELECT seats FROM events WHERE(name='$f55')"); 
while($row = mysql_fetch_array($d3))
{
$d3s=$row['seats'];
}
if($d3s<1)
{
$flag="0";
$h23="*Seats of  choosen Day3 event are already filled";
}














if($flag=="1")
{






/*header("Location: http://www.etamax14.in/SaJaPaPvNmR/newreg3.php");*/
echo "Registration Successful";
mysql_query("UPDATE reg_users SET active='2' WHERE r_no='$f11'");


if($eventv1=="1")
{

mysql_query("UPDATE   reg_users SET e1='$ef33' WHERE r_no ='$f11'");
}
else
{

mysql_query("UPDATE reg_users SET e1='$f33' WHERE r_no ='$f11'");
}




if($eventv2=="1")
{

mysql_query("UPDATE   reg_users SET e2='$ef44' WHERE r_no ='$f11'");
}
else
{
mysql_query("UPDATE   reg_users SET e2='$f44' WHERE r_no ='$f11'");
}





if($eventv3=="1")
{

mysql_query("UPDATE   reg_users SET e3='$ef55' WHERE r_no ='$f11'");
}
else
{

mysql_query("UPDATE  reg_users SET e3='$f55' WHERE r_no='$f11'");

}



//$calc=mysql_query("SELECT amt FROM reg_users WHERE(r_no='$f11')");

$calc=0;
$aa=mysql_query("SELECT amount FROM events WHERE(name='$f33')");
$bb=mysql_query("SELECT amount  FROM events WHERE(name='$f44')");
$cc=mysql_query("SELECT amount FROM events WHERE(name='$f55')");
while($row = mysql_fetch_array($aa))
{
$aa1=$row['amount'];
  $calc = $calc+$aa1;
if($eventv1=="1")
     $calc = $calc-$aa1;
   
}
while($row = mysql_fetch_array($bb))
{
$bb1=$row['amount'];
$calc=$calc+$bb1;
if($eventv2=="1")
     $calc = $calc-$bb1;



}
while($row = mysql_fetch_array($cc))
{
$cc1=$row['amount'];
$calc=$calc+$cc1;

if($eventv3=="1")
     $calc = $calc-$cc1;


}
mysql_query("UPDATE reg_users SET amt='$calc' WHERE r_no='$f11'");



//if($xyzf3!="1")
//{
mysql_query("UPDATE events SET seats=seats-1 WHERE name='$f33'");
//}

//if($xyzf4!="1")
//{



mysql_query("UPDATE  events SET seats=seats-1 WHERE name='$f44'");
//}

//if($xyzf5!="1")
//{

mysql_query("UPDATE  events SET seats=seats-1 WHERE name='$f55'");
//}


}


}


if($h4 != "")
{
echo '<font color="red">';
echo $h4;
echo '</font>';

}
if($h4 == "" && $h1 != "")
{
echo '<font color="red">';
echo $h1;
echo '</font>';
}


if($h21 != "" || $h22 != "" || $h23 != "")
{
echo '<font color="red">';
echo $h21 . " " . $h22 . " " . $h23;
echo '</font>';
}
if($h21 == "" && $h22 == "" && $h23 == "" && $bluffmsg1  !="")
{
echo '<font color="red">';
echo $bluffmsg1;
echo '</font>';
}
if($h21 == "" &&  $h22 == "" &&  $h23 == "" && $bluffmsg2  !="")
{
echo '<font color="red">';
echo $bluffmsg2;
echo '</font>';
}
if($h21 == "" && $h22 == "" &&  $h23 == "" && $bluffmsg3  !="")
{
echo '<font color="red">';
echo $bluffmsg3;
echo '</font>';
}


if($h21 == "" && $h22 == "" && $h23 == "" && $avoidmsg1 != "")
{
echo '<font color="red">';
echo $avoidmsg1;
echo '</font>';
}
if($h21 == "" && $h22 == "" && $h23 == "" && $avoidmsg3 != "")
{
echo '<font color="red">';
echo $avoidmsg3;
echo '</font>';
}

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
        <title>ETAMAX | COMPULSORY</title>
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

var groupB=new Array("ethical_hacking","level_3_robotics-TL","level_3_robotics-TM","application_of_probability","automobile_workshop-day1","automobile_workshop-day2","dj_soundmixing-day1","dj_soundmixing-day3","photoshop-day1","photoshop-day2","android_development-day2","android_development-day3","rubiks_cube","mech_dept_seminar-Sem4,6","humanities_dept_seminar","computer_dept_seminar","it_dept_seminar","extc_dept_seminar","mech_dept_seminar-Sem8","elec_dept_seminar-Sem4,6","elec_dept_seminar-Sem8");

var groupA=new Array("personality_development","kirigami-day1","kirigami-day2","Dance_workshop-day1-TL","Dance_workshop-day1-TM","Dance_workshop-day2-TL","Dance_workshop-day2-TM","Dance_workshop-day3-TL","Dance_workshop-day3-TM","debate","film_making-TL","film_making-TM","street_play-TL","street_play-TM","solo_singing-elims","duet_singing-elims-TL","duet_singing-elims-TM","photography","hairstyle_and_makeup","handwriting_analysis","self_defense","palm_reading","salad_carving","caricature","hoolahoop","robotrack-TL","robotrack-TM","robosoccer-TL","robosoccer-TM","robo_maze-day1-TL","robo_maze-day1-TM","robo_maze-day2-TL","robo_maze-day2-TM","robo_maze-day3-TL","robo_maze-day3-TM","robosumo-TL","robosumo-TM","search_and_rescue-TL","search_and_rescue-TM","line_following_robo-TM","line_following_robo-TL","truss-TL","truss-TM","contraption-qualifier-TL","contraption-qualifier-TM","unknown_coding","reverse_engineering-TL","reverse_engineering-TM","junkyard_wars-TL","junkyard_wars-TM","tpp-TL","tpp-TM");

var groupC=new Array("live_concert","jam_session","group_dance");






var option123 = document.getElementById("tick").checked;
if(option123 == false)
{
alert("You need to agree to the terms and conditions");
return false;
}



var v1=document.forms["reg"]["f1"].value;
var atpos1=v1.indexOf("\"");
var atpos2=v1.indexOf("'");
if ((v1==null || v1=="")|| atpos1!=-1 || atpos2!=-1)
  {
  alert("Enter your roll no. ");
  return false;
  }
var v2=document.forms["reg"]["f2"].value;
var atpos3=v2.indexOf("\"");
var atpos4=v2.indexOf("'");
if ((v2==null || v2=="")|| atpos3!=-1 || atpos4!=-1)
  {
  alert("Enter your registration no. ");
  return false;
  }



/*var v1=document.forms["reg"]["f1"].value;
if (v1==null || v1=="")
  {
  alert("Enter your roll number");
  return false;
  }
var v2=document.forms["reg"]["f2"].value;
if (v2==null || v2=="")
  {
  alert("Enter your registration number");
  return false;
  }
*/
var v3=document.forms["reg"]["f3"].value;
if (v3==null || v3=="")
  {
  alert("Improper selection of compulsory events");
  return false;
  }
var v4=document.forms["reg"]["f4"].value;
if (v4==null || v4=="")
  {
  alert("Improper selection of compulsory events");
  return false;
  }
var v5=document.forms["reg"]["f5"].value;
if(v5=="none")
{
alert("Improper selection of compulsory events");
return false;
}




var t,c,e,i;
t=0;
c=0;
e=0;


					/////////change the count of i in all the  3 for loops ///////////
					
       
for(i=0;i<52;i++)                           
{
if(groupA[i]==v3 || groupA[i]==v4 || groupA[i]==v5)
{
t=1;
break;
}
}
for(i=0;i<21;i++)
{
if(groupB[i]==v3 || groupB[i]==v4 || groupB[i]==v5)
{
c=1;
break;
}
}
for(i=0;i<3;i++)
{
if(groupC[i]==v3 || groupC[i]==v4 || groupC[i]==v5)
{
e=1;
break;
}
}
if(e==0 || t==0 || c==0)
{
alert("Improper selection of compulsory events");
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



    

<h1>REGISTRATION FOR COMPULSORY EVENTS</h1>
<hr><hr>
<form name="reg" method="post" onSubmit="return validateform()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><b>
Roll Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="f1" value="<?PHP print $f11 ; ?>"><br>
Registration Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="f2" value="<?PHP print $f22 ; ?>"><br>
<br>
<h2>Choose Your Compulsory Events :</h2><br>
<h3>&nbsp;DAY&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAY&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAY&nbsp;3</h3>


<select name="f3" size="1">
<option selected value="none">None</option>
<option  value="personality_development">Personality</option>
<option  value="Dance_workshop-day1-TL">Dance Workshop TL</option>
<option  value="Dance_workshop-day1-TM">Dance Workshop TM</option>
<option  value="kirigami-day1">Kirigami</option>
<option  value="salad_carving">Salad Carving</option>
<option  value="handwriting_analysis">Handwriting Analysis</option>
<option  value="debate">Debate</option>
<option  value="solo_singing-elims">Solo Singing Elims</option>
<option  value="duet_singing-elims-TL">Duet Singing Elims TL</option>
<option  value="duet_singing-elims-TM">Duet Singing Elims TM</option>
<option  value="robotrack-TL">Robotrack TL</option>
<option  value="robotrack-TM">Robotrack TM</option>
<option  value="robosoccer-TL">Robosoccer TL</option>
<option  value="robosoccer-TM">Robosoccer TM</option>
<option  value="robo_maze-day1-TL">Robo Maze TL</option>
<option  value="robo_maze-day1-TM">Robo Maze TM</option>
<option  value="robosumo-TL">Robosumo TL</option>
<option  value="robosumo-TM">Robosumo TM</option>
<option  value="junkyard_wars-TL">Junkyard Wars TL</option>
<option  value="junkyard_wars-TM">Junkyard Wars TM</option>
<option  value="search_and_rescue-TL">Search And Rescue TL</option>
<option  value="search_and_rescue-TM">Search And Rescue TM</option>
<option  value="unknown_coding">Unknown Coding</option>
<option  value="automobile_workshop-day1">Automobile Workshop</option>
<option  value="dj_soundmixing-day1">DJ Soundmixing</option>
<option  value="mech_dept_seminar-Sem8">Mechanical Dept Seminar -Sem 8</option>
<option  value="elec_dept_seminar-Sem8">Electrical Dept Seminar-Sem 8</option>
<option  value="level_3_robotics-TL">Level 3 Robotics TL</option>
<option  value="level_3_robotics-TM">Level 3 Robotics TM</option>
<option  value="ethical_hacking">Ethical Hacking</option>
<option  value="photoshop-day1">Photoshop</option>
<option  value="group_dance">Group Dance</option>
</select>&nbsp;

<select name="f4" size="1">
<option selected value="none">None</option>
<option  value="hoolahoop">Hulahoop</option>
<option  value="Dance_workshop-day2-TL">Dance Workshop TL</option>
<option  value="Dance_workshop-day2-TM">Dance Workshop TM</option>
<option  value="kirigami-day2">Kirigami</option>
<option  value="film_making-TL">Film Making TL</option>
<option  value="film_making-TM">Film Making TM</option>
<option  value="streetplay-TL">Streetplay TL</option>
<option  value="streetplay-TM">Streetplay TM</option>
<option  value="robo_maze-day2-TL">Robo Maze TL</option>
<option  value="robo_maze-day2-TM">Robo Maze TM</option>
<option  value="contraption-qualifier-TL">Contraptions TL</option>
<option  value="contraption-qualifier-TM">Contraptions TM</option>
<option  value="reverse_engineering-TL">Reverse Engineering TL</option>
<option  value="reverse_engineering-TM">Reverse Engineering TM</option>
<option  value="line_following_robo-TL">Line Following Robo TL</option>
<option  value="line_following_robo-TM">Line Following Robo TM</option>
<option  value="humanities_dept_seminar">Humanities Dept Seminar</option>
<option  value="computer_dept_seminar">Computer Dept Seminar</option>
<option  value="rubiks_cube">Rubik's Cube</option>
<option  value="elec_dept_seminar-Sem4,6">Electrical Dept Seminar-Sem 4&6</option>
<option  value="photoshop-day2">Photoshop</option>
<option  value="android_development-day2">Android Development</option>
<option  value="automobile_workshop-day2">Automobile Workshop</option>
<option  value="live_concert">Live Concert</option>

</select>&nbsp;
<select name="f5" size="1">
<option selected value="none">None</option>
<option  value="Dance_workshop-day3-TL">Dance Workshop TL</option>
<option  value="Dance_workshop-day3-TM">Dance Workshop TM</option>
<option  value="photography">Photography</option>
<option  value="self_defense">Self Defense</option>
<option value="hairstyle_and_makeup">Hairstyle and Makeup</option>
<option value="caricature">Caricature</option>
<option  value="palm_reading">Palm Reading</option>
<option  value="robo_maze-day3-TL">Robo Maze TL</option>
<option  value="robo_maze-day3-TM">Robo Maze TM</option>
<option  value="tpp-TL">TPP TL</option>
<option  value="tpp-TM">TPP TM</option>
<option  value="truss-TL">Truss TL</option>
<option  value="truss-TM">Truss TM</option>
<option  value="it_dept_seminar">IT Dept Seminar</option>
<option  value="extc_dept_seminar">EXTC Dept Seminar</option>
<option  value="mech_dept_seminar-Sem4,6">Mech Dept Seminar-Sem 4&6</option>
<option  value="application_of_probability">Application of Probability</option>
<option  value="android_development-day3">Android Development</option>
<option  value="dj_soundmixing-day3">DJ Soundmixing</option>
<option  value="jam_session">Jam Session</option>

</select><br><br><br>

<input type="checkbox" name="tick" id="tick"> I have read the rules and I accept that my options cannot be altered under ETAMAX14.
<br><br>
<br>
<input class="btn btn-1" type="submit" value="Submit"  name="Submit">
<input class="btn btn-1" type="reset" value="Reset"  name="Reset">
</b>
<br>
</form>




                    </div>
                </div>
            </div>  
        </section>
    </div>
</body>
</html>





