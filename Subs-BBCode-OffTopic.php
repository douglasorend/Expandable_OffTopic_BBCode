<?php
/**********************************************************************************
* Subs-BBCode-offtopic.php
***********************************************************************************
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/

function BBCode_OffTopic(&$bbc)
{
	$bbc[] = array(
		'tag' => 'offtopic',
		'type' => 'unparsed_content',
		'dcontent' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>hide</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>show</a>\'; }" /><b>xu7aprafafrA: </b><a href="#" onClick="return false;">show</a></span></div><div class="quotecontent"><div style="display: none;">$1</div></div></div>',
		'validate' => isset($disabled['offtopic']) ? null : create_function('&$tag, &$data, $disabled', '
			global $txt;
			if (!isset($tag["content"]))
			{
				$tmp = str_replace("xu7aprafafrA", $txt["offtopic"], $tag["dcontent"]);
				$tmp = str_replace("xu7aprafafrC", $txt["debug_hide"], str_replace("xu7aprafafrB", $txt["debug_show"], $tmp));
				$tag["content"] = $tmp;
			}
		'),
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