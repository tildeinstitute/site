<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>tilde.institute :: Sign Up</title>
    {{HEADER}}
</head>
<body>
<div id="container">
    {{LOGONAV}}
	<div id="content" style="text-align: center;">
<?php
require_once('bannedusers.php');

if ($_SERVER["SERVER_NAME"] != "localhost")
	require_once "ultimate-email/support/smtp.php";
function isTaken($istaken) {
    return in_array($istaken, file("userlist", FILE_IGNORE_NEW_LINES));
}
function forbidden_name($name) {
    return in_array($name, [
        '0x0',
        'abuse',
        'admin',
        'admins',
        'administrator',
        'auth',
        'autoconfig',
        'bbj',
        'broadcasthost',
        'copy',
        'forum',
        'ftp',
        'git',
        'gopher',
        'hostmaster',
        'imap',
        'info',
        'irc',
        'is',
        'isatap',
        'it',
        'localdomain',
        'localhost',
        'lounge',
        'mail',
        'mailer-daemon',
        'marketing',
        'marketting',
        'mis',
        'news',
        'nntp',
        'nobody',
        'noc',
        'noreply',
        'pop',
        'pop3',
        'postmaster',
        'retro',
        'root',
        'sales',
        'security',
        'smtp',
        'ssladmin',
        'ssladministrator',
        'sslwebmaster',
        'staging',
        'support',
        'sysadmin',
        'team',
        'usenet',
        'uucp',
        'webmaster',
        'wpad',
        'www',
    ]);
}
$message = "";
if (isset($_REQUEST["username"]) && isset($_REQUEST["email"])) {
    // Check the name.
    $name = trim($_REQUEST["username"]);
    if ($name == "")
        $message .= "<li>please fill in your desired username</li>";
    if (strlen($name) > 32)
        $message .= "<li>username too long (32 character max)</li>";
    if (!preg_match('/^[A-Za-z][A-Za-z0-9]{2,31}$/', $name))
        $message .= "<li>username contains invalid characters (lowercase only, must start with a letter)</li>";
    if (isTaken($name) || forbidden_name($name) || bannedUsers($name))
        $message .= "<li>sorry, the username $name is unavailable</li>";

    // Check the e-mail address.
    $email = trim($_REQUEST["email"]);
    if ($email == "")
        $message .= "<li>please fill in your email address</li>";
    else {
        $result = SMTP::MakeValidEmailAddress($_REQUEST["email"]);
        if (!$result["success"])
            $message .= "<li>invalid email address: " . htmlspecialchars($result["error"]) . "</li>";
        elseif ($result["email"] != $email)
            $message .= "<li>invalid email address. did you mean:  " . htmlspecialchars($result["email"]) . "</li>";
    }

    if ($_REQUEST["sshkey"] == "" || (substr($_REQUEST["sshkey"], 0, 4) !== "ssh-" && substr($_REQUEST["sshkey"], 0, 3) !== "sk-")) {
        $message .= "<li>ssh key required: please create one and submit the public key</li>";
    }


    if ($message == "") { // no validation errors

	    // remember:
	    $username = strtolower($_REQUEST["username"]);
	    $email = $_REQUEST["email"];
	    $interest = $_REQUEST["interest"];
	    $sshkey = $_REQUEST["sshkey"];

        $newuserfile = fopen("newusers.dat", "a");
	    fwrite($newuserfile, "$username $email \"$sshkey\"\n\n");
	    fclose($newuserfile);
        $fuzzyfile = fopen("fuzzies.log", "a");
        fwrite($fuzzyfile, "$username   $email  $interest\n");
        fclose($fuzzyfile);
?>

<br /><h3>Thank you for signing up! Please allow up to 24 hours for an account to become active. If you have any questions or issues, please email <a href="mailto:admins@tilde.institute">admins@tilde.institute</a>.</h3>

<?php

    } else {
        ?>
        <div class="alert alert-warning" role="alert">
            <br /><br /><h3>Please correct the following errors: </h3><br />
            <h4>
            <?=$message?>
            </h4>
        </div>
        <?php
    }
}
?>
</div>
</div>
</body>
</html>
