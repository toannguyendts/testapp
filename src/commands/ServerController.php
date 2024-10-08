<?php

namespace app\commands;

use InvalidArgumentException;
use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Server\DumpServer;
use yii\console\controllers\ServeController;
use yii\debug\models\router\ActionRoutes;

class ServerController extends ServeController
{

    public $defaultAction = "start";
    protected $argvInput;
    protected $consoleOutput;
    public $format = 'cli';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function actionStart($address = 'localhost')
    {
        $this->docroot = './web';
        return parent::actionIndex($address); // TODO: Change the autogenerated stub
    }
    public function actionTest()
    {
        $routerActions = new ActionRoutes();
        var_dump($routerActions->toArray());

        return 1;
    }

}