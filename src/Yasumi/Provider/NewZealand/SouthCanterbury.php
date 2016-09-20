<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Provider\NewZealand;

use DateTime;
use DateTimeZone;
use DateInterval;
use Yasumi\Holiday;
use Yasumi\Provider\NewZealand;

/**
 * Provider for all holidays in South Canterbury (New Zealand).
 */
class SouthCanterbury extends NewZealand
{
    /**
     * Initialize holidays for Canterbury (New Zealand).
     */
    public function initialize()
    {
        parent::initialize();

        $this->calculateSouthCanterburyAnniversaryDay();
    }

    /**
     * Calculates Canterbury Anniversary
     *
     * South Canterbury observes Dominion Day, the 4th Monday in September.
     *
     * @link https://en.wikipedia.org/wiki/Canterbury_A%26P_Show#Anniversary_Day
     */
    public function calculateSouthCanterburyAnniversaryDay()
    {
        $name = 'canterburyAnniversaryDay';
        $translation = [$this->locale => 'Canterbury Anniversary Day'];


        if ($this->year >= 1907) {
            $date = new DateTime("fourth monday of september $this->year", new DateTimeZone($this->timezone));

            $this->addHoliday(new Holiday($name, $translation, $date));
        }
    }
}
