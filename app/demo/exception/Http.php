<?php
namespace app\demo\exception;

use think\exception\Handle;
use think\Response;
use Throwable;

class Http extends Handle
{
    public function render($request, Throwable $e): Response
    {
        return json(['msg'=>$e->getMessage()]);
    }

}