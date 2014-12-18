<?php
		$config = array(

				'single_register' => array(

					array(
						'field'   => 'name',
						'label'   => '姓名',
		                'rules'   => 'callback_check_name|callback_check_duplicate_by_name[0]'
						// 'rules'   => 'required|callback_check_name'
						),

					array(
						'field'   => 'phone',
						'label'   => '手机',
		                'rules'   => 'required|callback_check_phone|callback_check_duplicate_by_phone'
		                // 'rules'   => 'required'		                
						),

					array(
						'field'   => 'gender',
						'label'   => '性别',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'mail',
						'label'   => '邮箱',
		                'rules'   => 'callback_check_mail'
						),

					array(
						'field'   => 'grade',
						'label'   => '年级',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'major',
						'label'   => '专业',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'hobby',
						'label'   => '兴趣爱好',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'school',
						'label'   => 'School Loc',
		                'rules'   => 'required'
						),					

					array(
						'field'   => 'academy',
						'label'   => '学园',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'build_num',
						'label'   => '楼号',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'room_num',
						'label'   => '寝室号',
		                'rules'   => 'required|integer'
						)

					),

				'double_register' => array(

					array(
						'field'   => 'team_name',
						'label'   => '队伍名称',
		                'rules'   => 'required|is_unique[People.team_name]'
						),


					array(
						'field'   => 'name_1',
						'label'   => '姓名',
		                'rules'   => 'callback_check_name|callback_check_duplicate_by_name[1]|callback_check_one_person[2]'
		                // 'rules'   => 'required|callback_check_name'
						),

					array(
						'field'   => 'phone_1',
						'label'   => '手机',
		                'rules'   => 'required|callback_check_phone|callback_check_duplicate_by_phone'
						),

					array(
						'field'   => 'mail_1',
						'label'   => '邮箱',
		                'rules'   => 'callback_check_mail'
						),

					array(
						'field'   => 'gender_1',
						'label'   => '性别',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'grade_1',
						'label'   => '年级',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'major_1',
						'label'   => '专业',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'hobby_1',
						'label'   => '兴趣爱好',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'school_1',
						'label'   => 'School Loc',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'academy_1',
						'label'   => '学园',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'build_num_1',
						'label'   => '楼号',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'room_num_1',
						'label'   => '寝室号',
		                'rules'   => 'required|integer'
						),

					array(
						'field'   => 'name_2',
						'label'   => '姓名',
		                'rules'   => 'callback_check_name|callback_check_duplicate_by_name[2]|callback_check_one_person[1]'
		                // 'rules'   => 'required|callback_check_name'
						),

					array(
						'field'   => 'phone_2',
						'label'   => '手机',
		                'rules'   => 'required|callback_check_phone|callback_check_duplicate_by_phone'
						),

					array(
						'field'   => 'mail_2',
						'label'   => '邮箱',
		                'rules'   => 'callback_check_mail'
						),

					array(
						'field'   => 'gender_2',
						'label'   => '性别',
		                'rules'   => 'required|callback_check_gender'
						),

					array(
						'field'   => 'grade_2',
						'label'   => '年级',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'major_2',
						'label'   => '专业',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'hobby_2',
						'label'   => '兴趣爱好',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'school_2',
						'label'   => 'School Loc',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'academy_2',
						'label'   => '学园',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'build_num_2',
						'label'   => '楼号',
		                'rules'   => 'required'
						),

					array(
						'field'   => 'room_num_2',
						'label'   => '寝室号',
		                'rules'   => 'required|integer'
						)

					)
		
			);

?>