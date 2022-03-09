<?php


namespace App\Controller;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 */
class ToDoController
{

    public function index()
    {
        return 'hello word';
    }

}
