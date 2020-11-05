 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>
     <ul class="navbar-nav ml-auto">

         <li class="nav-item">
             <a class="nav-link logout" role="button">
                 <i class="fas fa-door-open"></i>
             </a>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->

 <script>
     $(document).ready(function() {
         $(document).on('click', '.logout', function() {
             var res = confirm('Apakah yakin mau keluar?');
             if (res == true) {
                 $.ajax({
                     url: '<?= base_url() ?>login/logout',
                     success: function() {
                         location.reload();
                     }
                 })
             }
         })
     })
 </script>