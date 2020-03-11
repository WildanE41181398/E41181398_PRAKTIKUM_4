<?php
//Syntax di bawah berfungsi agar tidak dapat mengakses langsung controller
defined('BASEPATH') OR exit('No direct script access allowed');

//Mengimport library file bernama REST_Controller.php
require APPPATH . '/libraries/REST_Controller.php';

//Menggunakan Restserver
use Restserver\Libraries\REST_Controller;

//Membuat class Kontak dan meng-Extends REST_Controller
class Kontak extends REST_Controller {
    //Function yang pertama kali dan sudah ada 
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Method index_get berfungsi Menampilkan data kontak
    function index_get() {
        //Mengambil id pada link dengan menggunakan method get
        $id = $this->get('id');
        //Jika id ada, maka akan menampilkan kontak sesuai id
        if ($id == '') {
            $kontak = $this->db->get('telepon')->result();
        //Jika salah, tidak ada id, maka akan menampilkan semua pada tabel telepon
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('telepon')->result();
        }
        //Menampilkan data pada variabel $kontak
        $this->response($kontak, 200);
    }

    //Masukan function selanjutnya disini

    //Method index_post berfungsi Mengirim atau menambah data kontak baru
    function index_post() {
        //Membuat array dengan variabel $data yang berisi data-data yang diinput
        $data = array(
                    'id'           => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'nomor'    => $this->post('nomor'));
        //INSERT data ke database
        $insert = $this->db->insert('telepon', $data);
        //Jika Benar, maka menampilkan data baru
        if ($insert) {
            $this->response($data, 200);
        //Jika salah, maka menampilkan status fail
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini

    //Method index_put berfungsi Memperbarui data kontak yang telah ada
    function index_put() {
        //Mengambil id dengan method put
        $id = $this->put('id');
        //Membuat array dengan variabel $data yang berisi data-data yang diinput
        $data = array(
                    'id'       => $this->put('id'),
                    'nama'          => $this->put('nama'),
                    'nomor'    => $this->put('nomor'));
        //Syntax di bawah untuk Merekam id pada method where
        $this->db->where('id', $id);
        //Syntax di bawah untuk update tabel telepon 
        $update = $this->db->update('telepon', $data);
        //Jika berhasil update, maka akan tampil data yang telah diubah
        if ($update) {
            $this->response($data, 200);
        //Jika gagal update, maka akan tampil stastus fail 
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini

     //Method index delete berfungsi Menghapus salah satu data kontak
     function index_delete() {
         //Syntax di bawah berfungsi untuk mengambil id pada method delete
        $id = $this->delete('id');
        $this->db->where('id', $id);
        //Syntax di bawah berfungsi untuk menghapus data pada tabel telepon berdasarkan id yang telah diseleksi query
        $delete = $this->db->delete('telepon');
        //Jika delete sukses, maka akan menampilkan status succes
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        //Jika delete gagal, maka akan menampilkan status fail 
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>