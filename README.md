# 🇯🇵 Japanese Year Converter

Convert Japanese era years (Wareki - 和暦) to Gregorian calendar years (Seireki - 西暦) in PHP.

`sulaiman/japanese-year-converter`

---

## Features

- Supports common Japanese eras: 令和 (Reiwa), 平成 (Heisei), 昭和 (Showa), 大正 (Taisho), 明治 (Meiji)
- Accepts both **Kanji** (e.g. `平成`, `令和`) and **Romaji** (e.g. `Heisei`, `Reiwa`)
- Converts `era + year` to **Gregorian year**
- Parses full strings like `平成13`, `Reiwa6`, etc.

---

## Installation

```bash
composer require sulaiman/japanese-year-converter
```

---

## Usage

```php
use JapaneseYearConverter\JapaneseYearConverter;

// Direct conversion
echo JapaneseYearConverter::toGregorian('平成', 13); // Output: 2001
echo JapaneseYearConverter::toGregorian('Reiwa', 6); // Output: 2024

// Parse from wareki string
echo JapaneseYearConverter::fromString('昭和60');    // Output: 1985
echo JapaneseYearConverter::fromString('令和5');     // Output: 2023
```

---

## Example Script

```php
<?php
require 'vendor/autoload.php';

use JapaneseYearConverter\JapaneseYearConverter;

echo JapaneseYearConverter::toGregorian('令和', 6); // 2024
echo JapaneseYearConverter::fromString('平成13');   // 2001
```

---

## Supported Eras

| Kanji  | Romaji  | Start Year |
|--------|---------|------------|
| 令和   | Reiwa   | 2019       |
| 平成   | Heisei  | 1989       |
| 昭和   | Showa   | 1926       |
| 大正   | Taisho  | 1912       |
| 明治   | Meiji   | 1868       |

---

## License

MIT © [Sulaiman](https://github.com/sulaiman)

---

## 🤝 Contributing

Pull requests and issues are welcome! Please open one on [GitHub Issues](https://github.com/sulaiman/japanese-year-converter/issues).
