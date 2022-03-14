<?php

declare(strict_types=1);

namespace App\Service;


use App\Service\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{


    public function getInfoById(int $id)
    {
        return 'user4141';
    }

}
