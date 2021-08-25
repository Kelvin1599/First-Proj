<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><h1>Applicant's Details</h1><hr>
        <form method="Post" action="">
            Name:<br>
            <input type="text" name="Name" required/><br><br>
            Employee No:<br>
              <input type="text" name="EmployeeNo" required/><br><br>
              Position Title:<br>
              <input type="text" name="PositionTitle" required/><br><br>
               Department:<br>
              <input type="text" name="Department" required/><br><br>
              
              Type of leave:
              <select>
              <option value="Earned" name="TypeOfLeave">Earned</option>
              <option value="Sick" name="TypeOfLeave">Sick</option>
              <option value="Maternity" name="TypeOfLeave">Maternity</option>
              <option value="Paternity" name="TypeOfLeave">Paternity</option>
              <option value="Examination" name="TypeOfLeave">Examination</option>
              <option value="Compassionate" name="TypeOfLeave">Compassionate</option>
              <option value="Compensatory" name="TypeOfLeave">Compensatory</option>
              <option value="Study" name="TypeOfLeave">Study</option>
              <option value="Conference" name="TypeOfLeave">Conference</option>
              <option value="Unpaid" name="TypeOfLeave">Unpaid</option>
              </select><br>
              
              &nbsp; &nbsp; &nbsp;From(Last working day):
             &nbsp; <input type="date" name="from"/><br>
               &nbsp;&nbsp; &nbsp;To(Return to work on):
              <input type="date" name="To"/><br>
              &nbsp; &nbsp; No. of days:
            &nbsp; &nbsp;  <input type="number" name="NoOfDays"/><br><br>
              
           
              Reasons for leave:<br>
              <textarea name="ReasonForLeave"></textarea><br><br>
              <input type="submit" name="submit" value="Send"/>
            
        </form>
        <?php
      if(isset($_POST['submit'])){
	//connect to the database first
	include 'connection.php';
	//capture the form database
	$Name=$_POST['Name'];
	$EmployeeNo=$_POST['EmployeeNo'];
	$PositionTitle=$_POST['PositionTitle'];
	$Department=$_POST['Department'];
        $TypeOfLeave=$_POST['TypeOfLeave'];
        $from=$_POST['from'];
        $To=$_POST['To'];
        $NoOfDays=$_POST['NoOfDays'];
        $ReasonForLeave=$_POST['ReasonForLeave'];
	
	if($Name!="" && $EmployeeNo!="" && $PositionTitle!="" && $Department!="" && $TypeOfLeave!="" && $from!="" && $To!="" && $NoOfDays!="" && $ReasonForLeave!=""){
		$query="insert into applicant_details values('".$Name."', '".$EmployeeNo."', '".$PositionTitle."', '".$Department."', '".$TypeOfLeave."', '".$from."', '".$To."', '".$NoOfDays."', '".$ReasonForLeave."',)";
		//To excute the query use mysqli_query() function
		$result=mysqli_query($link, $query);
		
		if($result){
			echo"Data saved!";
			
		}
		else{
			echo mysqli_error ($link);
		}
	}
}
?>

     
    </body>
</html>
