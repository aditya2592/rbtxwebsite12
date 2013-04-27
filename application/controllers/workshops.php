<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php  
    class Workshops extends CI_Controller{ 
		
    public function __construct () {
	parent::__construct();
	
$output['events'] = $this->events_m->getallevents() ;
			$output['categories'] = $this->tutorials_m->getallcats() ;
			$output['resources'] = $this->home_m->getallpages() ;

//if($this->phpbb_library->isLoggedIn())
//$output['user'] =  $this->phpbb_library->getUserInfo('username');
	      $this->template->set_template('workshop'); 
	    $this->template->parse_view('header' , 'template/header', $output);
	    $this->template->parse_view('footer' , 'template/footer', $output);

            $this->template->add_js('js/jquery-latest.js');

            $this->template->add_css('css/events/eventpage.less','link','screen','text/less');
   $this->template->add_css('css/events/eventpage.css');    
            $this->template->write('title' , 'Workshops');  
	
	}
    function index()
	{
		$data = array();
		$this->load->model('workshops_m','', TRUE);
		
		$data['posts']=$this->workshops_m->getposts();
		$data['post'][0]=$data['posts'][0]; //These are the similarly structured variables
	foreach($data['posts'] as $value){
            	$this->template->write('tabs' ,  anchor(base_url().'workshops/post/'.$value->id,$value->name));
            }
$this->template->write('content' ,  $data['post'][0]->content);
		
			

        $this->template->render();
		
	}
    function post()  
        {  
           
	   $this->load->model('workshops_m','', TRUE);
	   $data['posts']=$this->workshops_m->getposts();
	   $data['post']=$this->workshops_m->getpost();
	   $data['pics']=$this->workshops_m->getpics();
$this->template->write('title' , ' | '.$data['post'][0]->name);
foreach($data['posts'] as $value){
            	$this->template->write('tabs' ,  anchor(base_url().'workshops/post/'.$value->id,$value->name));
            }
	   $this->template->write('content' ,  $data['post'][0]->content);
$this->template->parse_view('content' ,  'workshops/workshops_page', $data);
	 
  if(($data['post'])!=NULL)
 $this->template->render();
	    //$this->parser->parse('workshops/workshops_page', $data);
	   else
	   show_404();
        }
    function admin()
	{
//if($this->phpbb_library->getUserInfo('username') == "admin"){
		$data = array();
		
		$this->load->model('workshops_m','', TRUE);
		
		$data['posts']=$this->workshops_m->getposts(); //List of posts
		$this->load->view('workshops/workshops_admin', $data);
//}
	}
    function create()
	{
		$data = array(
			'name' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			
		);
		$this->load->model('workshops_m','', TRUE);
		$this->workshops_m->addpost($data);
		$this->admin();
		
	}
    function picsession()
	{
		
		echo $this->input->post('picsession');
		
		session_start();
		$_SESSION['picsession']=$this->input->post('picsession'); //store workshop id in session variable for use with upload.php
$this->admin();
		
	}
    function delete()
	{
		$this->load->model('workshops_m','', TRUE);
		$this->workshops_m->deletepost();
		$this->admin();
	}
    function update()
	{
	    $this->load->model('workshops_m','', TRUE);
	    $posts['post']=$this->workshops_m->getpost();
	    $posts['pics']=$this->workshops_m->getpics();
	    $this->load->view('workshops/workshops_post_edit', $posts);
	    
	    //Form is submitted to self
	   
	    $data = array(
			'name' => $this->input->post('title'),
			'content' => $this->input->post('content'),
'position' => $this->input->post('position')
			
		);
	    if (!empty($data['name'])||!empty($data['content'])){
	    $this->workshops_m->updatepost($data);
	    }
	    
	    
	    $data=$this->input->post('picsdelete'); //array of options from multi dropdown
	    $finalpics=array();
	   
	    foreach ($data as $key=>$value){
		    array_push($finalpics, $posts['pics'][$value]->name);  //$posts['pics'] is an array of mysql records where each contains the object name which is not an array
                }
	    foreach($finalpics as $value)
	    {
		
		$this->workshops_m->deletepics($value);
		unlink(UPLOADPATH.'/'.$value); //deleting from server
	    } 
	   
  
	}	
    }
/*
Limitations :
->Database settings in scripts/pup/upload.php
->No way to delete images [Possible if possible with plupload]
->Site url to be prefixed to print images
->Uploads directory variable not fixed
*/