<?php

declare(strict_types=1);

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

final class TestPayloadConstructor
{
    /**
     * @param StringEnum[] $stringVals
     */
    public function __construct(
        #[Assert\NotNull()]
        public StringEnum $stringVal,
        public int $intVal,
        public array $stringVals
    ) {
    }

}
