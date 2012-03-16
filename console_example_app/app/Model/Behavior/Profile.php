<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/16/12
 * Time: 6:57 PM
 * To change this template use File | Settings | File Templates.
 */
class User extends AppModel{
    public $name = 'User';
    public $hasOne = array(
        'Profile' => array(
            'className' => 'Profile',
            'conditions' => array('Profile.published' => '1'),
            'dependent' => true
        )
    );
}