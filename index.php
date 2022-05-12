<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admission Form</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<form  method="POST" action="connect.php">
    <div class="Form">
		<p>Name :</p><input name="Name" id="Name" type="text" placeholder="Name" >
		<p>User Name :</p><input name="UserName" id="UserName" type="text" placeholder="User Name">
		<p>Password :</p><input name="Password" id="Password" type="password" placeholder="Password">
		<p>Email id :</p><input name="Email" id="Email" type="text" placeholder="example@gmail.com">
		<p>Mobile no :</p><input name="Mobile" id="Mobile" type="text" placeholder="Mobile number">

		<li>
            <input type="radio" name="Gender" id="Gender">
            <label for="Gender">Male</label>
            </li>
        <li>
            <input type="radio" name="Gender" id="Gender">
            <label for="Gender">Female</label>
            </li>
        <textarea id="Message" name="Message" type="text"></textarea>
        <input  type="submit" name="submit" id="submit" value="submit"> 
            
    </div>
</form>
</body>
</html>

