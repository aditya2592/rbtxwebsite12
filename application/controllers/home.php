<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php

    class Home extends CI_Controller{

        public function __construct(){

            parent::__construct();
$output['categories'] = $this->tutorials_m->getallcats() ;
$output['events'] = $this->events_m->getallevents() ;
$output['resources'] = $this->home_m->getallpages() ;
$output['workshops'] = $this->workshops_m->getposts() ;
//if($this->phpbb_library->isLoggedIn())
//$output['user'] =  $this->phpbb_library->getUserInfo('username');
//$output['userdata'] =  $this->phpbb_library->getUserData();

	      $this->template->set_template('home'); 
	    $this->template->parse_view('header' , 'template/header', $output);
 $this->template->parse_view('header' , 'template/facebook', $output);
$this->template->parse_view('header' , 'template/slider', $output);
	    $this->template->parse_view('footer' , 'template/footer', $output);
		$this->template->add_css('css/grid/grid.less','link','screen','text/less');
//$this->template->add_css('css/events/eventpage.less','link','screen','text/less');

//$this->template->add_js('js/jquery-latest.js');

        }

        

        function index(){

          $this->load->helper('url');
         CI_redirect('home/page/welcome', 'refresh');

 $this->template->write('title' , 'Home');
$output['updates'] = $this->home_m->getpages('category', 'updates') ;
$this->template->parse_view('content', 'template/homebox', $output);

$this->template->render();
         }

       

        
        public function page(){
 $this->load->model('home_m');
                $name = $this->uri->segment('3');

                $page = $this->home_m->gethpage($name);
                
                $this->template->write('title' , $page[0]->menu_name );  
		
		$this->template->write('content', $page[0]->content );

        $this->template->render();
        }

        function admin(){

            //Adding main tabs to the event
//if($this->phpbb_library->getUserInfo('username') == "admin"){

            $this->load->model('home_m');

            

        

            

          

            $datas['pages']=$this->home_m->getallpages();

            $data = array(

			'menu_name' => $this->input->post('tabname'),

                       'slug' => $this->input->post('tabslug'),

			
                       

                        'content' => $this->input->post('tabcontent'),
 'category' => $this->input->post('tabcat'),
			

	    );

            $submit = $this->input->post('tabsubmit');

            $this->parser->parse('home_admin',$datas);

            

            if(isset($submit[0])){

                $this->home_m->insertpage($data);

               

               



            }

      //   }

        }

        


        function update(){

            //Edit details of a particular page
$this->load->model('home_m');
            $tabs['page']=$this->home_m->gethpageid($this->uri->segment(4));

            $this->load->view('home_admin',$tabs);

            $data = array(

			'menu_name' => $this->input->post('tabname'),
'category' => $this->input->post('tabcat'),
			

                        'content' => $this->input->post('tabcontent'),

                        'slug' => $this->input->post('tabslug')

			

	    );

            $submit = $this->input->post('tabsubmit');

            if(isset($submit[0])){

                $this->home_m->updatepage($this->uri->segment(4),array_filter($data));

            }



        }

        function delete(){

             $this->events_m->deletetab($this->uri->segment('4'));

             

        }

    }

    

?>