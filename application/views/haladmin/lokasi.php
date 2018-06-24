<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lokasi</title>
    <script>
            function edit_lokasi_popup(lokasi_id)
   {
       //alert(lokasi_id);


      $.ajax
      ({
          url   : "<?php echo    base_url('index.php/data_lokasi/editlokasi/');?>",
          type  : 'POST',
          data  :{lokasi_id : lokasi_id},
          success: function(data)
          {
                $('#myModal1').html(data);
                $('#myModal1').modal({
                    backdrop: 'static',
                    keyboard: false 
                });
           }
       });
  }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url();?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Selamat Datang Admin <br>Objek Wisata Kabupaten Bulukumba</div>
    <div class="address-bar">“Butta Panrita Lopi"</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Objek Wisata Kabupaten Bulukumba</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url()?>index.php/admin">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/c_kontak_forum">Kontak Forum</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>index.php/data_lokasi">Lokasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        

                        

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Objek Wisata Kabupaten Bulukumba</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Sulawesi Selatan</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lokasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                                        <tr>
                                            <th><div align="center">No.</div></th>
                                            <th><div align="center">Nama Lokasi</div></th>
                                            <th><div align="center">Garis Lintang</div></th>
                                            <th><div align="center">Garis Bujur</div></th>
                                            <th><div align="center">Informasi</div></th>
                                            <th><div align="center">Gambar</div></th>
                                            <th><div align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="top" title="Tambah">Tambah</div></button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                          if(isset($data_lokasi)){
                                                foreach($data_lokasi as $row){
                                            ?>
                                        <tr>
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                            <td><div align="center"><?php echo $row->nama_lokasi; ?></div></td>
                                            <td><div align="center"><?php echo $row->garis_lintang; ?></div></td>
                                            <td><div align="center"><?php echo $row->garis_bujur; ?></div></td>
                                            <td><div align="center"><?php echo $row->informasi; ?></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->gambar) ?>" width="200px" height="150px"></div></td>
                                            <td class="center"><div align="center">
                            <a onclick="edit_lokasi_popup(<?php echo $row->id_lokasi;?>);" type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete" href="<?php echo site_url('data_lokasi/hapus/'.$row->id_lokasi)?>" onclick="return confirm('Anda Yakin ?');"><i class="fa fa-times"></i>
                            </a></div></td>
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
                          <?php echo form_open_multipart('data_lokasi/tambah')?>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="tambahLabel">Tambah</h4>
                                        </div>
                                        <div class="modal-body">

                                        <div class="form-group">
                                            <label>Nama Lokasi</label>
                                            <div class="box-body pad">
                                         <textarea id="nama_lokasi" name="nama_lokasi" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div><div class="form-group">
                                            <label>Garis Lintang</label>
                                            <div class="box-body pad">
                                         <textarea id="garis_lintang" name="garis_lintang" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Garis Bujur</label>
                                            <div class="box-body pad">
                                         <textarea id="garis_bujur" name="garis_bujur" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Informasi</label>
                                            <div class="box-body pad">
                                         <textarea id="informasi" name="informasi" class="form_control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                         <input id="gambar" name="gambar" class="form-control" type="file" rows="1" cols="73" required>
                                         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                                    </div>

                                    <?php echo form_open_multipart('data_lokasi/tambah')?>
                                   <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="myModal1"></div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
