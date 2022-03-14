<?php

declare(strict_types=1);

namespace App\Controller;
use App\Service\Interfaces\UserServiceInterface;
use App\Service\UserService;
use Hyperf\Context\Context;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\Coroutine;
use Hyperf\Utils\Exception\ParallelExecutionException;
use Hyperf\Utils\Parallel;

/**
 * @AutoController()
 */
class TestController extends AbstractController
{


    /**
     * @Inject ;
     * @var UserServiceInterface
     */
    private $userService;


    public function index()
    {

        return '123';

    }


    public function layer()
    {

        return $this->userService->getInfoById(123);

        return 'layer';

    }

    public function meng()
    {

        $res = config('app_name');

        var_dump($res);

        $res = Coroutine::id();

        var_dump($res);
    }

}
