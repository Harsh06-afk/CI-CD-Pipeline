<!DOCTYPE html>
<html>
<head>
<!--    <script src="https://unpkg.com/feather-icons%22%3E</script>-->
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

<div class="top-nav">
    <span class="try" onclick="openNav()">☰</i></span>
<div class="links">
    <?php
    $topNavItems = array("Dashboard", "Profile", "Settings", "Logout");
    foreach ($topNavItems as $item) {
        echo '<a href="#">' . $item . '</a>';
    }
    ?>
</div>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
