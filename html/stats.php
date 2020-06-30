<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>tilde.institute :: Stats</title>
    {{HEADER}}
</head>
<body>
<div id="container">
    {{LOGONAV}}
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
