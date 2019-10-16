<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stokdb extends CI_Model {
	public function GetData($where='') { 
        $query = $this->db->query('SELECT product.partNumber, product.nama, product.qty_masuk, product.created_date, SUM(history.qty_keluar) as pemakaian FROM product,history WHERE product.partNumber=history.partNumber GROUP BY history.partNumber;
        '); 
        return $query->result_array(); 
    }

    public function CetakAll($where='') { 
      
        $query = $this->db->query("SELECT product.partNumber, product.nama, product.qty_masuk, history.created_date, SUM(history.qty_keluar) as pemakaian FROM product,history WHERE product.partNumber=history.partNumber AND history.created_date!= 0000-00-00 GROUP BY history.partNumber".$where); 
        return $query->result_array(); 
    }

    public function CetakHarian($where='') { 
        $date = date('d', time());
        $tahun = date('Y', time());
        $query = $this->db->query("SELECT product.partNumber, product.nama, product.qty_masuk, history.created_date, SUM(history.qty_keluar) as pemakaian FROM product,history WHERE product.partNumber=history.partNumber AND DAY(history.created_date) = '$date' AND YEAR(history.created_date) = '$tahun' GROUP BY history.partNumber".$where); 
        return $query->result_array(); 
    }
   
    public function CetakBulanan($where='') { 
        $bulan = date('m', time());
        $tahun = date('Y', time());
        $query = $this->db->query("SELECT product.partNumber, product.nama, product.qty_masuk, history.created_date, SUM(history.qty_keluar) as pemakaian FROM product,history WHERE product.partNumber=history.partNumber AND MONTH(history.created_date) = '$bulan' AND YEAR(history.created_date) = '$tahun' GROUP BY history.partNumber".$where); 
        return $query->result_array(); 
    }

    public function CetakTahunan($where='') { 
        $tahun = date('Y', time());
        $query = $this->db->query("SELECT product.partNumber, product.nama, product.qty_masuk, history.created_date, SUM(history.qty_keluar) as pemakaian FROM product,history WHERE product.partNumber=history.partNumber AND  YEAR(history.created_date) = '$tahun' GROUP BY history.partNumber".$where); 
        return $query->result_array(); 
    }

    public function GetDetail($where='') { 
        $query = $this->db->query('SELECT product.partNumber, product.nama, product.qty_masuk, history.qty_keluar, history.keterangan, history.pic, history.created_date as pick_date FROM product LEFT JOIN history ON history.partNumber=product.partNumber '.$where); 
        return $query->result_array(); 
    }

    public function GetUpdate($where='') { 
        $query = $this->db->query('select * from history'.$where); 
        return $query->result_array(); 
    }
 
    public function Register($tabel,$data) 
    {
        $query = $this->db->insert($tabel,$data); 
        return $query;
    }

    public function InsertData($tabel,$data) 
    {
        $query = $this->db->insert($tabel,$data); 
        return $query;
    }

    public function InsertDataHistory($tabel,$data) 
    {
        $query = $this->db->insert($tabel,$data); 
        return $query;
    }
 
    public function UpdateData($tabel,$data,$where) 
    {
        $query = $this->db->update($tabel,$data,$where);
        return $query;
    }
 
    public function DeleteData($tabel,$where) 
    {
        $query = $this->db->delete($tabel,$where); 
        return $query;
    }

    public function GetUser($tabel,$where)
    {
        $query = $this->db->get_where($tabel,$where);
        return $query;
    }
}