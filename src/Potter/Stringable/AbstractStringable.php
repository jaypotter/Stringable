<?php

declare(strict_types=1);

namespace Potter\Stringable;

abstract class AbstractStringable implements StringableInterface
{
    abstract public function __toString(): string;
}
