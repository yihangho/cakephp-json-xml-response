<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function index() {
    	$this->set('posts', $this->Post->find('all'));
    	// $this->set('_serialize', array('posts'));
	}
}
?>