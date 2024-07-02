<?php

namespace Sheadawson\Select2;

use Sheadawson\requirements\RequirementsTrait;
use SilverStripe\Forms\GroupedDropdownField;
use SilverStripe\View\Requirements;

class GroupedSelect2Field extends GroupedDropdownField
{
    use RequirementsTrait;

    public function Field($properties = array())
    {
        $this->requireAppFiles();
        Requirements::css('sheadawson/silverstripe-select2: select2/select2.min.css');

        $this->addExtraClass('select2')->addExtraClass('no-chzn');

        return parent::Field($properties);
    }
}
