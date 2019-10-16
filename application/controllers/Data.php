<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	public function index()
	{
        $data = $this->Stokdb->GetData(); 
        	$this->load->view('tabeldata', array('databrg' => $data));
	}

	public function frm_insert()
    {
		if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
    		$this->load->view('frm_insert');
    	}
    }	

	public function insert_stk()
    {
		if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
        	$partnumber = $_POST['pn']; 
        	$nama = $_POST['nm']; 
        	$qty_masuk = $_POST['qty_masuk']; 


        	$post = array( 
                'partNumber' => $partnumber,
                'nama' => $nama,
                'qty_masuk' => $qty_masuk,
                'created_date' => date('Y-m-d', time())
        	);
 
            $result = $this->Stokdb->InsertData('product',$post); 
            $this->insert_history_id();
            	if($result >= 1) 
            {
                
                redirect('/data');
            }else{
                echo "<h2>Gagal Input Data</h2><br />";
                echo "<< <a href='".$base_url()."index.php/data/frm_insert'>Kembali</a>";
            }
        }
    }

    public function insert_history_id()
    {
		if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
        	$partnumber = $_POST['pn']; 

        	$post = array( 
                'partNumber' => $partnumber,
        	);
 
        	$result = $this->Stokdb->InsertDataHistory('history',$post); 
            	if($result >= 1) 
            {
                redirect('/data');
            }else{
                echo "<h2>Gagal Input Data</h2><br />";
                echo "<< <a href='".$base_url()."index.php/data/frm_insert'>Kembali</a>";
            }
        }
    }

    public function insert_history()
    {
		if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
        	$id = $_POST['pn']; 
        	$qtyKeluar = $_POST['qty_keluar']; 
            $keterangan = $_POST['keterangan'];
            $pic = $_POST['pic'];
            $updateDate =$_POST['update_date'];
            

        	$post = array( 
                'partNumber' => $id,
                'qty_keluar' => $qtyKeluar,
                'keterangan' => $keterangan,
                'pic' => $pic,
                'created_date' => date('Y-m-d', time())
        	);
            $result = $this->Stokdb->InsertData('history',$post); 
            	if($result >= 1) 
            {
                
                redirect('/data');
            }else{
                echo "<h2>Gagal Input Data</h2><br />";
                echo "<< <a href='".$base_url()."index.php/data/frm_insert'>Kembali</a>";
            }
        }
    }

    public function frm_edit($id) 
    {
		if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
        	$result = $this->Stokdb->GetUpdate(" WHERE partNumber = '$id'"); 
        	$data = array( 
            	'partNumber' => $result[0]['partNumber'],
            	'qty_keluar' => $result[0]['qty_keluar'],
                'keterangan' => $result[0]['keterangan'],
                'pic' => $result[0]['pic'],
        	);
        	$this->load->view('frm_edit',$data); 
    	}
    }

    public function detail_product($id) 
    {
        
        	$result = $this->Stokdb->GetDetail(" WHERE history.partNumber = '$id' AND history.qty_keluar!= 0 "); 
        	$this->load->view('frm_detail', array('databrg' => $result));
            
    }

    public function cetakAll() 
    {
        	$result = $this->Stokdb->CetakAll(); 
            $this->load->view('frm_cetak', array('databrg' => $result));
            
    }

    public function cetakHarian() 
    {
        	$result = $this->Stokdb->CetakHarian(); 
            $this->load->view('frm_cetak', array('databrg' => $result));
            
    }

    public function cetakBulanan() 
    {
        	$result = $this->Stokdb->CetakBulanan(); 
            $this->load->view('frm_cetak', array('databrg' => $result));
            
    }

    public function cetakTahunan() 
    {
        	$result = $this->Stokdb->CetakTahunan(); 
            $this->load->view('frm_cetak', array('databrg' => $result));
            
    }


    public function updatedb() 
    {
    	if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
        	$id = $_POST['pn']; 
        	$qtyKeluar = $_POST['qty_keluar']; 
            $keterangan = $_POST['keterangan'];
            $pic = $_POST['pic'];
            $updateDate =$_POST['update_date'];
            

        	$post = array( 
                'partNumber' => $id,
                'qty_keluar' => $qtyKeluar,
                'keterangan' => $keterangan,
                'pic' => $pic,
                'created_date' => date('Y-m-d', time())
        	);
 
        	$where = array('partNumber' => $id); 
        	$result = $this->Stokdb->UpdateData('history',$post,$where); 
 
        	if($result >= 1) 
        	{
            	redirect('/data');
        	}else{
            	echo "<h2>Gagal Update Data</h2><br />";
            	echo "<< <a href='".$base_url()."index.php/data'>Kembali</a>";
        	}
    	}
    }
 
 
    public function deletedb($id) 
    {
    	if (!$this->session->userdata('username')){ 
            redirect('data/login');
        }else{
    		$where = array('partNumber' => $id ); 
    		$result = $this->Stokdb->DeleteData('product',$where); 
   
	    	if ($result >= 1) 
    	    {
        	   	redirect ('/data');
        	}else{
            	echo "<h2>Gagal Delete Data</h2><br />";
            	echo "<< <a href='".$base_url()."index.php/data/'>Kembali</a>";
        	}
        }  
    }

    public function login()
    {
        if (!$this->session->userdata('username')){ 
            $this->load->view('frm_login');
        }else{
            redirect('data');
        }
    }

    public function register()
    {
            $this->load->view('frm_register');
    }

    public function cek_login() 
    {
        $user = $_POST['user']; 
        $pass = $_POST['pass']; 

        $passmd5 = md5($pass);
 
        $where = array( 
            'user' => $user,
            'pass' => $passmd5
        );
 
        $re = $this->Stokdb->GetUser('login',$where)->num_rows(); 
 
        if ($re > 0) { 
            $ses = array('username' => $user);
            $cek = $this->session->set_userdata($ses);
            redirect('data');
        }else{ 

            echo "<script>alert('Username Or Password Salah')</script>";
            redirect('data/login');
        }
    }
  
    public function cek_register() 
    {
        $user = $_POST['user']; 
        $pass = md5($_POST['pass']); 

        $post = array( 
            'user' => $user,
            'pass' => $pass,
           
        );

        $result = $this->Stokdb->Register('login',$post); 
            if($result >= 1) 
        {
            redirect('/data');
        }else{
            echo "<h2>Gagal Input Data</h2><br />";
            echo "<< <a href='".$base_url()."index.php/data/frm_register'>Kembali</a>";
        }
    }
  
    public function logout() 
    {
        $this->session-session_destroy(); 
        redirect('data');
    }
}