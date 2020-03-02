<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{

    public function Get($table)
    {
        $res = $this->db->get($table);
        return $res->result_array();
    }

    public function Insert($table, $data)
    {
        $res = $this->db->insert($table, $data);
        return $res;
    }

    public function Edit($table, $data, $where)
    {
        $res = $this->db->edit($table, $data, $where);
        return $res;
    }

    public function Update($table, $data, $where)
    {
        $res = $this->db->update($where, $table);
        return $res;
    }


    public function Delete($table, $data)
    {
        $res=$this->db->delete($table, $data);
        return $res;
    }

    public function GetWhere($table, $data)
    {
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

    /*
    private $_table = "products";

    public $produk_id;
    public $gambar;
    public $nama;
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'gambar',
            'label' => 'Gambar',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->produk_id = uniqid();
        $this->gambar = $post["gambar"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->produk = $post["id"];
        $this->gambar = $post["gambar"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('produk_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("produk_id" => $id));
    }
    */

}