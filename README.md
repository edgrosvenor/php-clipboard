# PHP Clipboard
[![Latest Version on Packagist](https://img.shields.io/packagist/v/edgrosvenor/php-clipboard.svg?style=flat-square)](https://packagist.org/packages/edgrosvenor/php-clipboard)
[![StyleCI](https://github.styleci.io/repos/243092365/shield?branch=master)](https://github.styleci.io/repos/243092365)

This is a 5-minute package I threw togehter that simply wraps the Mac, Windows, and (most common) Linux commands for copying contents to the clipboard. I don't handle reading files. You'll have to do that yourself. I simply pipe whatever contents you provide to the appropriate command based on the operating system reported by php_uname().

### Installation
```shell script
composer require edgrosvenor/php-clipboard
```

### Usage
```php
<?php

use Edgrosvenor\PHPClipboard\Clipboard;

class CopyStuff 
{
    public function copyMyName($name = 'Ed Grosvenor')
    {
        $clipboard = new Clipboard($name);
        $clipboard->copy();
        // 'Ed Grosvenor' has been copied to your clipboard
    }
}
```
