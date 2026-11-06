<?php 

if(isset($_GET['pages'])){
    $page = $_GET['pages'];
} else {
    $page="dashboard";
}
$halaman = [
    "dashboard" => "pages/dashboard.php",
    "produk" => "pages/produk.php",
    "orders" => "pages/orders.php",
    "costumers" => "pages/costumers.php",
    "reports" => "pages/reports.php",
    "integrations" => "pages/integrations.php",
    "addproduct" => "pages/formaddproduct.php",
    "editproduct" => "pages/editdataproduct.php"
];
if(isset($halaman[$page])){
    require $halaman[$page];
}else{
    echo "<h2>Halaman tidak ditemukan</h2>";
}

?>