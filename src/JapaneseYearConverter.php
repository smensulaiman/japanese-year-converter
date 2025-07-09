<?php

namespace Sulaiman\JapaneseYearConverter;

use InvalidArgumentException;

class JapaneseYearConverter
{
    private const ERA_MAP = [
        '令和' => ['name' => 'Reiwa',  'start' => 2019],
        '平成' => ['name' => 'Heisei', 'start' => 1989],
        '昭和' => ['name' => 'Showa',  'start' => 1926],
        '大正' => ['name' => 'Taisho', 'start' => 1912],
        '明治' => ['name' => 'Meiji',  'start' => 1868],
        'Reiwa'  => ['name' => 'Reiwa',  'start' => 2019],
        'Heisei' => ['name' => 'Heisei', 'start' => 1989],
        'Showa'  => ['name' => 'Showa',  'start' => 1926],
        'Taisho' => ['name' => 'Taisho', 'start' => 1912],
        'Meiji'  => ['name' => 'Meiji',  'start' => 1868],
    ];

    public static function toGregorian(string $era, int $yearInEra): int
    {
        if (!isset(self::ERA_MAP[$era])) {
            throw new InvalidArgumentException("Unknown era: $era");
        }

        return self::ERA_MAP[$era]['start'] + $yearInEra - 1;
    }

    public static function fromString(string $wareki): int
    {
        $wareki = preg_replace('/\s+/', '', $wareki);
        preg_match('/(令和|平成|昭和|大正|明治|Reiwa|Heisei|Showa|Taisho|Meiji)(\d+)/u', $wareki, $matches);

        if (!$matches || count($matches) < 3) {
            throw new \InvalidArgumentException("Invalid wareki format: $wareki");
        }

        return self::toGregorian($matches[1], (int)$matches[2]);
    }
}
