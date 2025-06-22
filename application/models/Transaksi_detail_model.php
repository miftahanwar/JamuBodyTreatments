<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_detail_model extends CI_Model{

	function get_jam_mulai_terpakai($tanggal, $layanan_id){
		$this->db->select('jam_mulai, durasi, jam_selesai');
		$this->db->where('tanggal', $tanggal);
		$this->db->where('layanan_id', $layanan_id);
		return $query = $this->db->get('transaksi_detail')->result();

		// $sql = "
		// 		SELECT
		// 			jam_mulai, durasi, jam_selesai
		// 		FROM futsal_transaksi_detail
		// 		where
		// 			tanggal = ? and layanan_id = ?
		// 		";
		// $query = $this->db->query($sql, array($tanggal, $layanan_id));
		//
		// return $query->result();
	}
}
