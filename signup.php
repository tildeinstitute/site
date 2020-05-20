<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>tilde.institute :: Sign Up</title>
    <link rel="stylesheet" href="tilde.css" type="text/css" />
    <link rel="icon" type="image/png" href="icon.png" />
</head>

<body>
    <div id="container">
        <?php include("header.html"); ?>
        <div id="content" class="signup">
	    <h1>Request an Account</h1>
            <p>
                If you haven't received the welcome email within 24 hours, please check your spam folder.
            </p>
            <p>
                <form action="submit.php">
                    <h3>Desired Username:<br /></h3>
                    <input type="text" size="48" name="username" />
                    <h3>Your Email Address:<br /></h3>
                    <input type="email" size="48" name="email" />
                    <h3>What interests you about
                        tilde.institute?<br /></h3>
                    <input type="text" size="48" name="interest" />
                    <h3>Paste Your SSH Key in OpenSSH Format:<br /></h3>
                    <input type="text" size="48" name="sshkey" /><br />
                    <input type="submit" value="Submit" />
                </form>
            </p>
        </div>
    </div>
</body>

</html>
