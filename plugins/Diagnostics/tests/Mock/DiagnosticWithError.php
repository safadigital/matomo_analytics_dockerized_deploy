<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Diagnostics\tests\Mock;

use Piwik\Plugins\Diagnostics\Diagnostic\Diagnostic;
use Piwik\Plugins\Diagnostics\Diagnostic\DiagnosticResult;

class DiagnosticWithError implements Diagnostic
{
    public function execute()
    {
        return array(
            DiagnosticResult::singleResult('Error', DiagnosticResult::STATUS_ERROR, 'Comment'),
        );
    }
}
