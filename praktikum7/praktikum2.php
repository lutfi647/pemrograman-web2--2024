<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Praktikum 2</h2>

<div class="container">
        <h2>Form Belanja</h2>
        <form method="post">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

<?php
if (isset($_POST['submit'])) {
    // Menangkap input data
    $name = $_POST['name'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $tv = 4200000 * $jumlah;
    $kulkas = 3100000 * $jumlah;
    $mesin_cuci = 3800000 * $jumlah;

    echo "Nama Customer : " . $name;
    echo "<br>Produk Pilihan : " . $produk;
    echo "<br>Jumlah Produk : " . $jumlah;
    
    switch ($produk) {
        case "TV" :
            echo "<br>Total Belanja : " . $tv;
            break;
        case "KULKAS" :
            echo "<br>Total Belanja : " . $kulkas;
            break;
        case "MESIN CUCI" :
            echo "<br>Total Belanja : " . $mesin_cuci;
            break;        

    }


}
?>

<?php
require_once 'footer.html';

?>