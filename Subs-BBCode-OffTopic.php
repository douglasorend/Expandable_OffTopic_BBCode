<?php
/**********************************************************************************
* Subs-BBCode-OffTopic.php
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

function BBCode_OffTopic(&$bbc)
{
	global $txt, $modSettings, $user_info;

	// Define these tags, which have no issue with block-level bbcode tags:
	$bbc[] = array(
		'tag' => 'offtopic',
		'type' => 'unparsed_content',
		'parameters' => array(
			'text' => array('optional' => true),
			'quote' => array('optional' => true, 'quoted' => true),
			'show' => array('optional' => true),
			'hide' => array('optional' => true),
			'guests' => array('optional' => true, 'match' => '(y|yes|true|n|no|false)'),
			'expand' => array('optional' => true, 'match' => '(y|yes|true|n|no|false)'),
		),
		'content' => '{text}|{quote}|{show}|{hide}|{guests}|{expand}',
		'validate' => 'BBCode_OffTopic_Validate',
		'block-level' => true,
	);
	$bbc[] = array(
		'tag' => 'offtopic',
		'type' => 'unparsed_content',
		'content' => '|||||',
		'validate' => 'BBCode_OffTopic_Validate',
		'block-level' => true,
	);

	// Gather up all the block-level bbcode tags, then include that list in the next tag definition:
	$disallowed = array();
	foreach ($bbc as $code)
		if (!empty($code['block_level']))
			$disallowed[] = $code['tag'];
	$bbc[] = array(
		'tag' => 'offtopic',
		'type' => 'parsed_equals',
		'before' => !empty($modSettings['offtopic_no_guests']) && !empty($user_info['is_guest']) ? $txt['offtopic_no_guest_html'] : '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; ' . (empty($modSettings['offtopic_no_border']) ? 'border-bottom: 1px solid #5873B0; ' : '') . 'margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_hide"] . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $txt['offtopic'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_show"] . '</a>\'; }" /><b>' . $txt['offtopic'] . ': $1 &#149; </b><a href="#" onClick="return false;">' . $txt["debug_show"] . '</a></span></div><div class="quotecontent"><div style="display: none;">',
		'after' => !empty($modSettings['offtopic_no_guests']) && !empty($user_info['is_guest']) ?  '' : '</div></div></div>',
		'disallow_children' => array_unique($disallowed),
		'block-level' => true,
	);
}

function BBCode_OffTopic_Validate(&$tag, &$data, &$disabled)
{
	global $txt, $user_info, $modSettings;
	
	if (empty($data))
		return ($tag['content'] = '');
	list($text, $quote, $show, $hide, $guests, $expand) = explode('|', $tag['content']);
	if (!empty($modSettings['offtopic_no_guests']) && !empty($user_info['is_guest']))
	{
		if (empty($guests) || $guests == 'n' || $guests == 'no' || $guests == 'false')
			return ($tag['content'] = $txt['offtopic_no_guest_html']);
	}
	$text = empty($text) ? $txt['offtopic'] : $text;
	$show = empty($show) ? $txt['debug_show'] : $show;
	$hide = empty($hide) ? $txt['debug_hide'] : $hide;
	$expand = ($expand == 'y' || $expand == 'yes' || $expand == 'true');
	$data = parse_bbc($data);
	$tag['content'] = '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; ' . (empty($modSettings['offtopic_no_border']) ? 'border-bottom: 1px solid #5873B0; ' : '') . 'margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $text . $quote . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $hide . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $text . $quote . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $show . '</a>\'; }" /><b>' . $text . $quote . ': </b><a href="#" onClick="return false;">' . ($expand ? $hide : $show) . '</a></span></div><div class="quotecontent"><div style="display: ' . ($expand ? '' : 'none') . ';">$1</div></div></div>';
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

function BBCode_OffTopic_Settings(&$config_vars)
{
	$config_vars[] = array('check', 'offtopic_no_guests');
	$config_vars[] = array('check', 'offtopic_no_border');
}

?>