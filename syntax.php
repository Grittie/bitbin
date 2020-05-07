<!DOCTYPE html>
<html lang="en" dir="ltr"> 

<head>
    <meta charset="utf-8">
    <title> Project TRAL </title>
    <link rel="stylesheet" type="text/css" href="data/css/syntaxstyle.css">
  
</head>

<body>

<?php
include "connectdb.php";

// Include the GeSHi library.
include_once 'geSHi/geshi.php';

// Variable values from code.html including the code and the chosen programming language.
$language = $_POST["language"];
$source = $_POST["code"];

// Random string generator.
$str = rand(); 
$id = substr(md5(uniqid(rand(1,6))), 0, 8);; 

if ($_POST["code"] != '' && ctype_space($_POST["code"]) == False) {

  // The variables get put in a variable and ran through geSHi.
  $geshi = new GeSHi($source, $language);
  // The syntax highlighted code gets printed.

  $sql = "INSERT INTO bitbin.syntax (id, code, language) VALUES ('${id}', '${_POST['code']}', '${_POST['language']}')";
  $result = $pdo->query($sql);

  echo "Making shareable link...";
  header("Refresh: 2; url=result.php?id='" . $id . "'"); 
} else {

  echo "did not recieve code or language of choice. ";
  header("Refresh: 1; url=code.php"); 

}


?>

</body>

</html>