<?php
include ('header.php');
?>
<b><p align=right><a href="http://localhost/status.php">Status of my complaint</a></p></b><br>
<fieldset>
<legend>Complaint</legend>
<form action="http://localhost/submit.php" method="POST" onsubmit="return validateForm()" name="complain" enctype="multipart/form-data">
Complaint related to: &nbsp;&nbsp; 
<select name="type">
<option value="academics" name="type">Academics</option>
<option value="mess" name="type">Mess</option>
<option value="electricity" name="type">Electricity</option>
<option value="plumber" name="type">Plumber</option>
<option value="carpenter" name="type">Carpenter</option>
</select><br>
Address:
&nbsp;&nbsp;&nbsp;<label for="hall">Hall:</label> &nbsp; <input type="text" size=5 name="hall" id="hall"> &nbsp;&nbsp;<label for="room">Room No: </label>&nbsp;&nbsp;<input type="text" name="room" size=5 id="room"><br>
<label for="complaint">Complaint:</label><br><textarea cols=60 rows=5 id="complaint" name="complaint"></textarea><br>
<label for="image">Upload an image:<small>(optional)</small>&nbsp;&nbsp;</label><input type="file" name="file" id="filename"><br>
<label for="suggestion">Suggestion:<small>(optional)</small></label><br><textarea cols=60 rows=3 id="suggestion" name="suggestion"></textarea><br>
Priority order :
<input type="radio" value="2" checked id="normal" name="order"><label for="normal">Normal</label>
<input type="radio" value="1" id="urgent" name="order"><label for="urgent">Urgent</label> <br>
<label for="phone">Phone No: &nbsp;&nbsp;</label><input type="text" name="phone"><br>
<input type="submit" value="submit">
</form>
</fieldset>
<script>
function validateForm()
{
var f=document.getElementById('filename');
var fileName = f.value;
var x=document.forms["complain"]["hall"].value;
var y=document.forms["complain"]["room"].value;
var z=document.forms["complain"]["complaint"].value;
var u=document.forms["complain"]["phone"].value;
if (x==null || x=="")
  {
  alert("Hall field is required");
  return false;
  }
 else if (y==null || y=="")
  {
  alert("Room No. is required");
  return false;
  }
   else if (z==null || z=="")
  {
  alert("Fill the complaint in the box");
  return false;
  }
   else if (u==null || u=="")
  {
  alert("Give your phone no.");
  return false;
  }
 else if (fileName==null || fileName==""){return true;}
else {var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc")
{
return true;
} 
else
{
alert("Upload Gif or Jpg images only");
f.focus();
return false;
}
}
  
}
</script>
<br><br><br>


