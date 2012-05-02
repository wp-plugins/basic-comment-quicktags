=== Basic Comment Quicktags ===
Contributors: Ipstenu, MarcDK
Tags: comments, wysiwyg, quicktags, bbpress
Requires at least: 3.3
Tested up to: 3.4
Stable tag: 1.0

Displays bold, italic, add link and quote buttons on top of the comment form.

== Description ==

This plugin displays the most basic of quicktag buttons on your comment forms, using the Quicktag API built into WordPress (as of 3.3).

You can turn these on and off on the discussions page (see the screenshots).

**Misc**

* [Plugin Site](http://halfelf.org/plugins/basic-comment-quicktags/)
* [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5227973)

== Frequently Asked Questions ==

= Why did you do this? =

MarcTV did it because he needed a simple plugin to do this job and decided to do it on his own. I kind of love him for that.

I forked it so I could extend it to bbPress, put in more checks and ifs/thens, and all the other toolbars were too heavy.

= Why only those tags? =

After careful consideration, and a long review of my users, those are the only ones they ever use! If you have a reasonable argument why I should add in others, I'll listen.

= Can I use this on older versions of WordPress? =

No. This plugin uses the <a href="http://codex.wordpress.org/Quicktags_API">Quicktags API</a> built in to WordPress 3.3.

= Does this work on Multisite? =

Yes. It can be network activated or per-site, works fine.

== Changelog ==

= 1.1 = 
* 2012 May 02, by Ipstenu
* Adding options to turn on and off for both comments <em>and</em> bbPress (per request of leeuniverse)
* Fixed IE being an asshat (props trepmal)

= 1.0 =
* 2012 April 27, by Ipstenu
* Initial fork of MarcTV Comment QuickTag
* Added in support for bbPress
* Added in checks to only load JS/CSS when on a page where one might leave comments
* Added failure if not WordPress 3.3 or greater

== Screenshots ==

1. The Quicktags
2. The Options