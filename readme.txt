[hr]
[center][color=red][size=16pt][b]EXPANDING & COLLAPSING OFFTOPIC TAG v2.2[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] -> [url=http://custom.simplemachines.org/mods/index.php?mod=3981]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This modification adds a BBCode to the forum that allows the post author to hide a offtopic in the post, which is clickable to display it to the user.

This BBCode takes the form:
[code][nobbc]
[offtopic]{content}[/offtopic]
[offtopic text=Blah]{content}[/offtopic]
[offtopic quote="Blah"]{content}[/offtopic]
[/nobbc][/code]
Note that quotes are required for the [b]quote[/b] parameter, but not for the [b]text[/b] parameter.  These forms have no issues with other block-level tags inside the offtopic tag.

This BBCode can also take the following form:
[code][nobbc]
[offtopic=Some Text]{content goes here}[/offtopic]
[/nobbc][/code]
Note that, for this form, other block-level bbcode tags are not parsed inside this [b]offtopic[/b] tags form.

[u][b]NEW FOR 2.1:[/b][/u]
Version 2.1 introduces two optional parameters for use:
o [b]hide[/b] parameter indicates the text to replace the default "hide" string
o [b]show[/b] parameter indicates the text to replace the default "show" string.

[color=blue][b][size=12pt][u]Admin Settings[/u][/size][/b][/color]
This BBCode may be disabled by going into the [b]Admin[/b] => [b]Forum[/b] => [b]Posts and Topics[/b] => [b]Bulletin Board Code[/b] and unchecking the bbcodes you don't want to use.  You may also be uninstall this mod in order to disable it.

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.9, but should work on SMF 2.1 Beta 1, as well as SMF 2.0 and up.  SMF 1.x is not and will not be supported.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
The changelog has been removed and can be seen at [url=http://www.xptsp.com/board/index.php?topic=49.msg150#msg150]XPtsp.com[/url].

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
Copyright (c) 2015, Douglas Orend
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
