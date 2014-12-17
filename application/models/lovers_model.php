<?php

class Lovers_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function register($is_double)
	{
		if($is_double == 0)
		{

			$room_loc = $this->input->post('academy');
			$room_loc .= $this->input->post('build_num');
			$room_loc = $room_loc.'舍'.($this->input->post('room_num'));

			$data = array(

			'has_team' => FALSE,
			'team_name' => NULL,
			'name' => $this->input->post('name'),
			'gender' => $this->input->post('gender'),
			'grade' => $this->input->post('grade'),
			'major' => $this->input->post('major'),
			'hobby' => $this->input->post('hobby'),
			'phone' => $this->input->post('phone'),
			'mail' => $this->input->post('mail'),
			'room_loc' => $room_loc

			);

			$this->db->insert('People', $data);
		}

		else if($is_double == 1)
		{
			for($id=1; $id<=2; $id++)
			{

				$room_loc = $this->input->post('academy_'.$id);
				$room_loc .= $this->input->post('build_num_'.$id);
				$room_loc = $room_loc.'舍'.($this->input->post('room_num_'.$id));

				$data = array(

					'has_team' => TRUE,
					'team_name' => $this->input->post('team_name'),
					'name' => $this->input->post('name_'.$id),
					'gender' => $this->input->post('gender_'.$id),
					'grade' => $this->input->post('grade_'.$id),
					'major' => $this->input->post('major_'.$id),
					'hobby' => $this->input->post('hobby_'.$id),
					'phone' => $this->input->post('phone_'.$id),
					'mail' => $this->input->post('mail_'.$id),
					'room_loc' => $room_loc

					);

				$this->db->insert('People', $data);
			}
		}
	}

	public function get_lovers()
	{
		$query = $this->db->get('People');
		return $query->result_array();
	}

}