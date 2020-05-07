<!DOCTYPE html>
<html lang="en" dir="ltr"> 

<head>
    <meta charset="utf-8">
    <title> Project TRAL </title>
    <link rel="stylesheet" type="text/css" href="data/css/syntaxstyle.css">
  
</head>

<body>

<h1> Input link </h1>

<?php

include "connectdb.php";
// Include the GeSHi library.
include_once 'geSHi/geshi.php';

$query = 'SELECT * FROM bitbin.syntax WHERE id =' . $_GET['id'];
$result = $pdo->query($query)->fetch();

$source = $result['code'];
$language = $result['language'];

// The variables get put in a variable and ran through geSHi.
$geshi = new GeSHi($source, $language);
// The syntax highlighted code gets printed.
echo $geshi->parse_code();

echo 'De code is in: ' . $language . ' geschreven.';
echo '<br> <br>';
echo 'Your hash is: ' . $_GET['id'];

?>

</body>

</html>

