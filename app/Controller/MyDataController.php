<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
/**
 * @AutoController()
 */
class MyDataController
{
    public function index()
    {
        return '123';
    }
}
