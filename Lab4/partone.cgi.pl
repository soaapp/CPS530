#!/usr/bin/perl
use CGI':standard';
use strict;
use warnings;

print "Content-type: text/html\n\n";


print "<head>\n";
    print "<link href = 'stylesheet.css' rel = 'stylesheet'/>\n";
    print "<title>CPS530-Lab4Part2</title>\n";
print "</head>\n";

print "<body>\n";
	my $first = param ('first');
	my $last = param ('last');
	my $year = param ('year');
	my $location = param ('location');

	print "$first $last, you are in year $year, and your home town is $location \n";
	print "By: Sara J. Jahanzad - 500 748 291\n";
print "</body>\n";