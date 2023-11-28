<?php
 echo `
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> ` ;

echo "<h1>hdterrazzo.com</h1>" ; 
 $ipaddress = getenv("REMOTE_ADDR") ;
 echo "<script> console.log( '$ipaddress ') </script>";
?>
<?php


echo 
`</body>
</html>`;
?>