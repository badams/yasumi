<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\Tests\NewZealand\Canterbury;

use Yasumi\Tests\NewZealand\NewZealandBaseTestCase;
use Yasumi\Tests\YasumiBase;

/**
 * Base class for test cases of the NewZealand/Canterbury holiday provider.
 */
abstract class CanterburyBaseTestCase extends NewZealandBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    const REGION = 'NewZealand/Canterbury';
}
