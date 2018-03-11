<?php
namespace Base;

use RedBeanPHP\R;

class Model extends \Prefab
{
    /*
     * @var $entity
     */
    protected $entity;

    /**
     * 
     */
    public function __construct($entity = null)
    {
        // set entity/table
        $this->entity = $entity;
    
        // connect to redbean
        if (!R::testConnection()) {
    
            // get framework
            $f3 = \Base::instance();
    
            $db = $f3->get('db');
    
            R::addDatabase(
                'connection',
                'mysql:host='.$db['host'].';dbname='.$db['name'],
                $db['username'],
                $db['password']
            );
    
            R::selectDatabase('connection');
            R::freeze($db['freeze']);
            R::debug($db['debug'], 2);
        }
    }
}