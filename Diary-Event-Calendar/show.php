<html>
<head><title>Your Personal Entry Box</title></head>
<body>
<center>
<h3>Welcome you to the DCi personal Entry Contents of your ID</h3>
<?php
mysql_connect("localhost","root","knd@1997");
mysql_select_db("dheeraj");
$s=mysql_query("select * from eventcalendar order by eventDate ASC");
echo"<table border='1'>";
echo "<tr><td><strong>Title</strong></td><td><strong>Details</strong></td><td><strong>Event on</strong></td><td><strong>Event Added on</strong></td></tr>";
while($c=mysql_fetch_array($s)){
echo "<tr><td>".$c['title']."&nbsp&nbsp </td><td>".$c['Detail']."&nbsp&nbsp </td><td>".$c['eventDate']."&nbsp&nbsp </td><td>".$c['dateAdded']."&nbsp&nbsp </td></tr>";}
?></table></center>
</body>
</html>
