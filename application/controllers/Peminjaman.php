<?php
defined('BASEPATH')OR exit('No direct script acces allowed');

class peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }
        $this->load->model('peminjaman_model');
    }
    public function index()
    {
        $data['data']=$this->peminjaman_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah()
    {
        $data['anggota']=$this->db->get('anggota')->result();
        $data['buku']=$this->db->get('buku')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('peminjaman/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data =[
            'kode_peminjaman'=>uniqid('PMJ'),
            'anggota_id'=> $this->input->post('anggota_id'),
            'tgl_pinjam'=> date ('Y-m-d'),
            'tgl_jatuh_tempo'=> $this->input->post('tgl_jatuh_tempo'),
            'status'=> 'dipinjam',
            'user_id'=>$this->session->userdata('id_user')
        ];
        $id_buku = $this->input->post('buku_id');

        $this->peminjaman_model->insert($data, $id_buku);
        redirect('peminjaman');
    }

    public function kembali($id)
    {
        $this->peminjaman_model->pengembalian($id);
        redirect('peminjaman');
    }

    public function cetak_peminjaman()
    {
        $bulan = $this->input->get('bulan');

        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');

        if($bulan) {
            $this->db->where('DATE_FORMAT(tgl_pinjam,"%Y-%m)=', $bulan);
        }
        $data['data']=$this->db->get()->result();
        $data['bulan']= $bulan;

        $this->load->view('laporan/cetak_pinjam', $data);
    }
}