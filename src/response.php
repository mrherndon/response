<?php
namespace mrherndon\response;

class response {
	public $message = 'Post Successful';
	public $object;
	public $error = false;
	public $errorMessage = '';

	public function __construct(object $object){
        $this->object = !empty($object) ? $object : new \stdClass();
	}
	
	public function return(string $message = '', string $error = '') {
		if(!empty($error)) {
			$this->error = true;
			$this->errorMessage = $error;
		}
		if(!empty($message))$this->message = $message;
		echo(json_encode($this));
		exit;
	}
}