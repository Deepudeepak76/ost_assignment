<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>id</label>
<input class="input" name="id" type="text" value="">
<label>first_name:</label>
<input class="input" name="first_name" type="text" value="">
<label>last_name:</label>
<input class="input" name="last_name" type="text" value="">
<label>email</label>
<input class="input" name="email" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>
