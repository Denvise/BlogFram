<?php

namespace Framework;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing;

use Framework\Config\Routes;

class App
{
    static public function run() {
        $request = Request::createFromGlobals();
        $context = new Routing\RequestContext();
        $context->fromRequest($request);
        $matcher = new Routing\Matcher\UrlMatcher(Routes::getRoutes(), $context);


        $route = $matcher->match($request->getPathInfo());

        list($controllerClass,$actionMethod) = explode("::",$route["_controller"]);
        $controllerClass = "\Controllers\\".$controllerClass;

        $controller = new $controllerClass();

        $controller->{$actionMethod}();



    }
}