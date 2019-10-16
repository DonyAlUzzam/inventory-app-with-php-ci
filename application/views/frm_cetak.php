<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-with, intial-scale=1">
        <title>DATA STOK BARANG</title>
        <script src="<?php echo base_url('/assets/jquery.js');?>"></script>
        <script src="<?php echo base_url('/assets/script.js');?>"></script>
            
</head>
        <body>
        <center>
        <h1 id="judul" style="margin-top:50px"></h1>
        <h1>Stok Barang</h1>
        </center>
           <div style="display:flex; justify-content:center; margin-top:50px">
     
       <table border=1>
            <thead>
                <th width="10%">No</th>
                <th width="20%">Part Number</th>
                <th width="30%">Nama</th>
                <th width="10%">Masuk(Qty)</th>
                <th width="10%">Pemakaian(Qty)</th>
                <th width="10%">Created Date</th>
            </thead>
            <?php 
                $no=1; 
                foreach($databrg as $dt) { 
            ?>
            <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td style="padding-left:10px"><?php echo $dt['partNumber']; ?></td>
                <td style="padding-left:10px"><?php echo $dt['nama']; ?></td>
                <td style="padding-left:10px"><?php echo $dt['qty_masuk'];?></td>
                <td style="padding-left:10px"><?php echo $dt['pemakaian'];?></td>
                <td style="padding-left:10px"><?php echo $dt['created_date'];?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
       
<script>
        window.print();
</script>  
  </body>
 
</!DOCTYPE>