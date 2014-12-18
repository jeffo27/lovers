<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('welcome_message');
		$this->load->helper('captcha');

		$config['image_library'] = 'gd2';
		$this->load->library('image_lib', $config);

		// $vals = array(
		//     'word' => rand(1000,10000),
		//     'img_path' => 'staic/img/captcha.jpg',
		//     'img_url' => 'http://example.com/captcha/',
		//     'font_path' => './path/to/fonts/texb.ttf',
		//     'img_width' => '150',
		//     'img_height' => 30,
		//     'expiration' => 7200
		//     );

		// $cap = create_captcha($vals);
		// echo $cap['image'];

		$vals=array(
	            'word'=>rand(1000,10000),//显示纯数字，这里有人不知道怎么做
	            'img_path'=>'static/validate_code/',
	            'img_url'=>base_url()."static/validate_code/",
	            'img_width'=>'140',
	            'img_height'=>'60',
	            'expiration'=>20
            );
            $cap=create_captcha($vals);
            $img=$cap['image'];
            $time=$cap['time'];
            $num=$cap['word'];

        echo $img."<br/>------------<br/>".$time."<br/>------------<br/>".$num."<br/>-------------<br/>";

		echo $this->image_lib->display_errors();

		echo 'aa';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */