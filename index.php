<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i data-feather="x"></i></a>
    <?php
    $links = [
        ['text' => 'About', 'url' => 'www.google.com'],
        ['text' => 'Services', 'url' => 'www.fb.com'],
        ['text' => 'Clients', 'url' => 'www.ig/com'],
        ['text' => 'Contact', 'url' => '#']
    ];
    foreach ($links as $link) {
        echo '<a href="' . $link['url'] . '">' . $link['text'] . '</a>';
    }
    ?>
</div>
<div class="top-nav">
    <span class="try" onclick="openNav()"><i data-feather="menu"></i></span>
<div class="links">
    <?php
//    $topNavItems = array("Dashboard", "Profile", "Settings", "Logout");
//    foreach ($topNavItems as $item) {
//        echo '<a href="#">' . $item . '</a>';
//    }
    $lin = [
            ['text' => 'Dashboard' , 'url' =>'#'],
        ['text' => 'Profile' , 'url'=> '#'],
        ['text'=>'Settings' , 'url'=>'#'],
        ['text'=>'Logout' , 'url'=>'#']
    ];
    foreach($lin as $link){
        echo '<a href="'. $link['url'].'">'.$link['text'].'</a>';
    }
    ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    feather.replace();
</script>
</body>
</html>
