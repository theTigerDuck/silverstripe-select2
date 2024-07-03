<?php

namespace Sheadawson\requirements;

use SilverStripe\View\Requirements;

trait RequirementsTrait
{
    /**
     * Requires all relevant JS files
     */
    public function requireAppFiles(): void
    {
        Requirements::javascript("https://code.jquery.com/jquery-3.7.1.min.js", [
            'integrity' => 'sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=',
            'crossorigin' => 'anonymous',
        ]);

        Requirements::javascript('silverstripe/admin: thirdparty/jquery-query/jquery.query.js');
        Requirements::javascript('silverstripe/admin: thirdparty/jquery-entwine/jquery.entwine.js');
        Requirements::javascript('sheadawson/silverstripe-select2: javascript/select2.init.js');
        Requirements::javascript('sheadawson/silverstripe-select2: select2/select2.js');
        Requirements::javascript('sheadawson/silverstripe-select2: javascript/ajaxselect2.init.js');
    }
}
