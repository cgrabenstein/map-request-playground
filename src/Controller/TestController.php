<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\TestPayloadConstructor;
use App\Model\TestPayloadNonConstructor;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class TestController
{
    #[Route('/constructor')]
    public function constructor(#[MapRequestPayload(acceptFormat: 'json')] TestPayloadConstructor $payload)
    {
        return new JsonResponse(var_export($payload));
    }


    #[Route('/non-constructor')]
    public function nonConstructor(#[MapRequestPayload(acceptFormat: 'json')] TestPayloadNonConstructor $payload)
    {
        return new JsonResponse(var_export($payload));
    }
}
