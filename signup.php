<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <div id="content" style="text-align: center;">
            <p>
                If you haven't received the welcome email within 24 hours, please check your spam folder.
            </p>
            <p>
                <form action="submit.php">
                    <h3 style="margin-bottom: 0.5em;">&nbsp;&nbsp;&nbsp;&nbsp;Desired Username:<br /></h3>
                    <input type="text" size="32" name="username" />
                    <h3 style="margin-bottom: 0.5em;">&nbsp;&nbsp;&nbsp;&nbsp;Your Email Address:<br /></h3>
                    <input type="email" size="32" name="email" />
                    <h3 style="margin-bottom: 0.5em;">&nbsp;&nbsp;&nbsp;&nbsp;What interests you about
                        tilde.institute?<br /></h3>
                    <input type="text" size="32" name="interest" />
                    <h3 style="margin-bottom: 0.5em;">&nbsp;&nbsp;&nbsp;&nbsp;Paste Your SSH Key:<br /></h3>
                    <input style="margin-bottom: 1.0em;" type="text" size="32" name="sshkey" /><br />
                    <input type="submit" value="Submit" />
                </form>
            </p>
        </div>
    </div>
</body>

</html>