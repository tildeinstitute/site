<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>tilde.institute :: Stats</title>
        <link rel="stylesheet" href="tilde.css" type="text/css"/>
        <link rel="icon" type="image/png" href="icon.png"/>
</head>
<body>
<div id="container">
	<div id="logo">
        <img src="logo.png" alt="" /><br />
		<div id="logobyline">
			of OpenBSD Education
		</div>
	</div>
	<div id="navigation">
		<a href="http://tilde.institute">News</a> :: <a href="/signup">Sign Up</a> :: <a href="/coc">Code of Conduct</a> :: <a href="https://tilde.zone/@tildeinstitute">Mastodon</a> :: <a href="/wiki">Wiki</a> :: <a href="https://tildegit.org/institute">Git</a> :: <a href="/stats">Stats</a>
	</div>
	<div id="content">
        <br />
        <p><?php include("table.weekconns"); ?> unique users logged in this week (resets Saturdays 00:00 UTC)</p>
        <p>Connected Users (5min):</p>
            <?php include("table.connusers"); ?>
        <p>Registered Users (1hr):</p>
            <?php include("table.regusers"); ?>
	</div>
</div>
</body>
</html>
