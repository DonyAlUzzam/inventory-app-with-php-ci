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
                    </li>
                    <li><a href="#">CEATK LAPORAN</a>
                        <ul>
                            <li><a href="<?php echo base_url().'index.php/data/cetakHarian'?>" target="_blank">HARIAN</a></li>
                            <li><a href="<?php echo base_url().'index.php/data/cetakBulanan'?>" target="_blank">BULANAN</a></li>
                            <li><a href="<?php echo base_url().'index.php/data/cetakTahunan'?>" target="_blank">TAHUNAN</a></li>
                            <li><a href="<?php echo base_url().'index.php/data/cetakAll'?>" target="_blank">SEMUA</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url().'index.php/data/logout'?>" onClick="return confirm ('Yakin?')">LOGOUT</a></li>
                </ul>
            </nav>

        </div>
            <script src="<?php echo base_url('assets/js/boostrap.min.js');?>" type="text/javascript"></script>
        <center><h1>Aplikasi Stok Barang</h1></center>
           <div style="display:flex; justify-content:center; margin-top:100px">
         <table class="table table-striped table-bordered" id="data" style="margin-left:20px; margin-right:20px; margin-top:0px">
            <thead>
                <th>No</th>
                <th>Part Number</th>
                <th>Nama</th>
                <th>Masuk(Qty)</th>
                <th>Sisa Stok(Qty)</th>
                <th>Created Date</th>
                <th>Aksi</th>
            </thead>
            <?php 
                $no=1; 

                foreach($databrg as $dt) { 
                    $sisa=$dt['qty_masuk'] - $dt['pemakaian'];
            ?>
            <tr>
                <td ><?php echo $no++; ?></td>
                <td><?php echo $dt['partNumber']; ?></td>
                <td><?php echo $dt['nama']; ?></td>
                <td><?php echo $dt['qty_masuk'];?></td>
                <td><?php echo $sisa;?></td>
                <td><?php echo $dt['created_date'];?></td>
                <td>
                   
                <a href="<?php echo base_url().'index.php/data/detail_product/'.$dt['partNumber']; ?>">DETAIL</a> | <a href="<?php echo base_url().'index.php/data/frm_edit/'.$dt['partNumber']; ?>">EDIT</a> | <a href="<?php echo base_url().'index.php/data/deletedb/'.$dt['partNumber']; ?>">HAPUS</a></b>
                  
                </td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
        </script>
        
    </body>
</!DOCTYPE>