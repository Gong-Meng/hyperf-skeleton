<?php

declare(strict_types=1);

namespace App\Service\Interface;

interface UserServiceInterface
{

    public function getInfoById(int $id);

}