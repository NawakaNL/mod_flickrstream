<?php
/**
 * Scouting Flickrstream
 *
 * @package    SIJ.Flickrstream
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 */

// No direct access
defined('_JEXEC') or die;

$userId = $params->get('userId');
$setId = $params->get('setId');

$title = $module->title;
$color = $params->get('color');

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_flickrstream/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_flickrstream');
