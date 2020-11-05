<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Data seluruh produk</h3> -->
                            <button style="float:right;" type="button" onclick="addFunction()" class="btn btn-primary">Tambah Produk</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datatable" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama</th>
                                        <th>Size</th>
                                        <th>Warna</th>
                                        <th>Foto</th>
                                        <th>Tanggal Upload</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="produk">

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal edit-->
<div class="modal fade" id="modelEdit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" method="post" enctype="multipart/form-data">
                    <input type="text" name="id_produk" hidden id="id_produk">
                    <div class="form-group">
                        <label for="">Kode Produk</label>
                        <input type="text" name="kode_produk" id="kode_produk" readonly class="form-control" value="PRD-<?php echo random_string('numeric', 6); ?>" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Nama Produk" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for="">Ukuran</label>
                       
                    </div>
                            <?php foreach ($size as $s) : ?>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="size[]" id="" value="<?php echo $s->size; ?>"><?php echo $s->size; ?>
                                    </label>
                                </div>
                           
                            <?php endforeach; ?>
                     
                            <br>
                    <div class="form-group">
                        <label for="">Warna</label>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="warna[]" id="" value="Biru"> Biru
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="warna[]" id="" value="Merah"> Merah
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="warna[]" id="" value="Kuning"> Kuning
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="warna[]" id="" value="Hitam"> Hitam
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="warna[]" id="" value="Putih"> Putih
                            </label>
                        </div>
                        <div id="dinamic" class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <input type="text" class="form-control" name="warna[]" id="" aria-describedby="helpId" placeholder="">
                                </div>

                            </div>

                        </div>
                        <div class="col-xs-12 col-md-4">
                            <button type="button" id="add" class="btn btn-success btn-lg"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                        <small id="helpId" class="form-text text-muted">Jika tidak ada warna, tambahkan disini</small>
                    </div>

                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" accept="image/*" name="foto" id="foto" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <input type="text" name="foto-lama" id="foto-lama" hidden>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dinamic').append('<div id="row'+i+'" class="row mt-1 mb-1"><div class="col-xs-12 col-md-8"><input type="text" class="form-control" name="warna[]" id="" aria-describedby="helpId" placeholder=""></div><div class="col-xs-12 col-md-4"> <button type = "button" id="'+i+'" class="btn btn-danger btn-lg btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>')
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            var res = confirm('Are You Sure You Want To Delete This?');
            if (res == true) {
                $('#row' + button_id + '').remove();
                $('#' + button_id + '').remove();
            }
        });

   

    tampil_data_barang(); //pemanggilan fungsi tampil barang.

    $('#datatable').dataTable();

    //fungsi tampil barang
    function tampil_data_barang() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>/barang/get_data',
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                var no = 1;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' + '<td>' + no + '</td>' + '<td>' + data[i].kode_produk + '</td>' + '<td>' + data[i].nama_produk + '</td>' + '<td>' + data[i].size + '</td>' + '<td>' + data[i].warna + '</td>' + '<td><img src="<?php echo base_url(); ?>/uploads/' + data[i].gambar + '" height="64px"></td>' + '<td>' + data[i].on_create + '</td>' + '<td><button type="button" class="btn btn-sm btn-warning" onclick="editFunction(' + data[i].id_produk + ')"><i style="color:white" class="fas fa-edit"></i></button> <button type="button" onclick="deleteFunction(' + data[i].id_produk + ')" class="btn btn-sm btn-danger"><i  class="fas fa-trash"></i></button></td>' + '</tr>';
                    no++;
                }
                $('#produk').html(html);
            }
        });
    }
    });
</script>

<script>
    function addFunction() {
        save_method = 'add';
        $('#form').attr('action', '<?= base_url() ?>barang/tambah_Produk');
        $('#form')[0].reset(); // reset form on modals
        $('#modelEdit').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Tambah Data Produk'); // Set title to Bootstrap modal title
    }

    function editFunction(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('#form').attr('action', '<?php echo base_url() ?>barang/edit_produk');

        //Ajax Load data from ajax
        $.ajax({
            url: "<?= base_url() ?>barang/ajax_edit_produk/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#id_produk').val(data.id_produk);
                $('#kode_produk').val(data.kode_produk);
                $('#nama_produk').val(data.nama_produk);
                $('#size').val(data.size).attr("checked", "checked");
                $('#warna').val(data.warna).attr("checked", "checked");;
                $('#foto-lama').val(data.gambar);

                $('#modelEdit').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Data Produk'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });

    }

    function deleteFunction(id) {
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        swal({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?= base_url() ?>barang/hapus_produk/" + id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data) {

                            location.reload();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error deleting data');
                        }
                    });
                    swal("Deleted!", "Data Berhasil Dihapus.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe", "error");
                }
            });
    }
</script>