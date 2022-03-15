<?php

namespace App\Aspect;

use App\Service\UserService;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

class FooAspect extends AbstractAspect
{
    public $classes = [
        UserService::class,
        'App\Service\UserService::getInfoById',
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // TODO: Implement process() method.

        var_dump($proceedingJoinPoint->getArguments());

        $result = $proceedingJoinPoint->process();

        var_dump(123);

        return $result;
    }

}