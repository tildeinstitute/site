<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/1/DTD/1-strict.dtd">
<html xmlns="http://www.w3.org/1999/" lang="en" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text; charset=utf-8" />
        <title>tilde.institute :: Wiki</title>
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
		<a href="http://tilde.institute">News</a> :: <a href="/signup">Sign Up</a> :: <a href="/irc">IRC</a> :: <a href="/coc">Code of Conduct</a> :: <a href="https://tilde.zone/@tildeinstitute">Mastodon</a> :: <a href="/wiki">Wiki</a> :: <a href="https://tildegit.org/institute">Git</a> :: <a href="/stats">Stats</a>
	</div>
	<div id="content">
    <?php 
        if (!isset($_GET["page"]) || !file_exists("wikipages/{$_GET['page']}.wiki")) {
    ?>

        <h2>~institute wiki</h2>
        <p>Welcome to the tilde.institute wiki</p>

        <p>If you want to add a page, check out the
        <a href="https://tildegit.org/institute/site/src/branch/master/wikipages">repository</a> and open a PR!
        </p>

        <h3>Pages:</h3>
        &nbsp;&nbsp;<a href="wiki.php?page=bchs">BCHS Intro Guide</a><br />
        &nbsp;&nbsp;<a href="wiki.php?page=dcss">Dungeon Crawl Stone Soup</a><br />
        &nbsp;&nbsp;<a href="wiki.php?page=finger">Finger</a><br />
        &nbsp;&nbsp;<a href="wiki.php?page=irc">IRC</a><br />
        &nbsp;&nbsp;<a href="wiki.php?page=unixprotips">UNIX ProTips</a><br />
        <?php

        } else {
            include("wikipages/{$_GET['page']}.wiki");
        } ?>
	</div>
</div>
</body>
</html>
