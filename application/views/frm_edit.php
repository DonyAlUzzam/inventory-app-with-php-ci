<html>
    <head>
        <title>EDIT STOK BARANG</title>
        <link rel="stylesheet"  href="<?php echo base_url('/assets/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/boostrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/datatable.min.css');?>">
    </head>
        <body>
            <div class="kotak_login">
	<p class="tulisan_login">Edit Stok Barang</p>
    <form name="frm_in" method="POST" action="<?php echo base_url().'index.php/data/insert_history'; ?>">
        <label hidden="">Part Number</label><br/>
        <input type="hidden" class="form-control" value="<?php echo $partNumber; ?>" name="pn" placeholder="Part Number" hidden="">
        <label>Keluar(Qty)</label><br/>
        <input type="number)" class="form-control" value="<?php echo $qty_keluar; ?>" name="qty_keluar" placeholder="Qty Keluar">
        <label>Keterangan</label><br/>
        <textarea type="text" class="form-control"  name="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        <label>PIC</label><br/>
        <input type="text" class="form-control" value="<?php echo $pic; ?>" name="pic" placeholder="PIC"><br/>
        <button class="btn btn-primary" name="simpan" type="submit" style="margin-left:30%; width:150px">Simpan</button>
 
        <br/>
        <br/>
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