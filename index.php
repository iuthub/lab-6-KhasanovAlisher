<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
                <form action="/index.php">

                    <input type="text" pattern="[a-z]{2}[^\d]" title="It has to contain at least 2 chars. It should not contain any number.">
                </form>
			</dd>
            <dt>email</dt>
            <dd><input type="text" pattern="/([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4})((,[\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4}){1,})?/g></dd>"
                       title="Invalid mail"
            <dt>Username</dt>
            <dd><input type="text" name="username" pattern="(a-z){5}" title="Wrong"></dd>
            <dt>Password</dt>
            <dd><input type="text" name="password" pattern="(a-zA-Z){8}"></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd>
            <dt></dt>
            <dd></dd></dl>
		
		<div>
			Register
		</div>
	</body>
</html>