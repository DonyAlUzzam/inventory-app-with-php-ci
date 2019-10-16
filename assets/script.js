$(function(){
    var pathInfo = window.location.pathname;
    console.log(pathInfo)
    var all = "/stok/index.php/data/cetakAll";
    var bulanan = "/stok/index.php/data/cetakBulanan";
    var tahunan = "/stok/index.php/data/cetakTahunan";
    var date = "/stok/index.php/data/cetakHarian";

   
    if (pathInfo==all){
        $("#judul").append("Laporan Semua")
    } else if(pathInfo==bulanan){
        $("#judul").append("Laporan Bulanan")
    } else if (pathInfo==tahunan){
        $("#judul").append("Laporan Tahunan")
    } else if(pathInfo==date){
        $("#judul").append("Laporan Harian")
        
    }
    

    console.log("hai")
})