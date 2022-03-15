<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="http")
 */
class CalculatorService implements CalculatorServiceInterface
{

    public function add(int $a, int $b)
    {
        return $a + $b;
    }

}