<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-with, intial-scale=1">
        <title>DATA STOK BARANG</title>

        <link rel="stylesheet"  href="<?php echo base_url('/assets/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/boostrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/datatable.min.css');?>">
        <script src="<?php echo base_url('/assets/jquery.js');?>"></script>
        <script src="<?php echo base_url('/assets/datatable.js');?>"></script>
        <script src="<?php echo base_url('/assets/jquery.datatable.js');?>"></script>
</head>
        <body>
        <div style="margin:20px">
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/data'?>">HOME</a></li>
                    <li><a href="<?php echo base_url().'index.php/data/frm_insert'?>">INPUT BARANG</a>
                        <ul>
                            <li><a href="<?php echo base_url().'index.php/data/cetak'?>" target="_blank">CEATK LAPORAN</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url().'index.php/data/logout'?>" onClick="return confirm ('Yakin?')">LOGOUT</a></li>
                </ul>
            </nav>

        </div>
            <script src="<?php echo base_url('assets/js/boostrap.min.js');?>" type="text/javascript"></script>
        <center><h1>Detail Barang</h1></center>
       <div style="display:flex; justify-content:center">
     
       <table class="table table-striped table-bordered" id="data" style="margin-left:20px; margin-right:20px; margin-top:0px">
            <thead>
                <th>No</th>
                <th>Part Number</th>
                <th>Nama</th>
                <th>Masuk(Qty)</th>
                <th>Keluar(Qty)</th>
                <th>Keterangan</th>
                <th>PIC</th>
                <th>Picked Date</th>
               
            </thead>
            <?php 
                $no=1; 
                foreach($databrg as $dt) { 
            ?>
            <tr>
                <td ><?php echo $no++; ?></td>
                <td><?php echo $dt["partNumber"]; ?></td>
                <td><?php echo $dt["nama"]; ?></td>
                <td><?php echo $dt['qty_masuk'];?></td>
                <td><?php echo $dt['qty_keluar'];?></td>
                <td><?php echo $dt['keterangan'];?></td>
                <td><?php echo $dt['pic'];?></td>
                <td><?php echo $dt['pick_date'];?></td>
                  
                </td>
            </tr>
                <?php } ?>
        </table>

        </div>
	<center>  <button class="btn btn-warning" style="width:250px" onClick="goBack(this)"">KEMBALI</button></center>	

        <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
        </script>
        <script>
    function goBack() {
        window.history.back();
    }
</script>
    </body>
</!DOCTYPE>