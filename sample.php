<?php

require 'vendor/autoload.php';

use Sulaiman\JapaneseYearConverter\JapaneseYearConverter;

echo JapaneseYearConverter::toGregorian('平成', 13) . PHP_EOL; // 2001
echo JapaneseYearConverter::fromString('令和6') . PHP_EOL;    // 2024