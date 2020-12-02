<html>
<head>
 <h1>Gästebuch</h1> 
</head>
<body> 

<?php 

echo "<p>Name:</p>". $_POST['name'];

echo "<p>Nachricht:</p>". $_POST['nachricht'];
?>

<form actiom="startseite.php" method="post">

<p>Ihr Name:
 <input type="texet" name="name">
</p>

<p>Ihre Nachricht an uns:</p>
 <p>
 <textarea name="nachricht" type="text" cols="30" rows="5"></textarea>
</p>

<p><input type="submit" value="Senden"></p>

</body>