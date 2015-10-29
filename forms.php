<?php $servername = "localhost";
$username = "";
$password = "";
$dbname = "forms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<head>

<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select  {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox" ] {
  margin: 0 4px 8px 0;
}

select   {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style>
 <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
 </head>
 <body>
 <?php if($_GET['step']=='1'){ ?>

<div style="text-align:center">
<div style="width:50%;    margin: 0 auto;">

<form>
<h1>Step 1</h1>
<input type="hidden" name="step" value="2">
<select  name="f1">
<option >How many servers</option>
<option>No clue</option>
<option>< 50</option>
<option>> 50 and < 150</option>
<option>> 150 and < 400</option>
<option>> 400 and < 700</option>
<option>> 700 and < 1,500</option>
<option>> 1,500</option>
</select  name="">
<br>
<legend>How many in IT </legend><input type="number" name="f2">
<br>
<legend>How many offices </legend> <input type="number" name="f3">
 <br>

<legend>How many data centers  </legend><input  type="number" name="f4">
 <br>
 <br>
<select  name="f5">
<option  select  name="">Have change meeting</option>
<option>Yes</option>
<option>No</option>
</select  name="">

<br>
<select  name="f6">
<option select  name="">Service desk tool</option>
<option>Microsoft SCSM</option>
<option>BMC Footprints</option>
<option>CA Service Desk</option>
<option>BMC Remedy</option>
<option>BMC Remedyforce</option>
<option>ServiceNow</option>
<option>ManageEngine</option>
<option>BMC TrackIT</option>
<option>Home grown</option>
<option>Other</option>
<option>None</option>
</select  name="">

<br>
<select  name="f7">
<option select  name="">Event Monitoring
<option>Solarwinds
<option>Nagios
<option>Whats Up
<option>Big Brother
<option>Nimsoft
<option>Home grown
<option>Other
<option>None</option>
</select  name="">

<button type="submit">Step 2</button>
</form>
</div>
</div>
<?php } ?>




 <?php if($_GET['step']=='2'){ 

 $f1 = $_GET['f1'];
 $f2 = $_GET['f2'];
 $f3 = $_GET['f3'];
 $f4 = $_GET['f4'];
 $f5 = $_GET['f5'];
 $f6 = $_GET['f6'];
 $f7 = $_GET['f7'];

$sql = "INSERT INTO form1 (fid, f1, f2, f3, f4, f5, f6, f7)
VALUES ('', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7')";

if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
 
 

<div style="text-align:center">
<div style="width:50%;    margin: 0 auto;">

<form>
<h1>Step 2</h1>
<input type="hidden" name="step" value="3">

<select  name="f1">
<option   select  name="">Life in IT right now is</option>
<option>Highly regarded across our industry.</option>
<option>Respected across the company.</option>
<option>Effortless and a joy.</option>
<option>Good at keeping fires from happening.</option>
<option>Good at putting out fires.</option>
<option>Long days, Short nights.</option>
</select  name="">
<br>

<select  name="f2">
<option   select  name="">Our service desk is</option>
<option>Respected across the company.</option>
<option>Competent and well trained.</option>
<option>Putting in good metrics.</option>
<option>Not likely to solve many problems.</option>
<option>Regarded as part of the problem.</option>
<option>Non-existent</option>
</select  name="">
<br>

<select  name="f3">
<option   select  name="">Our IT change process is</option>
<option>Adept at effectively managing change.</option>
<option>Maturing and proving its worth.</option>
<option>Ineffective and avoided by many people.</option>
<option>A bad joke and a waste of time.</option>
<option>Non-existent.</option>
</select  name="">
<br>
 
 <select  name="f4">
<option>Our disaster recovery process is</option>
<option>Capable of responding to most situations.</option>
<option>Maturing and meets managements needs</option>
<option>Out of synch with on-going changes</option>
<option>Lacking needed configuration data.</option>
<option>Just beginning.</option>
<option>Non-existent.</option>
</select  name="">

 <select  name="f5">
<option>We know which groups use which apps?</option>
<option>Yes</option>
<option>No</option>
</select  name="">

 <select  name="f6"  name="">
<option>We have application dependency mapping</option>
<option>Yes - on all critical systems</option>
<option>Yes - on many systems</option>
<option>No - not on enough systems</option>
<option>No - not at all</option>
</select  name="">

 <select  name="f7">
<option>We have lots of ITIL training</option>
<option>Yes - many people are trained</option>
<option>Yes - but not enough people are trained</option>
<option>No</option>
</select  name="">


<button type="submit">Step 3</button>
</form>
</div>
</div>
<?php } ?>






 <?php if($_GET['step']=='3'){
 $f1 = $_GET['f1'];
 $f2 = $_GET['f2'];
 $f3 = $_GET['f3'];
 $f4 = $_GET['f4'];
 $f5 = $_GET['f5'];
 $f6 = $_GET['f6'];
 $f7 = $_GET['f7']; 

$sql = "INSERT INTO form2 (fid, f1, f2, f3, f4, f5, f6, f7)
VALUES ('', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7')";

if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 ?>

<div style="text-align:left">
<div style="width:50%;    margin: 0 auto;">
<form>
<h1>Step 3</h1>
<input type="hidden" name="step" value="4">

<input type="checkbox" name="f1" /> <label class="light" for="f1"> An effective change management process</label>
<br>
<input type="checkbox" name="f2" /> <label class="light" for="f2">An effective disaster recovery program</label>
<br>
<input type="checkbox" name="f3" /> <label class="light" for="f3">Change the conversation from negative to positive</label>
<br>
<input type="checkbox" name="f4" /> <label class="light" for="f4">Reduce downtime</label>
<br>
<input type="checkbox" name="f5" /> <label class="light" for="f5">Prove our value and worth</label>
<br>
<input type="checkbox" name="f6" /> <label class="light" for="f6">Improve operational maturity</label>
<br>
<input type="checkbox" name="f7" /> <label class="light" for="f7"> Increase service quality</label>
<br>
<input type="checkbox" name="f8" /> <label class="light" for="f8">Improve configuration management and dependency mapping</label>
<br>
<input type="checkbox" name="f9" /> <label class="light" for="f9"> Identify all the systems and applications we support</label>
<br>
<input type="checkbox" name="f10" /> <label class="light" for="f10"> Know our recurring contract obligations</label>
<br>
<input type="checkbox" name="f11" /> <label class="light" for="f11">  Reduce costs</label>
<br>
<input type="checkbox" name="f12" /> <label class="light" for="f12"> Better project management</label>
<br>
<input type="checkbox" name="f13" /> <label class="light" for="f13"> A IT operations tools strategy</label>
<br>
<input type="checkbox" name="f14" /> <label class="light" for="f14"> IT service management training</label>
<br>


<button type="submit">Complete and Send</button>
</form>
</div>
</div>
<?php } ?>


<?php

if($_GET['step']=='4'){
echo '<h1>Completed</h1>';

 $f1 = $_GET['f1'];
 $f2 = $_GET['f2'];
 $f3 = $_GET['f3'];
 $f4 = $_GET['f4'];
 $f5 = $_GET['f5'];
 $f6 = $_GET['f6'];
 $f7 = $_GET['f7'];
 $f8 = $_GET['f8'];
 $f9 = $_GET['f9'];
 $f10 = $_GET['f10'];
 $f11 = $_GET['f11'];
 $f12 = $_GET['f12'];
 $f13 = $_GET['f13'];
 $f14 = $_GET['f14'];

$sql = "INSERT INTO form3 (fid, f1, f2, f3, f4, f5, f6, f7, f8, f9, f10, f11, f12, f13, f14)
VALUES ('', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$f12', '$f13', '$f14')";

if ($conn->query($sql) === TRUE) {
 //  echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}


$conn->close();

?>

</body>