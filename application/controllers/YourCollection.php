<?php

class YourCollection extends CI_Controller{

	public function index(){
		$data['judul'] = 'Your Collection';
		$this->load->view('template/sidebar', $data);
    $this->load->view('template/yourcollection', $data);
    $this->load->model('yourcollection_model');
  }
    
    public function getplaylist(){
    }

    public function createplaylist(){
      $this->load->helper('url');
      $this->load->view('template/formPlaylist');
      $this->input->post('playlistname');
      $data = array(
        'playlist_name' => $playlistname
      );
      //$this->db->insert('playlist', $data);
      $this->youcollection_model->newplaylist($data);
      //redirect('template/YourCollection',refresh);
    }


}