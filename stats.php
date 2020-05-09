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
    <?php include("header.html"); ?>
	<div id="content">
        <br />
        <!--<p><code><?php include("table.weekconns"); ?></code> unique users logged in this week (resets Saturdays <code>00:00 UTC</code>)</p>-->
	<div style="max-width: 25%; margin: 0 auto;">
        <p style="text-align: center;">Connected Users (<code>5min</code>):</p>
            <?php include("table.connusers"); ?>
        </div>
        <div class="userlist">
        <p>Registered Users (<code>1hr</code>):</p>
            <?php include("table.regusers"); ?>
        </div>
	</div>
</div>
</body>
</html>
