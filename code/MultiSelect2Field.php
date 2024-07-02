<?php

namespace Sheadawson\Select2;

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
    public function Field($properties = array())
    {

        Requirements::javascript("https://code.jquery.com/jquery-3.7.1.min.js", [
            'integrity' => 'sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=',
            'crossorigin' => 'anonymous',
        ]);

        Requirements::javascript('silverstripe/admin: thirdparty/jquery-query/jquery.query.js');
        Requirements::javascript('silverstripe/admin: thirdparty/jquery-entwine/jquery.entwine.js');

        Requirements::javascript('sheadawson/silverstripe-select2: javascript/select2.init.js');

        Requirements::css('sheadawson/silverstripe-select2: select2/select2.css');
        $this->addExtraClass('select2')->addExtraClass('no-chzn');

        return parent::Field($properties);
    }
}
