#!/usr/bin/perl
use utf8;
use strict;
use CGI qw/-no_xhtml: standard/;
use Encod qw(encode decode);

my $cgi = new CGI;
my $pageid = decode('UTF-8', $cgi->param('pageid'));

print encode('UTF-8', <<END_OF_HTML);
Content-Type: text/html; charset=UTF-8
set-Cookie: PAGEID=$pageid

<body>
クッキー値をセットしました
</body>
END_OF_HTML
