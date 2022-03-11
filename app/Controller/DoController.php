<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
/**
 * @AutoController(service="inderHttp")
 */
class DoController
{

    public function index()
    {

        return '123';

    }

}
