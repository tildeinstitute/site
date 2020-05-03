<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>tilde.institute :: Public-access OpenBSD machine</title>
    <link rel="stylesheet" href="tilde.css" type="text/css" />
    <link rel="icon" type="image/png" href="icon.png" />
</head>

<body>
    <div id="container">
        <?php include("header.html"); ?>
        <div id="front-content">
            <p>Welcome to tilde.institute, a public-access machine in the <a
                    href="https://tildeverse.org">tildeverse</a>. This is a space for people to
                explore the <code>OpenBSD</code> operating system, in addition to exploring the more social
                aspects of a multi-user UNIX system.</p>
            <p>User sites are accessible via <code>https://&lt;user&gt;.tilde.institute</code></p>
            <p style="margin-top:-1.0rem">A list of user gopherholes is available at
                <code>gopher://tilde.institute</code></p>
            <p style="margin-top:-1.0rem">User git repositories are at <code><a href="https://git.tilde.institute">
                https://git.tilde.institute</a></code></p>
            <p>The mailing list will be the primary means of communication between tilde.institute admins and users
                regarding announcements and critical issues. Web archive and <a
                    href="https://lists.tildeverse.org/postorius/lists/institute.lists.tildeverse.org/">subscribing
                    information available here</a>.</p>
            <p>The following services run directly on the server:</p>
            <p>
                <ul>
                    <li><code>cgit</code></li>
                    <li><code>efingerd</code></li>
                    <li><code>gophernicus</code></li>
                    <li><code>httpd(8)</code></li>
                    <li><code>identd(8)</code></li>
                    <li><code>php73_fpm</code></li>
                    <li><code>slowcgi(8)</code></li>
                    <li><code>smtpd(8)</code></li>
                    <li><code>unbound(8)</code></li>
                </ul>
            </p>
            <p>The following services run on separate VMs:</p>
            <p>
                <ul>
                    <li><code>inspircd</code></li>
                    <li><code><a href="https://github.com/getwtxt/getwtxt">getwtxt</a></code></li>
                </ul>
            </p>
            <p>The compilers and interpreters available are:</p>
            <ul>
                <li><code>brainf*ck 2.7.1</code></li>
                <li><code>clang 8.0.1</code></li>
                <li><code>clisp 2.49</code></li>
                <li><code>clojure 1.10.0.4</code></li>
                <li><code>crystal 0.30.1</code></li>
                <li><code>elixir 1.9.1</code></li>
                <li><code>erlang 21.2</code></li>
                <li><code>gcc 8.3.0 (see the <a href="https://wiki.tilde.institute/w/gcc8">wiki page</a>)</code></li>
                <li><code>gforth 0.7.3</code></li>
                <li><code>gfortran / g95 8.3.0 (see the <a href="https://wiki.tilde.institute/w/gcc8">wiki page</a>)</code>
                </li>
                <li><code>ghc 8.6.4</code></li>
                <li><code>gnat 8.3.0</code></li>
                <li><code>go 1.13.1</code></li>
                <li><code>guile 1.8.8</code></li>
                <li><code>jdk 11 and 8 (see the <a href="https://wiki.tilde.institute/w/jdk">wiki page</a>)</code></li>
                <li><code>lua 5.3.5 and 5.1.5</code></li>
                <li><code>mono 5.20.1.34</code></li>
                <li><code>nasm 2.14.02</code></li>
                <li><code>nim 1.0.4</code></li>
                <li><code>node.js 10.16.3</code></li>
                <li><code>perl 5.28.2</code></li>
                <li><code>php 7.3.16</code></li>
                <li><code>python 2.7.16 and 3.7.4</code></li>
                <li><code>racket 7.4</code></li>
                <li><code>rakudo 2018.12</code></li>
                <li><code>ruby 2.5.5 and 2.6.6</code></li>
                <li><code>rust 1.38</code></li>
                <li><code>scala 2.12.3</code></li>
                <li><code>yasm 1.3.0</code></li>
            </ul>
            <p>Your interactive shell can be changed with the <code>chsh</code> command. Available are:</p>
            <ul>
                <li><code>/bin/ksh (default)</code></li>
                <li><code>/bin/sh</code></li>
                <li><code>/bin/csh</code></li>
                <li><code>/usr/local/bin/bash</code></li>
                <li><code>/usr/local/bin/dash</code></li>
                <li><code>/usr/local/bin/zsh</code></li>
                <li><code>/usr/local/bin/fish</code></li>
                <li><code>/usr/local/bin/tcsh</code></li>
                <li><code>/usr/local/bin/elvish</code></li>
            </ul>
            <p>IRC clients:</p>
            <ul>
                <li><code>weechat</code></li>
                <li><code>irssi</code></li>
                <li><code>ircII</code></li>
            </ul>
            <p>Feel free to contact the admins via <a href="mailto:admins@tilde.institute">admins@tilde.institute</a> or
                on IRC in <code>#institute</code> if you need another package installed, or if you would like your
                homepage's index changed from <code>index.html</code> to something else (<code>index.cgi</code>,
                <code>index.php</code>, etc).</p>
        </div>
        <div id="news">
            <?php include("newsdata.html"); ?>
        </div>
    </div>
</body>

</html>
