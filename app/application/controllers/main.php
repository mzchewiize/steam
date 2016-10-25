<?php
@session_start(); 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {
    var $css = array(
    	'webroot/css/my_style.css',
    	'webroot/css/bootstrap-theme.min.css',
    	'webroot/css/multiple-select.css',
    	'webroot/css/jquery-ui.css',
    	'webroot/css/bootstrap.min.css',
    	'webroot/css/bootstrap-wysihtml5.css',
    	'webroot/css/wysiwyg-color.css',
    	'webroot/css/flags.css',
    	'webroot/css/flexslider.css'

    );
    
    var $jscript = array(
        'webroot/js/wysihtml5-0.3.0.js',
        'webroot/js/jquery-1.7.2.min.js',
        'webroot/js/prettify.js',
        'webroot/js/bootstrap.min.js',
        'webroot/js/bootstrap-wysihtml5.js',
        'webroot/js/jquery.flagstrap.js',
       'webroot/js/jquery.validate.js'
    );

	var $admin_data = array();

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url', 'util'));
        $this->load->model('admin_model');
        $this->admin_data = $this->session->userdata('admin');
    }

    public function index($error = '') 
	{
	   $data['hilight'] =  $this->admin_model->index_query(array('cover' => 1),'item_image');
       $this->load->view('template/index_template', $data);
    }
   
    public function login()
    {
		$content_cat = array();
		array_push($this->css,'webroot/css/easyslider/screen.css');
		$header['css'] = $this->css;

		array_push($this->jscript,
    			'webroot/js/jssor.js',
    			'webroot/js/jssor.slider.js',
    			'webroot/js/google_map_overview.js',
    			'webroot/js/easyslider/easySlider1.7.js'
            );
        
        $header['jscript'] = $this->jscript;
        $header['header_user'] = $this->admin_data;
        $post = $this->input->post();

        if($post)
        {
        	$auth = $this->admin_model->get_where_data(
        		array(
	        			'login_name' => $post['user_login'],
	        			'password' => md5($post['password']),
        			),
        		'user_profile'
        	);
        	
        	if($auth == true)
        	{
        		if($auth[0]['user_verify'] == 1 && in_array($auth[0]['user_group'], array('4')))
        		{
                    $this->session->set_userdata('partner', $auth);
                    $a_set_data = array('last_login' => date('Y-m-d H:i:s'));
                    $update_data = $this->admin_model->Update_data($a_set_data, 'user_profile', array('property_code'=>$auth[0]['property_code']));
                    return redirect('webmin/main_content');
        		}
        		else
        		{	
        			$data['danger'] = "User not verify or admin not approve";
        		}
        	}
        	else
        	{
        		$data['danger'] = "user not found / please contact administrator";
        	}
        }

        $data['info'] = "MALONGYER production";
		$this->load->view('template/header', $header);
		$this->load->view('login' , $data);
		$this->load->view('template/footer');
    }

    function logout() 
    {
        $this->session->unset_userdata('admin');
        return redirect('main/login');
    }

    function prewedding()
    {
   //       //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'pre_wedding'),'item_image', 'datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/body_template', $data);
        $this->load->view('template/footer_template');
    }

    function presentation()
    {
     //     //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'wedding_presentation'),'item_image','datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/video_template', $data);
        $this->load->view('template/footer_template');
    }

    function engagement()
    {
       //   //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'engagement'),'item_image','datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/body_template', $data);
        $this->load->view('template/footer_template');
    }
    
    function weddingreception()
    {
     //     //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'wedding_reception'),'item_image','datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/body_template', $data);
        $this->load->view('template/footer_template');
    }
    
    function weddingcinema()
    {
     //     //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'wedding_cinema'),'item_image','datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/video_template', $data);
        $this->load->view('template/footer_template');
    }

    function partyevent()
    {
          //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'event_photo'),'item_image','datetime_update');
        $this->load->view('template/header_template');
        $this->load->view('template/body_template', $data);
        $this->load->view('template/footer_template');
    }

    function partyvideo()
    {
         //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'event_video'),'item_image');
        $this->load->view('template/header_template');
        $this->load->view('template/video_template', $data);
        $this->load->view('template/footer_template');
    }

    function presentationvideo()
    {
         //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'presentation'),'item_image');
        $this->load->view('template/header_template');
        $this->load->view('template/video_template', $data);
        $this->load->view('template/footer_template');
    }

    function graphic()
    {
          //cache page for 2 minute
        $data['photo'] =  $this->admin_model->get_where_data(array('catergories' => 'graphic_design'),'item_image');
        $this->load->view('template/header_template');
        $this->load->view('template/body_template', $data);
        $this->load->view('template/footer_template');
    }

    function blog()
    {
        $this->output->cache(2); //cache page for 2 minute

        
        $this->load->view('template/header_template');
        $this->load->view('template/blog_template');
        $this->load->view('template/footer_template');
    }

     function contact()
    {
        $this->load->view('template/header_template');
        $this->load->view('template/contact_template');
        $this->load->view('template/footer_template');
    }
    function remove_cache()
    {
        $CI =& get_instance();
        $path = $CI->config->item('cache_path');
        $path = rtrim($path, DIRECTORY_SEPARATOR);

        $cache_path = ($path == '') ? APPPATH.'cache/' : $path;

        $uri =  $CI->config->item('base_url').
                $CI->config->item('index_page').
                $uri_string;

        $cache_path .= md5($uri);

        return unlink($cache_path);
    }

    function ig()
    {

        $json = file_get_contents("https://api.instagram.com/v1/users/1564372602/media/recent/?access_token=1564372602.5b9e1e6.7e3dfe794e374f8f818c148e21a5074e");
        $data = json_decode($json);

        $result = array();
 
        foreach( $data->data as $user_data ) {
             $result[] = array(
                'images' => (array) $user_data->images,
                'caption' => $user_data->caption->text,
            );
        }
         foreach($result as $item) {     
            echo "<img src='".@$item['images']['standard_resolution']->url."'/>";
         }
     }

     function services()
     {
        $this->load->view('template/header_template');
        $this->load->view('template/services_template');
        $this->load->view('template/footer_template');
     }
     function test_conntect()
     {
        echo "hello world";
        
     }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
