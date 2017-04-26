<?php

namespace Controllers;

use Framework\Controller;
use Twig_Loader_Filesystem;

class FooController extends Controller
{
    public function fooAction()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../src/Views/templates');
        $twig = new Twig_Environment($loader, [
            'cache' =>  false // __DIR__.'/tmp'
        ]);
        return $twig->render('index.twig');
        // return $this->render(__DIR__."/../Views/foo.php",["bar"=>"salut les loulous"]);
    }
}
