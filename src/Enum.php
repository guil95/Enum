<?php

declare(strict_types=1);

namespace guil95\Enum;

trait Enum
{
    private string $value;

    /**
     * Enum constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $reflector = new \ReflectionClass(self::class);

        $constants = array_values($reflector->getConstants());

        if (!in_array($value, $constants)) {
            throw new \RuntimeException(sprintf('Enum invalid for class %s', $reflector->getName()));
        }

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
