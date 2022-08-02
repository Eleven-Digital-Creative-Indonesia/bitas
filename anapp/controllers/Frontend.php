<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends AN_Controller
{

    /**
     * Constructor.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Home Page
     */
    public function index()
    {
        $data['title']          = 'Home';
        $data['main_content']   = 'pages/home';
        $home_list              = $this->Model_Home->get_home_detail();
        $data['homedata']       = $home_list;
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $aboutus_list           = $this->Model_Aboutus->get_aboutus_detail();
        $data['aboutusdata']    = $aboutus_list;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;

        $services_list          = $this->Model_Services->get_all_services();
        $arrDataService         = array();
        if(!empty($services_list)){
            $i      = 1;
            $index  = 1;
            foreach($services_list AS $row){
                if($row->status != 1) continue;
                if($i > 4) break;
                $arrDataService[$index][] = $row;
                if($i % 4 == 0) $index++;
                $i++;
            }
        }
        $data['servicesdata']   = $arrDataService;
        $data['serviceslist']   = $services_list;
        $client_list            = $this->Model_Home->get_all_client();
        $data['clientlist']     = $client_list;
        $data['message']        = "";
        
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * About Us Page
     */
    public function about()
    {
        $data['title']          = 'About Us';
        $data['main_content']   = 'pages/about';
        $home_list              = $this->Model_Home->get_home_detail();
        $data['homedata']       = $home_list;
        $aboutus_list           = $this->Model_Aboutus->get_aboutus_detail();
        $data['aboutusdata']    = $aboutus_list;
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $data_history           = $this->Model_Aboutus->get_all_aboutus_history(0, 0, '', 'year_from DESC', '');
        $data['data_history']   = $data_history;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;

        $services_list          = $this->Model_Services->get_all_services();
        $data['serviceslist']   = $services_list;

        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Product Page
     */
    public function product()
    {
        $data['title']          = 'Product';
        $data['main_content']   = 'pages/product';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;
        //$limit, $offset, $condition, $order_by
        $data_list              = $this->Model_Product->get_all_category('', '', " AND status = 1");
        $data['category']       = $data_list;

        $services_list          = $this->Model_Services->get_all_services();
        $data['serviceslist']   = $services_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Product Page
     */
    public function productdetail($id = 0 )
    {
        $data['title']          = 'Product';
        $data['main_content']   = 'pages/produk/detail';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;

        $product_id             = '';
        $product_name           = '';
        $img_src                = '';
        $data_product           = '';
        if ( $id ) {
            $id = an_decrypt($id);
            $data_product       = an_products($id);

            if(!empty($data_product)){
                $product_id     = $data_product->id;
                $product_name   = $data_product->name;
                $img_src        = an_product_image($data_product->image, true);
            }
        }

        $data['data_product']   = $data_product;
        $data['product_id']     = $product_id;
        $data['product_name']   = $product_name;
        $data['img_src']        = $img_src;

        $services_list          = $this->Model_Services->get_all_services();
        $data['serviceslist']   = $services_list;
        
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $data_history           = $this->Model_Aboutus->get_all_aboutus_history(0, 0, '', 'year_from DESC', '');
        $data['data_history']   = $data_history;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Services Page
     */
    public function services()
    {
        $data['title']          = 'Services';
        $data['main_content']   = 'pages/services';
        $home_list              = $this->Model_Home->get_home_detail();
        $data['homedata']       = $home_list;
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;

        $services_list          = $this->Model_Services->get_all_services();
        $arrDataService         = array();
        if(!empty($services_list)){
            $i      = 1;
            $index  = 1;
            foreach($services_list AS $row){
                if($row->status != 1) continue;
                $arrDataService[$index][] = $row;
                if($i % 4 == 0) $index++;
                $i++;
            }
        }
        $data['servicesdata']   = $arrDataService;
        $data['serviceslist']   = $services_list;

        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        $data['title']          = 'Contact Us';
        $data['main_content']   = 'pages/contact';
        $home_list              = $this->Model_Home->get_home_detail();
        $data['homedata']       = $home_list;
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;

        $services_list          = $this->Model_Services->get_all_services();
        $data['serviceslist']   = $services_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }
    
    /**
     * Save Contact Us Page
     */
    public function savecontact($isHome = false)
    {
        $data = $_POST;
        
        $home_list              = $this->Model_Home->get_home_detail();
        $data['homedata']       = $home_list;
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;

        //$limit=0, $offset=0, $conditions='', $order_by='', $params=''
        $condition = ' AND %status% = 1'; 
        $data_list              = $this->Model_Product->get_all_product(0, 0, $condition, '', '');
        $data['products']       = $data_list;
        $data['alert']          = "";
        if(!$isHome)
        {
            $data['title']          = 'Contact Us';
            $data['main_content']   = 'pages/contact';

            $services_list          = $this->Model_Services->get_all_services();
            $data['serviceslist']   = $services_list;
        }else{
            $data['title']          = 'Home';
            $data['main_content']   = 'pages/home';
            $aboutus_list           = $this->Model_Aboutus->get_aboutus_detail();
            $data['aboutusdata']    = $aboutus_list;

            $services_list          = $this->Model_Services->get_all_services();
            $arrDataService         = array();
            if(!empty($services_list)){
                $i      = 1;
                $index  = 1;
                foreach($services_list AS $row){
                    if($row->status != 1) continue;
                    if($i > 4) break;
                    $arrDataService[$index][] = $row;
                    if($i % 4 == 0) $index++;
                    $i++;
                }
            }
            $data['servicesdata']   = $arrDataService;
            $data['serviceslist']   = $services_list;
            $client_list            = $this->Model_Home->get_all_client();
            $data['clientlist']     = $client_list;
        }

        $isSuccess = $this->an_email->send_email_contact($data);
        if($isSuccess)
        {
            $data['alert']        = "Pesan anda berhasil di kirim.";
        }else{
            $data['alert']        = "Anda gagal mengirim pesan.";
        }

        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    //-----------------------------------------------------------------------------------------------------
    /**
     * team Page
     */
    public function team()
    {
        $data['title']          = 'Team';
        $data['main_content']   = 'pages/team';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Testimoni Page
     */
    public function testimoni()
    {
        $data['title']          = 'Testimoni';
        $data['main_content']   = 'pages/testimoni';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Event Page
     */
    public function event()
    {
        $data['title']          = 'Event';
        $data['main_content']   = 'pages/event';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * Tracking Page
     */
    public function tracking()
    {
        $data['title']          = 'Tracking';
        $data['main_content']   = 'pages/tracking';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * alphaking Page
     */
    public function alphaking()
    {
        $data['title']          = 'AlphaKing';
        $data['main_content']   = 'pages/alphaking';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * product alphaking Page
     */
    public function produk_alphaking()
    {
        $data['title']          = 'AlphaKing';
        $data['main_content']   = 'pages/produk/alphaking';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * peluang Page
     */
    public function peluang()
    {
        $data['title']          = 'Peluang';
        $data['main_content']   = 'pages/peluang';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }

    /**
     * tool promosi Page
     */
    public function tool_promosi()
    {
        $data['title']          = 'Tool Promosi';
        $data['main_content']   = 'pages/tool_promosi';
        $options_list           = $this->Model_Option->get_options();
        $data['options']        = $options_list;
        $this->load->view(VIEW_FRONT . 'template', $data);
    }
}
