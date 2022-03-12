<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
    <head>
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="delladee.css">
      </head>
    <body>
    <h1>Thank you!</h1><br />
<?php
echo "Your favorite product was ";
echo $_POST['favproduct'];
echo"<br>";

echo "You ";
echo $_POST['buying'];
echo " considering buying a product.<br>";

echo "You thought the ";
echo $_POST['favpage'];
echo " page was the most appealing.<br>";

echo "You rated the page ";
echo $_POST['rating'];
echo " out of ten.<br>";

echo "You commented: <br>";
echo $_POST['comments'];

?> 
<br />
<br />
<br />
<br />
<br />
<form action="#">
<input type="button" value = "Back" onclick="javascript:history.go(-1)" />
</form>
</body>
</html>
