<?php


namespace app\demo\middleware;


use think\Response;

class Check
{
    public function handle($request,\Closure $next)
    {
        dump(1);
        $request->type = 'test middleware';

        return $next($request);
    }

    public function end(Response $response)
    {
        dump('end');
    }
}