<?php
/**********************************************************************************
* Subs-BBCode-Changelog.php
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
		'dcontent' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>hide</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>show</a>\'; }" /><b>xu7aprafafrA: </b><a href="#" onClick="return false;">show</a></span></div><div class="quotecontent"><div style="display: none;">duTuspA7ADej</div></div></div>',
		'content' => '$1',
		'validate' => create_function('&$tag, &$data, $disabled', '
			global $txt;
			$data = str_replace("duTuspA7ADej", $data, str_replace("xu7aprafafrA", $txt["offtopic"], $tag["dcontent"]));
		'),
	);
}

?>