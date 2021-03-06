<?php

class Controller_Students extends Controller_Base
{

	public function before(){

		parent::before();

		$this->template = View::forge("students/template");

		$this->auth = Auth::instance();
		// logout
		if((int)Input::get("logout", 0) == 1){
			$this->auth->logout();
			Response::redirect('students/signin');
		}

		// check login
		if($this->auth_status){
			if($this->user->group_id == 100){
				Response::redirect('admin/');
			}else if($this->user->group_id == 10){
				Response::redirect('teachers/');
			}else if($this->user->group_id == 00){
				Response::redirect('grameencom/');
			}else{
				$this->template->name = $this->user->firstname;
			}
		}else{
			Response::redirect('students/signin');
		}

		$this->template->user = $this->user;
		$this->template->auth_status = $this->auth_status;
		$this->template->title = "Students";
	}

	public function action_index()
	{
		Response::redirect('students/top');
	}

}
