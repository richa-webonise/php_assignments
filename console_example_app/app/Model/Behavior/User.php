<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/16/12
 * Time: 6:57 PM
 * To change this template use File | Settings | File Templates.
 */

class Profile extends AppModel {
    public $name = 'Profile';
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
}