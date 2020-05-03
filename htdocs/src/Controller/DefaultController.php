<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    public function index(): JsonResponse {
        $entryAnwser = 'Earthquake Fliperamy DataBase API';

        return new JsonResponse($entryAnwser);
    }
}
