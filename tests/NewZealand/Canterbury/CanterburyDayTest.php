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

namespace Yasumi\tests\NewZealand\Canterbury;

use DateTime;
use DateTimeZone;

/**
 * Class for testing Canterbury Day in the New Zealand.
 */
class CanterburyDayTest extends CanterburyBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'canterburyAnniversaryDay';

    /**
     *
     * @dataProvider HolidayDataProvider
     *
     * @param int $year the year for which the holiday defined in this test needs to be tested
     * @param string $expected the expected date
     */
    public function testHoliday($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime($expected, new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Returns a list of test dates
     *
     * @return array list of test dates for the holiday defined in this test
     */
    public function HolidayDataProvider()
    {
        return [
            [1910, '1910-12-16'],
            [1870, '1870-12-16'],
            [1938, '1938-12-16'],
            [1916, '1916-12-16'],
            [1871, '1871-12-16'],
            [1897, '1897-12-16'],
            [1904, '1904-12-16'],
            [1939, '1939-12-16'],
            [1973, '1973-11-16'],
            [1988, '1988-11-11'],
            [1989, '1989-11-17'],
            [1977, '1977-11-11'],
            [1992, '1992-11-13'],
            [1979, '1979-11-16'],
            [1967, '1967-11-17'],
            [1971, '1971-11-12'],
            [1966, '1966-11-11'],
            [2149, '2149-11-14'],
            [2136, '2136-11-16'],
            [2433, '2433-11-11'],
            [2321, '2321-11-11'],
            [2025, '2025-11-14'],
            [2771, '2771-11-12'],
            [2444, '2444-11-11'],
            [2571, '2571-11-15'],
            [2087, '2087-11-14'],
            [2673, '2673-11-14'],
        ];
    }
}
