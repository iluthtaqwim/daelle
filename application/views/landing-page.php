<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Baju</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    html,
    body {
        height: 100%;
    }

    #page-content {
        flex: 1 0 auto;
    }

    #sticky-footer {
        flex-shrink: none;
    }

    /* Other Classes for Page Styling */

    body {

        background: linear-gradient(to right, white, whitesmoke);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #85C1E9 ">
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
    </nav>
    <div>
        <center>
            <br>
            <h2>Produsen Busana Muslim</h2>
            <h3>Daelle Fashion</h3>
            <br>
            <div class="container">
                <?php foreach ($get_all as $get) : ?>
                    <div class="">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url('uploads/' . $get->gambar) ?>" width="50" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $get->nama_produk ?></h4>
                            </div>
                        </div>
                        <br>
                        <a href="<?php echo base_url('landing/detail/') . $get->id_produk ?>"><button type="button" class="btn btn-outline-primary">Lihat Detail</button></a>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
        </center>

    </div>
    <br>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
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
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>