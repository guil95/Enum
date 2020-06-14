<?php

declare(strict_types=1);

namespace Tests;

use guil95\Enum\Enum;

final class MockEnumClass
{
    use Enum;

    const TEST = 'TEST1';
    const TEST2 = 'TEST2';
}
