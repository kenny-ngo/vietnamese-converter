# Vietnamese Converter
[![StyleCI](https://github.styleci.io/repos/155349271/shield?branch=master)]([https://github.styleci.io/repos/206334256](https://github.styleci.io/repos/206334256))

## Installation

Require this package with composer.

```bash
composer require kenny-ngo/vietnamese-converter
```

## Usage
```php
require_once __DIR__ . '/vendor/autoload.php';

use Kenny\VietnameseConverter\VnCharsetConversion;

$vniConversion = new VnCharsetConversion();
$output = $vniConversion->convert('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.');
echo $output // Toi ten la Ngo Chi Dung. Nguoi da tao ra cai phan mem nay.
```

## Available Methods
```php
- convert($input)
- convert($input, 'unicode', 'virq');
- convert($input, 'unicode', 'vnet');
- convert($input, 'unicode', 'vni');
- convert($input, 'unicode', 'ascii');
- tolower($input)
- toupper($input)
- ucfirst($input)
- ucwords($input)

Where as $input = a unicode string
```

## Test

```bash
composer test
```

## Credits

- [Kenny Ngo](https://github.com/kenny-ngo)
- [Ngoc Linh Pham](https://github.com/pnlinh)  

## License
The MIT License (MIT)
