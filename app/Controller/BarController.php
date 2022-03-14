<?php

declare(strict_types=1);

namespace App\Controller;

use App\Annotation\Bar;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @Bar(foo="123")
 * @AutoController()
 */
class BarController
{

    public function index(ContainerInterface $container)
    {

        $class = AnnotationCollector::getClassesByAnnotation(Bar::class);

        var_dump($class);

        return 'service';
    }

}
