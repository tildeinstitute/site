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
		<a href="http://tilde.institute">News</a> :: <a href="/signup">Sign Up</a> :: <a href="/coc">Code of Conduct</a> :: <a href="https://tilde.zone/@tildeinstitute">Mastodon</a> :: <a href="https://wiki.tilde.institute">Wiki</a> :: <a href="https://git.tilde.institute/tilde">Git</a> :: <a href="/stats">Stats</a> :: <a href="https://twtxt.tilde.institute">twtxt</a> :: <a href="tilde.json"><code>tilde.json</code></a>
	</div>
	<div id="content">
        <br />
        <!--<p><code><?php include("table.weekconns"); ?></code> unique users logged in this week (resets Saturdays <code>00:00 UTC</code>)</p>-->
        <p>Connected Users (<code>5min</code>):</p>
            <?php include("table.connusers"); ?>
        <p>Registered Users (<code>1hr</code>):</p>
            <?php include("table.regusers"); ?>
	</div>
</div>
</body>
</html>
