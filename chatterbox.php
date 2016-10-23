<?php
?>
<html>
<head>
<title>Chatter Box</title></head>

<script>
function submitChat(){
   if(form1.uname.value ==' '||form1.msg.value ==' '){
             alert('ALL FIELDS ARE MANDATROY!!!');
			 return;}
			 var uname=form1.uname.value;
			 var msg=form1.msg.value;
			 var xmlhttp=new XMLHttpRequest();
			 
			 xmlhttp.onreadystatechange=function() {
			    if(xmlhttp.readyState==4&&xmlhttp.status==200){
				        document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;
						}
					}
					xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
					xmlhttp.send();
				}
</script>
<body>								
<form name="form1">
<p>Enter Your Chatname:
  <input type="text" name="uname" /></br>
</p>
<p>Your Message:<br />
  <textarea name="msg"></textarea>
  </br>
</p>
<p>  <a href="#" onclick="submitChat()">SEND</a>
</p>
<div id="chatlogs">
  LOADING CHATLOGS PLEASE WAIT...
</div>
</body>
</html>