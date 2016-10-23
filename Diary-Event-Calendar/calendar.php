<?php
$hostname="localhost";
$username="root";
$password="knd@1997";
$dbname="dheeraj";
$error="Cannot connect to database";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
mysql_select_db($dbname); 
?>
<html>
		<head>
		<title>DSelf</title>
			<script>
					function goLastMonth(month, year){
								if (month == 1) {
									--year;
									month = 12;
								}
								--month;
								var monthstring=""+month+"";
								var monthlength=monthstring.length;
								if(monthlength<=1){
								monthstring="0"+monthstring;}
								document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
					}

					function goNextMonth(month, year){
								if (month == 12) {
									++year;
									month = 0;
								}
								++month;
								var monthstring=""+month+"";
								var monthlength=monthstring.length;
								if(monthlength<=1){
								monthstring="0"+monthstring;}
								document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
					}


			</script>	

          <style>
		       .today{
			   background-color: #00ff00;}
			   .event{
			   background-color: #ffff00;}
		  </style>
		</head>

		<body>
		<center><img src="DCi.jpg"></center>
		<h1 align="center" style="color:green;">DCi SElf</h1>
		<h3 align="center">Your Very Own Personal Diary and Event Calendar</h3>
		<marquee>A Development by DCInc. Private Limited 2015-2016 &copy</marquee>

		<center>		

<form action="search.php" method="POST">
<select name="drop">
<option value="1">Search by Title:</option>
<option value="2">Search by Description:</option>
<option value="3">Search by Added Date:</option>
<option value="4">Search by Event Date:</option>
</select><input type="text" name="search"> <input type="submit" name="submit"></form></br>

				<?php
				if (isset($_GET['day'])){
				$day = $_GET['day'];
				}else{ 
				$day = date("j");
				}
				if (isset($_GET['month'])){
				$month = $_GET['month'];
				}else{
				$month = date("n");	
				}				
				if (isset($_GET['year'])){
				$year = $_GET['year'];
				}else{
				$year = date("Y");	
				}
               			     $d=date("j");$m=date("n");$y=date("Y");
                echo"<a href='".$_SERVER['PHP_SELF']."?month=".$m."&day=".$d."&year=".$y."&v=true'>Home</a>" ;
				// calender variable //				
				$currentTimeStamp = strtotime("$year-$month-$day");
				$monthName = date("F", $currentTimeStamp);
				$numDays = date("t", $currentTimeStamp);
				$counter = 0;
				?>	
            <?php

			if(isset($_GET['add'])){
			    $title=$_POST['txttitle'];
				$detail=$_POST['txtdetail'];
			   $eventdate=$day."/".$month."/".$year;
			   
			    $todayday=date("j");
				$todaymonth=date("n");
				$todayyear=date("Y");
				$today=$todayday."/".$todaymonth."/".$todayyear;
				
						   $conn=mysql_connect("localhost","root","knd@1997");
						   mysql_select_db("dheeraj");
						      
						$sql="INSERT INTO eventcalendar(title,Detail,eventDate,dateAdded) VALUES('$title','$detail','$eventdate','$today')";   
			                  
			 if(mysql_query($sql,$conn)){
			 echo "Event Added Successfully";}
			 else{
			 echo "Event Failed";}
			}
			?>
				<table border='1'>
					<tr>
						<td><input style='width:50px;' type='button' value='<' name='previousbutton' onclick="goLastMonth(<?php echo $month.",".$year?>)"></td>
						<td colspan='5' align='center'> <?php echo $monthName.", ".$year; ?></td>
						<td><input style='width:50px;' type='button' value='>' name='nextbutton' onclick="goNextMonth(<?php echo $month.",".$year?>)"></td>
						<td></td>						
					</tr>
					<tr>
						<td width='50px' align='center'>Sun</td>
						<td width='50px' align='center'>Mon</td>
						<td width='50px' align='center'>Tue</td>
						<td width='50px' align='center'>Wed</td>
						<td width='50px' align='center'>Thur</td>
						<td width='50px' align='center'>Fri</td>
						<td width='50px' align='center'>Sat</td>
					</tr>
					<?php 
						echo "<tr>";
							for($i = 1; $i < $numDays+1; $i++, $counter++) { 
									$timeStamp = strtotime("$year-$month-$i");
									if ($i == 1) {
										$firstDay = date("w", $timeStamp);
										for ($j = 0; $j < $firstDay; $j++, $counter++) {
												// blank space //
												echo "<td>&nbsp;</td>";
										}	
									}
									if ($counter % 7 == 0){
										echo "</tr><tr>";
									}
									$monthstring=$month;
									$monthlength=strlen($monthstring);
									$daystring=$i;
									$daylength=strlen($daystring);
									if($monthlength<=1){
									$monthstring="0".$monthstring;}
									if($daylength<=1){
									$daystring="0".$daystring;}
									$todaysDate=date("d/m/Y");
									$dateToCompare=$daystring .'/'.$monthstring.'/'.$year;
										echo "<td align='center'";
										if($todaysDate==$dateToCompare)
										echo "class='today'";
										else{mysql_connect("localhost","root","knd@1997");
										mysql_select_db("dheeraj");
										   $c=mysql_query("select * from eventcalendar where eventDate='$dateToCompare'");
										   $noofEvent=mysql_num_rows($c);
										   	  if($noofEvent>=1){
										        echo "class='event'";}}
										echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
							          }if(isset($_GET['f'])){
									  include("eventform.php");}
									  $sqlevent="select * from eventcalendar where eventDate='".$day."/".$month."/".$year."'";
                                     $resultEvents=mysql_query($sqlevent);
									 echo"<hr>";					
									 echo "<h4>&nbsp;&nbsp;&nbsp;Your Contents for this Date :".$day .'/'.$month.'/'.$year." Day is :".date("l", mktime(0,0,0,$month,$day,$year))."<br>";
									while($events=mysql_fetch_array($resultEvents)){
									echo "Title: ".$events['title']."<br>";
									echo "Detail: ".$events['Detail']."<br>";}
						echo "</tr>";
					?>

				</table>

               <?php
			   if(isset($_GET['v'])){
			   echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";
            	echo "<p align='center'><a href=show.php>Click Here For Entire History</a>";}
			    
			   ?>
			   </center>
		</body>

</html>