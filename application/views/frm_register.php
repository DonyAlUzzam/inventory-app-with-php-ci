<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
        <head>
            <title>REGISTER ADMIN</title>
        <link rel="stylesheet"  href="<?php echo base_url('/assets/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/boostrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/datatable.min.css');?>">

        </head>
    <body>
    <div class="kotak_login">
	<p class="tulisan_login">Silahkan Register</p>
 
	<form  method="POST" action="<?php echo base_url()."index.php/data/cek_register/"; ?>"> 
		<label>Username</label>
		<input type="text" name="user" class="form_login" placeholder="Username atau email ..">
 
		<label>Password</label>
		<input type="password" name="pass" class="form_login" placeholder="Password ..">
 
        <br/>
        <input type="submit" name="daftar" class="tombol_daftar" value="DAFTAR">
 
		<br/>
		<br/>
	<center>  <button class="btn btn-warning" style="width:250px" onClick="goBack()">KEMBALI</button></center>	
	</form>
	
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
    </body>
</html>