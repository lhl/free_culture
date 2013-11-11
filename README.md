free_culture
============

Larry Lessig's 2002 O'Reilly Open Source Conference Keynote on Copyright and Free Culture
Originally presented on July 24, 2002 in San Diego, CA


Personal Anecdote
-----------------
lhl: There's a bit of a funny story to how I ended up converting Larry's original PowerPoint into Flash.
I was actually in attendence at OSCON that year but missed both Larry and RMS' keynotes (I believe RMS
came dressed as St. IGNUcius) due to an alarm mishap.

I was pretty disappointed to miss the talks, but later the next week, somewhat by happenstance, I was 
chatting with Matt Haughey, who was Creative Director at Creative Commons at the time, and he mentioned that
Larry was looking for someone who had experience with PowerPoint VBScript and Flash to work on turning the 
slides and audio track into a presentation.  I'd worked with both before, and since Larry had timings from
rehearsing built into the deck and I'd get immediate access to see the talk I missed, it seemed like a no
brainer and I volunteered to help out.

I was able to write a script to export the timings, but it turns out that PowerPoint stores those all as
relative numbers and it was pretty much immediately out of sync with the audio.  I ended up manually 
retiming most of it as well as writing a bespoke Flash-based presentation engine in early ActionScript.

I vaguely remember it being a terrible pain in the ass to do - a couple days/allnighters over a weekend?
I was able to find an old blog-post where I announced it: http://randomfoo.net/blog/id/1911 - In that 
post you can see me trying to avoid getting my server /.'d.  Of course, it did end up getting linked to
my server (although the submitter was kind enough to include a mirror link at least)
http://news.slashdot.org/story/02/08/13/2150251/lessig--oscon (for those curious, my server held up pretty
well, even serving out a lot of media files, although it did max out its 10Mbps link for a while).

An ancillary anecode, this was actually also the only time I ended up exchanging emails with RMS. He 
complained that I should only have been using Ogg Vorbis not MP3, and that I shouldn't have been using Flash 
(I believe he proposed SMIL as an alternative).  I told him it was all CC licensed andhe was free to do the 
conversions and good luck reaching the non-existant audience (or converting w/ non-existant SMIL tools).  
He never took me up on that offer, although someone did eventually contribute an Ogg transcode and an
Open Office version.


Licensing
---------
As noted in the index.html, everything in this repository is licensed CC BY-SA (Attribution-ShareAlike)
https://creativecommons.org/licenses/by-sa/1.0/

In addition, by request (and actually why I'm checking in), I (Leonard Lin) am licensing my FLA source code
(not any of the slides or content that belongs to Larry Lessig or others) under a permissive, BSD 3 Clause
license: http://directory.fsf.org/wiki/License:BSD_3Clause which is GPL compatible and does not enforce any
copyleft.
