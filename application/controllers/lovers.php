<?php
class Lovers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lovers_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = '三天模拟情侣活动';

	    $this->load->view('templates/header', $data);
	    $this->load->view('lovers/index', $data);
	    $this->load->view('templates/footer');

	}

	public function sofarsogood()
	{
		$data['people'] = $this->lovers_model->get_lovers();
		$data['title'] = 'Current Reigster Info';

		$keys = array('名字','性别','专业','年级','住址','手机','邮箱','队伍名');
		$data['keys_CH'] = $keys;

		$this->load->view('templates/header', $data);
		$this->load->view('lovers/sofarsogood',$data);
		$this->load->view('templates/footer');
	}


	public function register()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');

		$data['title'] = '报名';
		$ready = FALSE;

		$form_name = $this->lovers_model->input->post('formname');

		if($form_name == '1')
		{
			$sch_loc = $this->lovers_model->input->post('school');
			if($sch_loc)
				$_POST['room_num'] = -1;

			$ready = $this->form_validation->run('single_register');
			$is_double = 0;
		}
		else if($form_name == '2')
		{
			$sch_loc_1 = $this->lovers_model->input->post('school_1');
			$sch_loc_2 = $this->lovers_model->input->post('school_2');

			if($sch_loc_1)
				$_POST['room_num_1'] = -1;
			if($sch_loc_2)
				$_POST['room_num_2'] = -1;

			$ready = $this->form_validation->run('double_register');
			$is_double = 1;
		}
		else
			$is_double = -1;

		$data['reg_mode'] = $is_double;

		if($ready === TRUE)
		{
			$this->lovers_model->register($is_double);
		    $this->load->view('templates/header', $data);  
	    	$this->load->view('lovers/success');
		    $this->load->view('templates/footer');
		}
		else
		{
		    $this->load->view('templates/header', $data);  
	    	$this->load->view('lovers/register', $data);
		    $this->load->view('templates/footer');
		}

	}

	public function check_name($str) 
	{
		$count = preg_match("/^[\x{4e00}-\x{9fa5}]{2,}$/u",$str);

		if($count)
		{
			return TRUE;
		} 
		else 
		{
			$this->form_validation->set_message('check_name', '请输入正确的名字');
			return FALSE;
		} 
	}

	public function check_gender($gen2)
	{
		$gen1 = $this->lovers_model->input->post('gender_1');

		if($gen1 == $gen2)
		{
			$this->form_validation->set_message('check_gender', '暂时只支持异性恋噢');
			return FALSE;
		}
		else
			return TRUE;
	}

	public function check_duplicate_by_name($name, $id)
	{

		if($id == 0)
			$id = NULL;
		else
			$id = '_'.$id;

		$phone_num = $this->lovers_model->input->post('phone'.$id);

		$condition1 = "'".$name."';";

		$query = $this->db->query('SELECT phone FROM People WHERE name='.$condition1);

		if(!$query->result())
			return TRUE;
		else
		{
			$result = $query->result()[0]->phone;

			if( $result == $phone_num )
			{
				$this->form_validation->set_message('check_duplicate_by_name', '同一人请不要重复报名噢');
				return FALSE;
			}
			else
				return TRUE;
		}
	}

	public function check_duplicate_by_phone($phone)
	{
		$command = 'SELECT name FROM People WHERE phone='.$phone.";";
		$query = $this->db->query($command);

		if(!$query->result())
			return TRUE;
		else
		{
			$this->form_validation->set_message('check_duplicate_by_phone', '该手机号已被注册过咯');
			return FALSE;
		}


	}


	public function check_one_person($name, $id_another)
	{
		$name_another = $this->lovers_model->input->post('name_'.$id_another);
		if($name == $name_another)
		{
			$this->form_validation->set_message('check_one_person', '同一人请不要重复报名噢');
			return FALSE;
		}
		else
			return TRUE;
	}

	public function check_phone($phone)
	{
		$count = preg_match('/(13|15|18|17)\d{9}/', $phone);
		if($count)
			return TRUE;
		else
		{
			$this->form_validation->set_message('check_phone','请输入真实手机号噢');
			return FALSE;
		}
	}

	public function check_mail($mail)
	{
		$pattern = '/^[a-z0-9]([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/i';
		$count = preg_match($pattern, $mail);

		if($count)
			return TRUE;
		else
		{
			$this->form_validation->set_message('check_mail','请输入有效邮箱地址');
			return FALSE;			
		}

	}

}

?>
