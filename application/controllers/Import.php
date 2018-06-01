<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Goutte\Client as Gclient;
use JonnyW\PhantomJs\Client;
use Symfony\Component\DomCrawler\Crawler as Crawler;
use Browser\Casper;

class Import extends CI_Controller {

    public $productImportCount = 0;
    public $productUpdateCount = -1;
public function __construct(){
        parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->model('Registry_Products_model');
         $this->load->model('Registry_Products_Page_model');
         $this->load->model('user_model');
         $this->load->model('Product_model');
         $this->load->model('Registry_model');
         $this->load->model('Page_model');
         $this->load->model('Faq_model');
         $this->load->model('Partner_model');
         $this->load->helper('date');
    }
	public function index()
	{
        set_time_limit(-1);
        $client = Client::getInstance();
        $client->isLazy();
        $client->getEngine()->setPath('/var/www/html/pjst/node_modules/phantomjs/lib/phantom/bin/phantomjs');
        $request  = $client->getMessageFactory()->createRequest();
        $response = $client->getMessageFactory()->createResponse();

        $request->setMethod('GET');


        $userAgent = 'Mozilla/5.0 (Windows NT 10.0)'
            . ' AppleWebKit/537.36 (KHTML, like Gecko)'
            . ' Chrome/48.0.2564.97'
            . ' Safari/537.36';
        $headers = array('User-Agent' => $userAgent);
        $request->setHeaders($headers);
        $url = 'https://www.amazon.com/wedding/aabru-madni-bilal-nasir-buena-park-august-2016/registry/51ULB996O61W';
        $request->setUrl($url);


        $client->send($request, $response);

        if($response->getStatus()) {

//            $html = html_entity_decode($response->getContent());
            $html = ($response->getContent());
//            $crawler = new Crawler();
//            $crawler = $crawler->request(null,null,array(),array(),array(),$hhh);


            $crawler = new Crawler($html);
            $p = $crawler->filter('.wr-product-grid-card');
            echo $p->count();
            $p->each(function (Crawler $node, $i) {
                    print_r($node->filter('img')->attr('src'));
                    echo '<br />';
                    print_r(trim($node->filter('.wr-product-grid-card-price')->eq(0)->text()));
                    echo '<br />';
                    print_r($node->filter('a')->attr('href'));
                    echo '<br />';
                    echo $node->filter('.wr-product-grid-card-title')->eq(0)->text();
                    echo '<br />';
                    echo '<br />';
                    echo '<br />';
//                    exit;
            });
echo 'OK '.$response->getStatus();

        }else{
            echo " nothing happen ".$response->getStatus();
        }





	}

	public function test(){
        $client = new Gclient();
        $url = 'https://www.amazon.com/wedding/aabru-madni-bilal-nasir-buena-park-august-2016/registry/51ULB996O61W';
        $url = 'https://www.amazon.com';
        $crawler = $client->request('GET', $url);
        echo $crawler->html();
    }

    public function testJs()
    {
        set_time_limit(-1);
        $client = Client::getInstance();
        $client->isLazy();
//        $client->getEngine()->setPath('/usr/local/bin/phantomjs');
        $request  = $client->getMessageFactory()->createRequest();
        $response = $client->getMessageFactory()->createResponse();

        $request->setMethod('GET');


        $userAgent = 'Mozilla/5.0 (Windows NT 10.0)'
            . ' AppleWebKit/537.36 (KHTML, like Gecko)'
            . ' Chrome/48.0.2564.97'
            . ' Safari/537.36';
        $headers = array('User-Agent' => $userAgent);
        $request->setHeaders($headers);
        $url = 'https://www.amazon.com/wedding/aabru-madni-bilal-nasir-buena-park-august-2016/registry/51ULB996O61W';
        $request->setUrl($url);


        $client->send($request, $response);

        if($response->getStatus()) {

            echo $html = html_entity_decode($response->getContent());


        }else{
            echo " nothing happen try again ".$response->getStatus();
        }





    }

    public function amazon($id)
    {

        $this->load->helper('form');
        $data['result'] = $this->Registry_model->get_by_id($id);


        $this->form_validation->set_rules('registry_id', 'Registry Id', 'trim|required|alpha_numeric_spaces|min_length[4]|max_length[30]');
        if ($this->form_validation->run() === false) {
            // validation not ok, send validation errors to the view

            $this->load->view('templates/header');
            $this->load->view('registry/show', $data);
            $this->load->view('templates/footer');

        } else {
            $registry_id = $this->input->post('registry_id');
            $this->Registry_model->update_registry($id, array('registry_url'=>$registry_id));
            $registry_type = $data['result'][0]->registry_type;
            set_time_limit(-1);
            $json = shell_exec("casperjs ./assets/scripts/amazon.js https://www.amazon.com $registry_type/registry/$registry_id");
            $array = json_decode($json, true);
            $this->process($array, $id);

            $this->scrap_pages($id, $registry_id, $registry_type);

            redirect('registry/show/'.$id);

        }
    }

    public function ajax(){
        $id = $this->input->post('id');
        $registry_id = $this->input->post('registry_id');
        $data['result'] = $this->Registry_model->get_by_id($id);
        $this->Registry_model->update_registry($id, array('registry_url'=>$registry_id));
        $registry_type = $data['result'][0]->registry_type;
        set_time_limit(-1);
        $json = shell_exec("casperjs ./assets/scripts/amazon.js https://www.amazon.com $registry_type/registry/$registry_id");
        $array = json_decode($json, true);
        $this->process($array, $id);

        $this->scrap_pages($id, $registry_id, $registry_type);

        echo \GuzzleHttp\json_encode(array('rec_count'=>$this->productImportCount, 'update_count'=> $this->productUpdateCount));
    }

    private function scrap_pages($id, $registry_id, $registry_type){

        $pageResult = $this->Registry_Products_Page_model->get_by_registry($id);
        if(!empty($pageResult)){
            foreach ($pageResult as $row) {
                $json = shell_exec("casperjs ./assets/scripts/amazon-pages.js https://www.amazon.com $registry_type/registry/$registry_id $row->page");
                $array = json_decode($json, true);
                $this->process($array, $id);
                $this->Registry_Products_Page_model->update($row->id, array('scraped'=>1));
            }
            $this->scrap_pages($id, $registry_id, $registry_type);
        }

    }

    private function process($array, $id){
            if(!empty($array[0])){
                foreach($array[0] as $row){
                    $data = array(
                        'image'=> $row['image'],
                        'link'=> $row['link'],
                        'title'=> $row['title'],
                        'price'=> $row['price'],
                        'count'=> $row['id']+1,
                        'sold'=> $row['sold'],
                        'registry_id'=> $id

                    );
                    $exists = $this->Registry_Products_model->exists($id, $row['title']);

                    if($exists===false){
                        $this->productImportCount++;
                        $this->Registry_Products_model->add($data);
                    }else{
                        $this->productUpdateCount++;
                        $this->Registry_Products_model->update($exists[0]->id, $data);
                        $this->Registry_Products_Page_model->reset($id);
                    }

                }
            }
            if(!empty($array[1])){
                foreach($array[1] as $row){
                    $exists = $this->Registry_Products_Page_model->exists($id, $row['link']);
                    if($exists===false){
                        $data = array(
                            'scraped'=>$row['link']==1?1:0,
                            'page'=>$row['link'],
                            'registry_id'=>$id
                        );
                        $this->Registry_Products_Page_model->add($data);
                    }
                }
            }
        }

}
