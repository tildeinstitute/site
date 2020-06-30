<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>tilde.institute :: FAQ</title>
    <link rel="stylesheet" href="tilde.css" type="text/css" />
    <link rel="icon" type="image/png" href="icon.png" />
    <?php include("_webmention.html") ?>
</head>

<body>
    <div id="container">
        <?php include("header.html"); ?>
	<div id="content" class="faq">
		<h1>FAQ</h1>

		<p class="q">How do I change my interactive shell?</p>
		<p>Once you've logged in, check the path for your desired shell with</p>
		<div class="code">$ which fish</div>
		<p>Replacing <code>fish</code> with the the shell you want. In this case, the path will be <code>/usr/local/bin/fish</code>
			Now, run:</p>
		<div class="code">$ EDITOR=nano chsh</div>
		<p>Change the <code>Shell</code> line to read:</p>
		<div class="code">Shell: /usr/local/bin/fish</div>
		<p>Save and exit. You'll need to log out then back in.</p>

		<p class="q">How do I change the index page of my site?</p>
		<p>Because of the way <code>httpd(8)</code> is set up, you'll need to ask in <code>#institute</code> or send an email to <code>admins@tilde.institute</code></p>

		<p class="q">Can you install this package for me?</p>
		<p>As long as it's in the OpenBSD ports tree, and doesn't facilitate any potentially malicious behavior (like <code>nmap</code>),
			then it's probably not a big deal. Either hop on IRC and ask in <code>#institute</code> or send an email to <code>admins@tilde.institute</code></p>

		<p class="q">How do I authenticate with SMTP remotely?</p>
		<p>Only local access to SMTP is allowed. However, you can use an SSH tunnel on your machine to send mail.</p>
		<div class="code">ssh -nNTL 25:localhost:25 tilde.institute</div>
		<p>You won't need to supply a username or password when sending mail via <code>localhost:25</code> this way, since you're already authenticated via SSH.</p>

		<p class="q">Can you whitelist a port for me in the firewall?</p>
		<p>Sorry, but this presents too much of a security risk on a public-access system.</p>

		<p class="q">Are user services allowed?</p>
		<p>Generally, yes. If you're running something that's using a ton of resources or in some way affecting other users or the general use of the system,
			then we'll kill it. Just be aware of what you're running and how it may affect the system and other users.</p>

		<p class="q">Are IRC bots allowed?</p>
		<p>Yes, though there are restrictions on their use on the <code>tilde.chat</code> IRC network. They should not reside in <code>#meta</code>, instead keep
			them in a private channel or in <code>#bots</code>. Bots must also conform to the <a href="https://tildegit.org/tildeverse/rfcs/src/branch/master/rfcs/rfc2.md">bot guidelines listed here</a>.</p>
		<p>Don't run <code>eggdrop</code> from tilde.institute. There are legitimate uses for <code>eggdrop</code>, but separating the people with some kind
			of legitimate use from malicious users is tiring. So, no <code>eggdrop</code>.</p>
		<br />
		<br />
        </div>
    </div>
</body>

</html>
