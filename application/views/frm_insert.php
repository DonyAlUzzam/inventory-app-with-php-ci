<html>
    <head>
        <title>TAMBAH STOK BARANG</title>
        <link rel="stylesheet"  href="<?php echo base_url('/assets/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/boostrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/datatable.min.css');?>">

    </head>
        <body>
            <div class="kotak_login">
	<p class="tulisan_login">Tamabah Stok Barang</p>
    <form name="frm_in" method="POST" action="<?php echo base_url().'index.php/data/insert_stk'; ?>" onSubmit="return validasi()">
        <label>Part Number</label><br/>
        <input type="text" class="form-control" name="pn" placeholder="Part Number">
        <label>Nama</label><br/>
        <input type="text" class="form-control" name="nm" placeholder="Nama">
        <label>Masuk(Qty)</label><br/>
        <input type="number" class="form-control" name="qty_masuk" placeholder="Qty Masuk"><br/>
        <button class="btn btn-primary" name="simpan" type="submit" style="margin-left:30%; width:150px">Simpan</button>
 
        <br/>
        <br/>
		<center>
		</center>
	</form>
  <center>  <button class="btn btn-warning" style="width:250px" onClick="goBack()">KEMBALI</button></center>	
</div>
            <script>
    function goBack() {
        window.history.back();
    }
</script>
        </body>
</html>