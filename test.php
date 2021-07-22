<html>
<head>
<title>PHP Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <form action="script.php" method="POST">
    <p>Name</p> <input type="text" name="name">
    <p>Email</p> <input type="text" name="email">
    <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
    <input type="submit" value="Send"><input type="reset" value="Clear">
    </form>
</body>
</html>