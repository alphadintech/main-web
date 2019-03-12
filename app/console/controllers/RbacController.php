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
        //create permissens
        /*
             $customer = $auth->createPermission('customer');
            $customer->description = 'customer of services';
            $auth->add($customer);
        */
        //create Roles
        // add "tester" role and give this role the "createPost" permission
        $role = $auth->createRole('customer');
        $auth->add($role);
        $role = $auth->createRole('supervisor');
        $auth->add($role);
        $role = $auth->createRole('tester');
        $auth->add($role);
        $role = $auth->createRole('admin');
        $auth->add($role);
//        $auth->addChild($role, $custome);


        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
//        $auth->assign($author, 2);
//        $auth->assign($admin, 1);
    }
}