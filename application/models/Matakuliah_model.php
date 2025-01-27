<?php

	class Matakuliah_model extends CI_Model {

		public function tampil_data($table) {

			return $this->db->get($table);
		}

		public function insert_data($data,$table) {

			$this->db->insert($table,$data);
		}

		public function ambil_kode_matakuliah($kode) {

			$result = $this->db->where('kode_matakuliah', $kode)->get('matakuliah');

			if ($result->num_rows() > 0) {
				return $result->result();
			} else {
				return FALSE;
			}
		}

		public function update_data($where,$data,$table) {

			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_data($where,$table) {

			$this->db->where($where);
			$this->db->delete($table);
		}
	}

?>