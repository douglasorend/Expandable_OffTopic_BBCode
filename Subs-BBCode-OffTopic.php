<?php
/**********************************************************************************
* Subs-BBCode-OffTopic.php
***********************************************************************************
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/

function BBCode_OffTopic(&$bbc)
{
	global $txt;

	$bbc[] = array(
		'tag' => 'offtopic',
		'before' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_hide"] . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_show"] . '</a>\'; }" /><b>' . $txt['offtopic'] . ': </b><a href="#" onClick="return false;">' . $txt["debug_show"] . '</a></span></div><div class="quotecontent"><div style="display: none;">',
		'after' => '</div></div></div>',
	);
	$bbc[] = array(
		'tag' => 'offtopic',
		'type' => 'parsed_equals',
		'before' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_hide"] . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_show"] . '</a>\'; }" /><b>' . $txt['offtopic'] . ': $1 &#149; </b><a href="#" onClick="return false;">' . $txt["debug_show"] . '</a></span></div><div class="quotecontent"><div style="display: none;">',
		'after' => '</div></div></div>',
	);
}

function BBCode_OffTopic_Button(&$buttons)
{
	global $txt;

	$buttons[count($buttons) - 1][] = array(
		'image' => 'offtopic',
		'code' => 'offtopic',
		'description' => $txt['offtopic'],
		'before' => '[offtopic]',
		'after' => '[/offtopic]',
	);
}

?>