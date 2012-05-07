=== Basic Comment Quicktags ===
Contributors: Ipstenu, MarcDK
Tags: comments, wysiwyg, quicktags, bbpress
Requires at least: 3.3
Tested up to: 3.4
Stable tag: 1.3
License: GPL2

Displays bold, italic, add link and quote buttons on top of the comment form.

== Description ==

This plugin displays the most basic of quicktag buttons on your comment forms, using the Quicktag API built into WordPress (as of 3.3).

You can turn these on and off for bbPress or comments on the discussions page (see the screenshots). Please note, the plugin defaults to <em>off</em>, so you have to go turn them on. Auto-activating isn't nice, as it may conflict with other plugins.

**Misc**

* [Plugin Site](http://halfelf.org/plugins/basic-comment-quicktags/)
* [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5227973)

== Frequently Asked Questions ==

= Why did you do this? =

MarcTV did it because he needed a simple plugin to do this job and decided to do it on his own. I kind of love him for that.

I forked it so I could extend it to bbPress, put in more checks and ifs/thens, and all the other toolbars were too heavy.

= Why only those tags? =

After careful consideration, and a long review of my users, those are the only ones they ever use! If you have a reasonable argument why I should add in others, I'll listen.

= Will you add in options to pick and chose our tags? =

Not at this time (and not likely either). I don't have a need for it, and I don't want to include code I'm not going to personally make use of. It makes it much harder on me to support it later. (Read <a href="http://www.sohar.com/proj_pub/download/COMPAS93.pdf">Herbert Hecht's article "Rare Conditions – An Important Cause of Failures"</a> to understand my views on including rarely used code. tl;dr: I try not to.)

= Can I use this on older versions of WordPress? =

No. This plugin uses the <a href="http://codex.wordpress.org/Quicktags_API">Quicktags API</a> built in to WordPress 3.3.

= Does this work on Multisite? =

Yes. It can be network activated or per-site, works fine.

= Will you expand this to BuddyPress? =

Eventually. I'm not using it right now so it's not <em>as</em> easy to test.

= My users say they don't see anything on IE8 =

Yeah, that's because IE8 cheerfully ignores the rules of jQuery. Sometimes it works, sometimes it doesn't. I got it to work, and then came back an hour later to no changes and it broke. At which point I bashed my head into the wall and went to the gym. Between caching and IE8 being inconsistant, I gave up. If anyone can fix it for everyone better than Trepmal did, you officially win. This is as good as I can get it. It works like a hero on Firefox, Safari, Chrome and IE9.

== Changelog ==

= 1.3 = 
* 2012 May 07, by Ipstenu
* Crap, typo'd. Really sorry :(

= 1.2 =
* 2012 May 07, by Ipstenu
* bbPress is strange, should work now.

= 1.1 = 
* 2012 May 02, by Ipstenu
* Added options to turn on and off for both comments <em>and</em> bbPress (per request of leeuniverse) - You will <em>only</em> see the bbPress box if you have bbPress installed (so as not to confuse people).
* Fixed IE being an asshat (props trepmal).

= 1.0 =
* 2012 April 27, by Ipstenu
* Initial fork of MarcTV Comment QuickTag
* Added in support for bbPress
* Added in checks to only load JS/CSS when on a page where one might leave comments
* Added failure if not WordPress 3.3 or greater

== Upgrade Notice ==

= 1.1 =
Please visit your <em>Discussion Settings</em> page and check the box to turn on the plugin.

== Installation ==

1. Install and activate the plugin.
2. Visit your <em>Discussion Settings</em> page.
3. Look for 'Quicktags' and check boxes as desired. (Comments are activated by default)

== Screenshots ==

1. The Quicktags
2. The Options
