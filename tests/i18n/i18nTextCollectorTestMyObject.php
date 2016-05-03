<?php
/**
 * @package framework
 * @subpackage tests
 */

use SilverStripe\Model\DataObject;
class i18nTextCollectorTestMyObject extends DataObject implements TestOnly {
	private static $db = array(
		'FirstProperty' => 'Varchar',
		'SecondProperty' => 'Int'
	);

	private static $has_many = array(
		'SilverStripe\Model\Relation' => 'Group'
	);

	private static $singular_name = "My Object";

	private static $plural_name = "My Objects";
}
