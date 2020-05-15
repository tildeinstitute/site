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
                explore the OpenBSD operating system, in addition to exploring the more social
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
            <ul>
                <li><code>cgit (<a href="https://wiki.tilde.institute/w/user-repos">wiki</a>)</code></li>
                <li><code>efingerd (<a href="https://wiki.tilde.institute/w/finger">wiki</a>)</code></li>
                <li><code>gophernicus (<a href="https://wiki.tilde.institute/w/gopher">wiki</a>)</code></li>
                <li><code>httpd(8)</code></li>
                <li><code>identd(8)</code></li>
                <li><code>php73_fpm</code></li>
                <li><code>slowcgi(8)</code></li>
                <li><code>smtpd(8)</code></li>
                <li><code>unbound(8)</code></li>
            </ul>
            <p>The following services run on separate VMs:</p>
            <ul>
                <li><code>inspircd (<a href="https://wiki.tilde.institute/w/irc">wiki</a>)</code></li>
                <li><code>getwtxt (<a href="https://twtxt.tilde.institute">instance</a>)</code></li>
		<li><code>Dungeon Crawl Stone Soup (<a href="https://crawl.tildeverse.org">webtiles</a>, for cli games run `dcss`)</code></li>
            </ul>
            <p>IRC clients:</p>
            <ul>
                <li><code>weechat</code></li>
                <li><code>irssi</code></li>
                <li><code>ircII</code></li>
            </ul>
            <p>The compilers and interpreters available are:</p>
            <ul>
		<li><code>apl 1.7</code></li>
                <li><code>brainf*ck 2.7.1</code></li>
		<li><code>chicken (Scheme) 5.1.0</code></li>
		<li><code>cim (Simula) 5.1</code></li>
                <li><code>clang 8.0.1</code></li>
                <li><code>clisp 2.49</code></li>
                <li><code>clojure 1.10.0.4</code></li>
                <li><code>crystal 0.30.1</code></li>
		<li><code>cython 0.29.13 (Py2 and Py3)</code></li>
                <li><code>elixir 1.9.1</code></li>
                <li><code>erlang 21.2</code></li>
		<li><code>fpc (Pascal) 3.0.4</code></li>
		<li><code>gambit (Scheme) 4.9.3</code></li>
                <li><code>gcc 8.3.0 (see the <a href="https://wiki.tilde.institute/w/gcc8">wiki page</a>)</code></li>
		<li><code>gerbil (Scheme) 0.15.1 (see the <a href="https://wiki.tilde.institute/w/gerbilscheme">wiki page</a>)</code></li>
                <li><code>gforth 0.7.3</code></li>
                <li><code>gfortran / g95 8.3.0 (see the <a href="https://wiki.tilde.institute/w/gcc8">wiki page</a>)</code></li>
                <li><code>ghc (Haskell) 8.6.4</code></li>
                <li><code>gnat (Ada) 8.3.0</code></li>
		<li><code>gnucobol 2.2</code></li>
		<li><code>go 1.13.1</code></li>
		<li><code>gpc (Pascal) 20070904</code></li>
		<li><code>gprolog 1.4.5</code></li>
                <li><code>guile 1.8.8 and 2.2.6</code></li>
		<li><code>janet 1.3.1</code></li>
                <li><code>jdk 11 and 8 (see the <a href="https://wiki.tilde.institute/w/jdk">wiki page</a>)</code></li>
                <li><code>lua 5.3.5 and 5.1.5</code></li>
                <li><code>mono 5.20.1.34</code></li>
                <li><code>nasm 2.14.02</code></li>
		<li><code>nbfc (brainf*ck) 0.1</code></li>
		<li><code>newlisp 10.7.1</code></li>
                <li><code>nim 1.0.4</code></li>
                <li><code>node.js 10.16.3</code></li>
		<li><code>ocaml 4.09.0</code></li>
                <li><code>perl 5.28.2</code></li>
                <li><code>php 7.3.16</code></li>
		<li><code>pypy 7.1.1</code></li>
                <li><code>python 2.7.16 and 3.7.4</code></li>
                <li><code>racket 7.4</code></li>
                <li><code>rakudo (Raku / Perl6) 2018.12</code></li>
                <li><code>ruby 2.5.5 and 2.6.6</code></li>
                <li><code>rust 1.38</code></li>
		<li><code>sbcl (Common Lisp) 1.5.5</code></li>
		<li><code>scala 2.12.3</code></li>
		<li><code>squeak-vm (Smalltalk) 3.10.1</code></li>
		<li><code>swi-prolog 7.6.0</code></li>
		<li><code>tinyscheme 1.41</code></li>
                <li><code>yasm 1.3.0</code></li>
            </ul>
            <p>The interactive shells available are:</p>
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
		<br />
		<br />
        </div>
        <div id="news">
            <?php include("newsdata.html"); ?>
        </div>
    </div>
</body>

</html>
