<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'header.php';

switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        echo "<h1>404 - Page Not Found</h1>";
}

include 'footer.php';
?>
