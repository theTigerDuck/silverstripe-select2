<?php

namespace Sheadawson\Select2;

use SilverStripe\Forms\DropdownField;
use SilverStripe\View\Requirements;
use Sheadawson\requirements\RequirementsTrait;

/**
 * Select2Field Definition
 *
 * @package    Select2
 * @author     Shea Dawson <shea@silverstripe.com.au>
 */
class Select2Field extends DropdownField
{
    use RequirementsTrait;
    /**
     * @var int The number of items that need to appear in the dropdown
     * in order to trigger a search bar
     */
    public static $default_search_threshold = 12;

    /**
     * Sets the search threshold for this dropdown
     *
     * @param int $num The number of items
     */
    public function setSearchThreshold($num)
    {
        return $this->setAttribute('data-search-threshold', $num);
    }

    public function Field($properties = array())
    {
        $this->requireAppFiles();
        Requirements::css('sheadawson/silverstripe-select2: select2/select2.css');
        $this->addExtraClass('select2')->addExtraClass('no-chzn');

        if (!$this->getAttribute('data-search-threshold')) {
            $this->setSearchThreshold(self::$default_search_threshold);
        }

        return parent::Field($properties);
    }
}
