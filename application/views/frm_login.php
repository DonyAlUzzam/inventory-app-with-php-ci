<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
        <head>
            <title>LOGIN ADMIN</title>
        <link rel="stylesheet"  href="<?php echo base_url('/assets/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/boostrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/datatable.min.css');?>">

        </head>
    <body>
    <div class="kotak_login">
	<p class="tulisan_login">Silahkan login</p>
 
	<form  method="POST" action="<?php echo base_url()."index.php/data/cek_login/"; ?>"> 
		<label>Username</label>
		<input type="text" name="user" class="form_login" placeholder="Username atau email ..">
 
		<label>Password</label>
		<input type="password" name="pass" class="form_login" placeholder="Password ..">
 
		<input type="submit" name="tbl_login" class="tombol_login" value="LOGIN">
        <br/>
       
		<br/>
		<br/>
		Belum punya akun?<a class="link" href="<?php echo base_url().'index.php/data/register'?>">Daftar</a>
		<br/><br/>
	</form>
	<center>  <button class="btn btn-warning" style="width:250px" onClick="goBack(this)"">KEMBALI</button></center>	
 
</div>


<script>
    function goBack() {
        window.history.back();
    }
</script>
    </body>
</html>