# Enum
Enum for PHP

# How to use

composer require guil95/enum

```php
<?php

use guil95\Enum\Enum;

final class EnumClass
{
    use Enum;

    const TEST = 'TEST1';
    const TEST2 = 'TEST2';
}

new EnumClass('xablau'); //throws RuntimeException
new EnumClass('TEST1');//returns a EnumClass
