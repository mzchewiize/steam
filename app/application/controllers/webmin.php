<?php
@session_start(); 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webmin extends CI_Controller {
   
    var $admin_data = array();
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url','util'));
        $this->load->model('admin_model');
        $this->admin_data = $this->session->userdata('partner');
    }

    public function index($error = '') 
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
       
    }

    function main_content()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
         else
        {
              $header['header_user'] = $this->admin_data;
          
            $this->load->view('template/admin/admin_header', $header);
            $this->load->view('template/admin/admin_body');
            $this->load->view('template/admin/admin_footer');
        }
    }

    function add_item_new()
    {
        $add_new_item = array('item_name' => $this->input->get('pcode_value'));
        $this->admin_model->insert_data($add_new_item, $this->input->get('table'));
        redirect("webmin/".$this->input->get('reload_page'));
    }

    function add_photo_album()
    {
        $album_id = $this->uri->segment(3);

        $header['css'] = $this->css;
        $header['jscript'] = $this->jscript;
        $header['header_user'] = $this->admin_data;

        $data['photos'] = $this->admin_model->get_where_data(array('ref_code' => $album_id),'item_image');

        $this->load->view('template/header', $header);
        $this->load->view('partner/partner_content_add', @$data);
        $this->load->view('template/footer');
    }

    function set_catergories()
    {
       $this->admin_model->Update_data(array('catergories'=> $this->input->GET('catergories')),'item_image', array('ref_code' => $this->input->GET('item_id')));
       $this->admin_model->Update_data(array('catergories'=> $this->input->GET('catergories')),'item_type', array('item_id' => $this->input->GET('item_id')));
  
    }

    function update_instagram()
    {
        try { 
            $url  = 'https://api.instagram.com/v1/users/1564372602/media/recent/?access_token=1564372602.5b9e1e6.7e3dfe794e374f8f818c148e21a5074e';
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $json = curl_exec($ch);
            curl_close($ch);

          if(empty($json)) {
            throw new Exception('no data returned');
          }
          $data = json_decode($json);
             $result = array();

            foreach( $data->data as $user_data ) 
            {
                 $result[] = array(
                    'images' => (array) $user_data->images,
                    'caption' => $user_data->caption->text,
                );
            }
            
            foreach($result as $item) 
            {    
                $url = $item['images']['standard_resolution']->url;

                $get_photo =  $this->admin_model->get_where_data(
                    array(
                        'instragram_url' => $url,
                        'caption_ig' => $item['caption']
                    ),'instagram_images');

                if(!$get_photo)
                {
                    $add_new_item = array('instragram_url' => $url, 'caption_ig' => $item['caption']);
                    $output = $this->admin_model->insert_data($add_new_item, 'instagram_images');
                }
            }
        } catch (Exception $e) {
          //alert the user then kill the process
          var_dump($e->getMessage());
        }
    }


    function submit_removed_content()
    {
        //find all images in this album
        $all_images = $this->admin_model->get_where_data(array('ref_code' => $this->input->get('id')),'item_image');
        //unlink all images
        foreach ($all_images as $images)
        {
            unlink(realpath('webroot/files/'.$images['uuid'].'/'.$images['image']));
        }

        // remove images in album
        $this->admin_model->delete_data(array('ref_code' => $this->input->get('id')), 'item_image');
        // remove album name
        $this->admin_model->delete_data(array('item_id' => $this->input->get('id')), 'item_type');
    }

    function manual_delete_photo()
    { 
        unlink(realpath('webroot/files/'.$this->input->get('uuid').'/'.$this->input->get('image')));
        $this->admin_model->delete_data(array('item_image_id' => $this->input->get('id')), 'item_image');        
    }

    function set_cover()
    {
        $this->admin_model->Update_data(array('cover'=> 1), 'item_image', array('item_image_id' => $this->input->GET('id')));   
    }

    function unset_cover()
    {
        $this->admin_model->Update_data(array('cover'=> 0), 'item_image', array('item_image_id' => $this->input->GET('id')));   
    }

    function seturl_youtube()
    {
        $this->admin_model->Update_data(array('url_youtube'=> $this->input->GET('url_youtube')), 'item_image', array('item_image_id' => $this->input->GET('id'))); 
    }

    function main_services()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {
            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['content_services'] =  $this->admin_model->get_where_data(array(),'content_services');
            
            $this->load->view('template/header', $header);
            $this->load->view('partner/partner_services',$data);
            $this->load->view('template/footer');
        }
    }

    function new_services_add()
    {
      if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {
            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['content_services'] =  $this->admin_model->get_where_data(array(),'content_services');
            
            $this->load->view('template/header', $header);
            $this->load->view('partner/partner_services_add',$data);
            $this->load->view('template/footer');
        }
    }

    function submit_new_services()
    {
         $add_new_item = array(
            'subject' => $this->input->post('content_subject'),
            'photo' => $this->input->post('content_photo'),
            'date' => date('Y-m-d'),
            'catergories' => $this->input->get('content_catergories'),
            'tags' => $this->input->get('content_tags'),
            'content' => $this->input->post('content_detail'),
        );
        
        $this->admin_model->insert_data($add_new_item, 'content_services');
        redirect("webmin/main_services");
    }

    
}