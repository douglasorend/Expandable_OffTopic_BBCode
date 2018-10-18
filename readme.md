--------

# EXPANDING & COLLAPSING OFFTOPIC TAG v3.2B

[**By Dougiefresh**](http://www.simplemachines.org/community/index.php?action=profile;u=253913) -> [Link to Mod](http://custom.simplemachines.org/mods/index.php?mod=3981)

--------

## Notice
This mod is no longer being supported.  You are strongly encouraged to use [Yet Another Spoiler Mod](https://custom.simplemachines.org/mods/index.php?mod=4166) instead...

## Introduction
This modification adds a BBCode to the forum that allows the post author to hide a offtopic in the post, which is clickable to display it to the user.

This BBCode takes the form:
    [nobbc]
    [offtopic]{content}[/offtopic]
    [offtopic text=Blah]{content}[/offtopic]
    [offtopic quote="Blah"]{content}[/offtopic]
    [/nobbc]
Note that quotes are required for the **quote** parameter, but not for the **text** parameter.  These forms have no issues with other block-level tags inside the offtopic tag.

This BBCode can also take the following form:
    [nobbc]
    [offtopic=Some Text]{content goes here}[/offtopic]
    [/nobbc]
Note that, for this form, other block-level bbcode tags are not parsed inside this **offtopic** tags form.

**NEW FOR 2.1:**
Version 2.1 introduces two optional parameters for use:

- **hide** parameter indicates the text to replace the default "hide" string
- **show** parameter indicates the text to replace the default "show" string.

## Admin Settings
This BBCode may be disabled by going into the **Admin** => **Forum** => **Posts and Topics** => **Bulletin Board Code** and unchecking the bbcodes you don't want to use.  You may also be uninstall this mod in order to disable it.

## Compatibility Notes
This mod was tested on SMF 2.0.9, but should work on SMF 2.1 Beta 1, as well as SMF 2.0 and up.  SMF 1.x is not and will not be supported.

## Changelog
The changelog can be viewed at [XPtsp.com](http://www.xptsp.com/board/free-modifications/expandable-offtopic-bbcode/?tab=1).

## License
Copyright (c) 2015 - 2018, Douglas Orend

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
