<?php defined('BASEPATH') OR exit('No direct script access allowed');
class tampilan extends CI_controller{
    function home(){
        $this->load->view("home");
    }

    function us(){
        $this->load->view("us");
    }

    function layanan(){
        $this->load->view("layanan");
    }

    function produk(){
        $this->load->model('Produk_model');
        $data = $this->Produk_model->get('produk');
        $data1 = array(
            'data' => $data
        );
        $this->load->view('produk', $data1);
    }

    public function masukkan(){
        $this->load->view("v_input");
    }
    
    public function tambah()
    {
        $data = array(
            'produk_id' => $this->input->post('produk_id'),
            'gambar' => $this->input->post('gambar'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $this->load->model('produk_model');
        $this->produk_model->insert('produk', $data);
        redirect(base_url(), 'refresh');
    }

    function galeri(){
        $this->load->view("galeri");
    }

   
    public function ubah()
    {
        $this->load->view("v_edit");
    }

    public function edit($produk_id){
        $data = $this -> input->post(NULL, TRUE);
        $this->load->model('produk_model');
        $produk = $this->produk_model->update("produk_id = '$produk_id'", $data);
        redirect('produk');
        $data = array(
            'produk_id' => $produk[1]['produk_id'],
            'gambar' => $produk[1]['gambar'],
            'nama' => $produk[1]['nama'],
            'deskripsi' => $produk[1]['deskripsi'],
        );
        $this->db->insert('produk', $data);
    }

    public function update(){
        $produk_id = $_POST['produk_id'];
        $gambar = $_POST['gam'];
        $nama = $_POST['na'];
        $deskripsi = $_POST['des'];
        $data = array(
            'gam' => $gambar,
            'na' => $nama,
            'des' => $deskripsi
        );
        $where = array(
            'produk_id' => $produk_id,
        );
        $this->load->model('produk_model');
        $re = $this->produk_mode->Update('produk', $data, $where);
        if($res>0)
        {
            redirect('tampilan/home', 'refresh');
        }

    }

    public function hapus($produk_id)
    {
        $produk_id = array('produk_id' => $produk_id);
        $this->load->model('Produk_model');
        $this->Produk_model->Delete('produk', $produk_id);
        redirect(base_url(), 'refresh');
    }



    /*
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["produk"] = $this->produk_model->getAll();
        $this->load->view("produk", $data);
    }

    public function add()
    {
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('produk');
       
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["produk"] = $produk->getById($id);
        if (!$data["produk"]) show_404();
        
        $this->load->view("edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->produk_model->delete($id)) {
            redirect(site_url('produk'));
        }
    }
    */
    
}
?>