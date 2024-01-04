<?php

declare(strict_types=1);

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

final class TestPayloadNonConstructor
{
    public StringEnum $stringVal;
    /**
     * @var StringEnum[]
     */
    public array $stringVals;
    #[Assert\NotNull]
    public IntEnum $intVal;
}
