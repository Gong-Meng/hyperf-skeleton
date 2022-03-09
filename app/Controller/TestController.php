<?php

declare(strict_types=1);

namespace App\Controller;
use App\Service\UserService;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;

/**
 * @AutoController()
 */
class TestController extends AbstractController
{


    /**
     * @inject();
     * @var UserService
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

}
