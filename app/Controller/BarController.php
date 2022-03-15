<?php

declare(strict_types=1);

namespace App\Controller;

use App\Annotation\Bar;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;
use App\Middleware\Auth\FooMiddleware;
use Hyperf\HttpServer\Contract\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;
use function Symfony\Component\String\s;

/**
 * @Bar(foo="123")
 * @Middleware(FooMiddleware::class)
 * @AutoController()
 */
class BarController
{

    public function index(ServerRequestInterface  $request)
    {

        var_dump($request->getAttribute('key'));


        $class = AnnotationCollector::getClassesByAnnotation(Bar::class);

        var_dump($class);

        return 'service';
    }

}
