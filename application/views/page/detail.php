<!DOCTYPE html>
<html lang="en">

<style>
    p {
        font-family: cursive;
    }

    li {
        font-family: cursive;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Baju</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #85C1E9 ">
        <img src="<?php echo base_url(); ?>/assets/images/daelle.png" width="70" height="50" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>

                <a class="nav-item nav-link" href="#">Terms & Conditions</a>

            </div>
        </div>
    </nav>
    <div class="container">
        <center>
            <br>
            <h1>Produsen Busana Muslim</h1>
            <h2>Daelle Fashion</h2>
            <br>
        </center>
        <div class="row">


            <div class="col-md-12 col-sm-12">
                <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="card-img-top" alt="...">

            </div>

            <div class="col-md-12 col-sm-12">
                <br>
                <p>Bismillahirrohmanirrohim Assalamu’alaikum bunda</p>
                <p>Daelle Fashion adalah produsen busana muslim yang menyediakan beragam fashion muslim kekinian dan trendi untuk bunda.</p>
                <p><b>Kenapa Harus Daelle Fashion?</b></p>
                <p>Karna dengan Daelle Fashion bunda bisa reques ukuran seperti yang bunda inginkan, jadi tidak perlu lagi khawatir soal baju yang kebesaran, kepanjangan ataupun kekecilan.</p>
                <br>
            </div>
        </div>
        <div class="card container" style="width: 18rem;">
            <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="card-img-top" alt="...">
            <div class="card-body">

            </div>
        </div>
        <br>
        <p>Kini ada gamis terbaru dari Daelle Fashion dengan model yang casual dan elegan, simple gak ribet tp pastinya tetap terlihat anggun yang cocok bunda pakai ke acara resmi ataupun santai. Dengan kualitas terbaik, dan harga yang terbaik juga tentunya. Banyak juga pilihan warnanya</p>
        <br>
        <div class="card container" style="width: 18rem;">
            <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="card-img-top" alt="...">
            <div class="card-body">

            </div>
        </div>
        <br>
        <center>
            <p>Gamis yang sudah lengkap dengan jilbabnya jadi bunda gak perlu lagi cari” jilbab, mencocokan warna dan lain”. Bunda tinggal pakai tentunya menjadi solusi fashion bunda tanpa harus ribet.</p>


        </center>
        <p><b>Detail Gamis :</b></p>
        <ul>
            <li>Gamis dengan material kain torino. Pastinya bunda sudah gak asing lagi dengan kualitas kain
                torino yang lentur tebal gak nerawang tapi tetap ringan, super dingin dan nyerap keringat
                pastinya nyaman.</li>
            <li>Busui friendly dengan kancing depan</li>
            <li>Wudlu friendly dengan manset dengan 2 kancing bungkus</li>
            <li>Saku kanan</li>
            <li>Tali pita yang fleksibelbisa di sesuaikan dengan badan bunda</li>
            <li>Keliling rok 250cm</li>
            <li>Dan tentunya dengan jahitan yang rapi dan nyaman</li>
        </ul>
        <p><b>Detail Jilbab :</b></p>
        <ul>
            <li>Jilbab memakai kain torino</li>
            <li>Pet antem</li>
            <li>Panjang depan 85cm dan panjang belakang 110cm</li>
        </ul>
        <p><b>Dengan pilihan banyak warna untuk bunda</b></p>
        <div>
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <?php $colors = explode(",", $details['warna']);
                        foreach ($colors as $color) :
                            echo '<li>' . $color . '</li>';
                        endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/' . $details['gambar']); ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <center>
            <br>
            <p>Oiya bunda sebelum order, bunda bisa lihat acuan atau standar size kami</p>
            <div>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Size</th>
                            <th>Lingkar Dada</th>
                            <th>Panjang Badan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">S</td>
                            <td>96 cm</td>
                            <td>133 cm</td>
                        </tr>
                        <tr>
                            <td scope="row">M</td>
                            <td>100 cm</td>
                            <td>135 cm</td>
                        </tr>
                        <tr>
                            <td scope="row">L</td>
                            <td>105 cm</td>
                            <td>138 cm</td>
                        </tr>
                        <tr>
                            <td scope="row">XL</td>
                            <td>110 cm</td>
                            <td>140 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Untuk reques ukuran di luar acuan atau setandar size kami bund bisa pre order (PO).</p>
            <p>Estimasi produksi 14 hari.</p>
            <p><b>HARGA</b></p>
            <p><b>Rp. 269.000,-</b></p>
            <p><b>PROMO</b></p>
            <p><b>FREE ONGKIR KE SELURUH PULAU JAWA</b></p>
            <p>Poin – poin yang bisa membuang keraguan untuk belanja online.</p>
            <p>Nih…
                Baca yuk bunda….
            </p>
            <br>
            <p>Lebih lengkapnya klik disini untuk membaca <a href="<?php echo base_url() ?>landing/terms">terms & condition kami.</a></p>
            <p>Jika bunda masih ragu bunda bisa order lewat akun shopee kami. Admin kami nanti akan mengirimkan link shopee kami.</p>

        </center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>