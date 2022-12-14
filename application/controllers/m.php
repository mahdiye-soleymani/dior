<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m extends CI_Controller {

	public function index()
	{
		$this->load->view('dior/index');
	}
		public function g()
	{
		$this->load->view('dior/guide.php');
	}
			public function h()
	{
		$this->load->view('dior/history.php');
	}
			public function ulog()
	{
		$this->load->view('dior/userlogin.php');
	}
			public function mlog()
	{
		$this->load->view('dior/manegerlogin.php');
	}
			public function u()
	{
		$this->load->view('dior/user.php');
	}
			public function ma()
	{
		$this->load->view('dior/manger.php');
	}
			public function s()
	{

	
	$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'نام کاربری', 'required|min_length[4]');
		$this->form_validation->set_rules('pass1', 'رمز عبور', 'required|min_length[4]|matches[pass2]');
		$this->form_validation->set_rules('pass2', 'رمز عبور', 'required');
		$this->form_validation->set_message('required', 'پر بودن فیلد %s الزامی میباشد.');
		$this->form_validation->set_message('min_length', 'طول  %sحداقل  باید %s کاراکتر باشد.');
		$this->form_validation->set_message('matches', 'رمز عبور باید یکسان باشد.');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('dior/signin.php');
		}
		else
		{
			$this->load->view('dior/usersign.php');
		}
	}
				public function us()
	
		{
		
			$this->load->view('dior/usersign.php');
		
		}	
					public function ulog2()
	
		{
		
			$this->load->view('dior/userlogin2.php');
		
		}
					public function np()
	{
		$this->load->view('dior/newperfume.php');
	}
						public function per()
	{
		$this->load->view('dior/perfume.php');
	}
							public function d()
	{
		$this->load->view('dior/delete.php');
	}
								public function ad()
	{
	
	{
	$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'نام عطر', 'required|min_length[4]');
		$this->form_validation->set_rules('creator', 'نام سازنده', 'required|min_length[2]');
		$this->form_validation->set_rules('nature', 'طبع', 'required|min_length[3]');
		$this->form_validation->set_rules('gender', 'جنسیت', 'required');
		$this->form_validation->set_message('required', 'پر بودن فیلد %s الزامی میباشد.');
		$this->form_validation->set_message('min_length', 'طول  %sحداقل  باید   %s کاراکتر باشد.');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('dior/newperfume.php');
		}
		else
		{
			$this->load->view('dior/addperfume.php');
		}
	}
	}
				public function t()
	{
		$this->load->view('dior/manger2.php');
	}
					public function e()
	{
		$this->load->view('dior/edit.php');
	}
	

}

