<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
<span onclick="openNav()">open</span>
<div class="top-nav">
    <?php
    $topNavItems = array("Dashboard", "Profile", "Settings", "Logout");
    foreach ($topNavItems as $item) {
        echo '<a href="#">' . $item . '</a>';
    }
    ?>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }</script>
</body>
</html>
