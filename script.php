<html lang="en">
<head>
    <title>Railway Reservation System</title>
    <style>
</head>
<body>
<?php
   $u=$_GET["username"];
   $p=$_GET["password"];
if ($u == 'admin' && $p == 'psw') {
    header("Location: sub.html");
    exit();
} else {
    echo "Invalid username or password"
}
</body>
</html>