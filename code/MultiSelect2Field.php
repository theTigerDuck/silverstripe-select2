<?php

namespace Sheadawson\Select2;

use Sheadawson\requirements\RequirementsTrait;
use SilverStripe\Forms\ListboxField;
use SilverStripe\View\Requirements;

/**
 * MultiSelect2Field Definition
 *
 * @package    Silverstripe-Select2
 * @author     Shea Dawson <shea@silverstripe.com.au>
 */
class MultiSelect2Field extends ListBoxField
{
    use RequirementsTrait;

    public function Field($properties = array())
    {
        $this->requireAppFiles();
        Requirements::css('sheadawson/silverstripe-select2: select2/select2.css');
        $this->addExtraClass('select2')->addExtraClass('no-chzn');

        return parent::Field($properties);
    }
}
