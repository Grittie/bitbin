<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Project TRAL </title>
    <link rel="stylesheet" type="text/css" href="data/css/retrievestyle.css">
    <?php include "connectdb.php";?>
</head>

<body>

<h1> Enter code hash here: </h1>

<form name="code" action="retrieve.php" method="post" >

    <img name="logo" src="data/img/logo.png">
    <br>
    <input type="text" id="hash" name="hash">
    <input class="code" id="code" type="submit">
      
</form>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
    <a href="index.html">Homepage</a>
    <a href="code.html">New_Code</a>
    <a href="retrieve.php">Input_Link</a>
    <a href="howto.html">HowTo</a>
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()">Menu</button>
</div> 

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>

<?php
$id = $_POST["hash"];

if ($id != '' && ctype_space($id) == False) {
    echo "Retrieving code...";
    header("Refresh: 1; url=result.php?id='" . $id . "'"); 
} else {
}
?>


</body>

</html>