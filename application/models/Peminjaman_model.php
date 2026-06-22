<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman_model extends CI_Model{

    public function get_all()
    {
        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');
        return $this->db->get()->result();
    }
    
    public function insert($data, $id_buku)
    {
        $this->db->insert('peminjaman', $data);
        $peminjaman_id = $this->db->insert_id();

        $this->db->insert('detail_peminjaman',[
            'peminjaman_id'=>$peminjaman_id,
            'id_buku'=> $id_buku,
            'qty'=>1
        ]);
        $this->db->set('stok', 'stok - 1', FALSE);
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku');
    }
    public function get_detail($id)
    {
        $this->db->select('detail_peminjaman.*, buku.judul_buku');
        $this->db->from('detail_peminjaman');
        $this->db->join('buku', 'buku.id_buku = detail_peminjaman.id_buku');
        $this->db->where('peminjaman_id', $id);
        return $this->db->get()->row();
    }
    public function pengembalian($id)
    {
        $detail = $this->get_detail($id);

        $pinjam = $this->db->get_where('peminjaman', ['id' =>$id])->row();

        $today=date('Y-m-d');
        $jatuh = $pinjam->tgl_jatuh_tempo;

        $selisih = strtotime($today) - strtotime($jatuh);
        $terlambat = $selisih > 0 ? floor($selisih / 86400) : 0;
        $denda = $terlambat * 1000;
        

        $this->db->insert('pengembalian', [
            'peminjaman_id'=>$id,
            'tgl_kembali'=> $today,
            'terlambat'=>$terlambat,
            'denda'=> $denda
        ]);

        $this->db->where('id', $id);
        $this->db->update('peminjaman',['status'=>'kembali']);

        $this->db->set('stok', 'stok + 1', FALSE);
        $this->db->where('id_buku', $detail->id_buku);
        $this->db->update('buku');
    }
}