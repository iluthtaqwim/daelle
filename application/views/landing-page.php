<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Baju</title>
    <!-- Bootstrap CSS -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
</style>

<body>

    <nav>
        <div class="nav-wrapper brown lighten-3">
            <a href=" #!" class="brand-logo center">
                <img src="<?php echo base_url(); ?>/assets/images/daelle.png" height="64" alt="" srcset="">
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url() ?>landing/terms">Terms & Conditions</a></li>

            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url() ?>landing/terms">Terms & Conditions</a></li>

    </ul>



    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #85C1E9 ">
        <img src="<?php echo base_url(); ?>/assets/images/daelle.png" width="70" height="50" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>

                <a class="nav-item nav-link" href="<?php echo base_url() ?>landing/terms">Terms & Conditions</a>

            </div>
        </div>
    </nav> -->
    <div class="container">
        <center>
            <br>
            <img src="https://png.brdcdn.com/img/1200/bf7s3m5vbf0e3wy3zk/fC9hpF2Ur6QhsDIfL83C05FsjEu4dGTe6JJO9j8PEZlA.png" width="80%" alt="" srcset="">
            <br>
            <p class="flow-text">Assalamu’alaikum Bunda
                Baneska adalah perusahaan industri fashion muslim, yang menyediakan beragam fashion muslim kekinian untuk Bunda.

                Produk yang disediakan berupa Gamis dan Mukena. Dengan keunggulan berupa model terbaru, motif yang cantik dengan design khusus serta Warna yang beragam bisa disesuaikan dengan selera Bunda.
                Dilengkapi dengan harga yang Ekonomis dan Promo-promo menarik lainnya.</p>
            <br>
    </div>

    <div class="brown lighten-2 z-depth-5">
        <div class="row">
            <?php foreach ($get_all as $get) : ?>
                <div style="margin-top: 5%;" class="col s4">
                    <img class="center z-depth-4" src="<?php echo base_url('uploads/' . $get->gambar) ?>" width="50%" alt="">
                    <center>
                        <a class="btn disabled" style="margin-top: -20px;"><?php echo $get->nama_produk ?></a>
                    </center>
                    <br>
                    <center>
                        <a href="<?php echo base_url('landing/detail/') . $get->id_produk ?>"><button type="button" style="color: white;" class="waves-effect waves-brown btn-flat">Lihat Detail</button></a>
                    </center>

                </div>

            <?php endforeach; ?>
        </div>
    </div>
    <div class="black lighten-4">
        <center>
            <div style="margin:20px">
                <img src="https://gif.berduflare.com/gif/bf7s3m5vbf0e3wy3zk/f7QXIUY34GQSiwff7N1tbP4PLrsCLRTVqRlmIYQtZlrw.gif#dc=f5d8d8&w=596&h=574" alt="">
            </div>

        </center>
    </div>
    <div class="brown lighten-5">
        <center>
            <div style="margin:20px">
                <img src="https://png.brdcdn.com/img/1200/bf7s3m5vbf0e3wy3zk/fCj4NFkEDs0bCbJfCdt17ucQEgqCRoSiSvoSuiph7g.png" alt="">
            </div>
        </center>
    </div>
    </center>


    <br>
    <footer class="page-footer brown lighten-3">
        <div class="container">
            <div class="row">
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Telepon : 081228203322</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Email : daellefashion.shop@gmail.com</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Lokasi : Purworejo, Jawa Tengah</a></li>

                        <h5>Sosial Media</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!"> Facebook : </a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"> Instagram: </a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 Copyright Daelle

            </div>
        </div>
    </footer>
    <!-- <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="margin-left:10px">
            <pre style="color: white">
                Telepon  : 081228203322
                Email    : daellefashion.shop@gmail.com
                Lokasi   : Purworejo, Jawa Tengah
                Sosial Media
                Facebook : 
                Instagram:  
            </pre>
        </div>
        <div class="container text-center">

            <small>Copyright &copy; Your Website</small>
        </div>
    </footer> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>
</body>

</html>