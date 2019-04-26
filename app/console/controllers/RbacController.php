<?php
/**
 * Created by PhpStorm.
 * User: RG
 * Date: 3/9/2019
 * Time: 12:07 PM
 */

namespace console\controllers;


use Yii;
use yii\base\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
        /*
         *  add "canBeCustomer" permission
         */
        $canBeCustomer = $auth->createPermission('canBeCustomer');
        $canBeCustomer->description = 'Can Be Customer';
        $auth->add($canBeCustomer);
        /*
         *  add "canBeCustomer" permission
         */
        $canBeTester = $auth->createPermission('canBeTester');
        $canBeTester->description = 'Can Be Tester';
        $auth->add($canBeTester);
        /*
         *  add "canBeCustomer" permission
         */
        $canBeSupervisor = $auth->createPermission('canBeSupervisor');
        $canBeSupervisor->description = 'Can Be Supervisor';
        $auth->add($canBeSupervisor);

        //create Roles
        // add "tester" role and give this role the "createPost" permission
        $role = $auth->createRole('customer');
        $auth->add($role);
        $auth->addChild($role,$canBeCustomer);

        $role = $auth->createRole('supervisor');
        $auth->add($role);
        $auth->addChild($role,$canBeSupervisor);

        $role = $auth->createRole('tester');
        $auth->add($role);
        $auth->addChild($role,$canBeTester);

        $role = $auth->createRole('admin');
        $auth->add($role);
        $auth->addChild($role,$canBeTester);
        $auth->addChild($role,$canBeSupervisor);
        $auth->addChild($role,$canBeCustomer);

    }
}