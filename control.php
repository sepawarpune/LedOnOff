<?php
if(isset($_POST['on']) || isset($_POST['off'])){
 if(isset($_POST['on'])){
 $textfile = "LEDstate.txt"; // Declares the name and location of the .txt file
 $fileLocation = "$textfile";
 $fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); // Opens up the .txt file for writing and replaces any previous content
 $stringToWrite = "xonn"; // Write either 1 or 0 depending on request from index.html
 fwrite($fh, $stringToWrite); // Writes it to the .txt file
 fclose($fh); 
 }elseif(isset($_POST['off'])){
 $textfile = "LEDstate.txt"; // Declares the name and location of the .txt file
 $fileLocation = "$textfile";
 $fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); // Opens up the .txt file for writing and replaces any previous content
 $stringToWrite = "xoff"; // Write either 1 or 0 depending on request from index.html
 fwrite($fh, $stringToWrite); // Writes it to the .txt file
 fclose($fh); 
 }
}
?>
