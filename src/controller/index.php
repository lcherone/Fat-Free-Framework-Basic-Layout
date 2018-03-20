<?php

namespace Controller;

/**
 * Index Controller.
 */
class Index extends \Base\Controller
{
    public function index(\Base $f3, $params)
    {
        // load spa if exists
        if (file_exists('src/_dist/index.html')) {
            exit(\View::instance()->render('src/_dist/index.html'));
        }
        
        //$this->user = new \Model\User($f3);

        //
        $f3->mset([
            'template' => 'src/view/template.php',
            'page'     => [
                'title' => 'Home',
                'body'  => \View::instance()->render('src/view/index/index.php'),
            ],
        ]);
    }
}
