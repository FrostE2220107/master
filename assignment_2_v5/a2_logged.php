<?php
//message if the user is logged in or not
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
	echo " <a href='a2_logout.php'>Click here if you want to sign out</a>"; 
} else {
    echo "Please log in first to see this page."; 
}
echo "<br>";
echo "<br>";
?>