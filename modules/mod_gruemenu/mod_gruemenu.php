<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_gruemenu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modJEMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$class_sfx	= htmlspecialchars($params->get('class_sfx'));

if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_gruemenu', $params->get('layout', 'default'));
}
