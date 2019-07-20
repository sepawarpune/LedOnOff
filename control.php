<!doctype html>
 
<html lang="en">
<head>
  <title>Control LED Via Web | Arthtech Automation</title> 
</head>
 
<body>
<div style="text-align:center;width:80%; margin-left:auto; margin-right:auto;margin-top:150px;">
 <form method="post" action="control.php">
 <input style="margin:auto;"  type="submit" id="on" name="on" value="Turn On" />
 <input style="margin:auto;" margin-right:auto;" type="submit" id="off" name="off" value="Turn Off" />
 </form>
</div>
<?php
if(isset($_POST['on']) || isset($_POST['off'])){
 if(isset($_POST['on'])){
 $textfile = "LEDstate.txt"; // Declares the name and location of the .txt file
 $fileLocation = "$textfile";
 $fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); // Opens up the .txt file for writing and 
replaces any previous content
 $stringToWrite = "xonn"; // Write either 1 or 0 depending on request from index.html
 fwrite($fh, $stringToWrite); // Writes it to the .txt file
 fclose($fh); 
 }elseif(isset($_POST['off'])){
 $textfile = "LEDstate.txt"; // Declares the name and location of the .txt file
 $fileLocation = "$textfile";
 $fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); // Opens up the .txt file for writing and 
replaces any previous content
 $stringToWrite = "xoff"; // Write either 1 or 0 depending on request from index.html
 fwrite($fh, $stringToWrite); // Writes it to the .txt file
 fclose($fh); 
 }
}
?>
</body>
 
</html>
