<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/14/12
 * Time: 6:38 PM
 * To change this template use File | Settings | File Templates.
 */
    class PostsController extends AppController
    {
        var $helper = array("Html", "Form");
        var $name = "Post";

        function index()
        {
            $this->set("posts",$this->Post->find("all"));
        }

        function view($id = null)
        {
            $this->Post->id = $id;
            $this->set('post', $this->Post->read());
        }

        function add()
        {
            if(!empty($this->data))
            {
                if($this->Post->save($this->data))
                {
                    $this->Session->setFlash("Your post has been saved...");
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
?>