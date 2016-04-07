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
 * Provider for all holidays in Canterbury (New Zealand).
 */
class Canterbury extends NewZealand
{
    /**
     * Initialize holidays for Canterbury (New Zealand).
     */
    public function initialize()
    {
        parent::initialize();

        $this->calculateCanterburyAnniversaryDay();
    }

    /**
     * Calculates Canterbury Anniversary
     *
     * Northern & Central Canterbury areas observe Christchurch Show Day.
     * The definition for the Canterbury Anniversary Day celebration as decided by Christchurch City
     * is the second Friday after the first Tuesday in November each year.
     *
     * @link https://en.wikipedia.org/wiki/Canterbury_A%26P_Show#Anniversary_Day
     */
    public function calculateCanterburyAnniversaryDay()
    {
        $name = 'canterburyAnniversaryDay';
        $translation = [$this->locale => 'Canterbury Anniversary Day'];

        if ($this->year >= 1850 && $this->year < 1955) {
            $this->addHoliday(new Holiday($name, $translation,
                new DateTime("$this->year-12-16", new DateTimeZone($this->timezone))));
        }

        if ($this->year >= 1955) {
            $date = new DateTime("first Tuesday of November $this->year", new DateTimeZone($this->timezone));
            $date->add(new \DateInterval('P10D'));
            $this->addHoliday(new Holiday($name, $translation, $date));
        }

    }
}
