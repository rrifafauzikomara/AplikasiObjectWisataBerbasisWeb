 <?php foreach($dt_lokasi as $u){ ?>
<head>
<script>
var form = document.getElementById("form-id");
document.getElementById("your-id").addEventListener("click", function () {
  form.submit();
});
</script>
</head>
 <div class="modal-dialog">
                                    <div class="modal-content">
                                  <form id="form-id" action="http://localhost/bulukumba/index.php/data_lokasi/simpanlokasi" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="tambahLabel">Edit Lokasi</h4>
                                        </div>
                                        <div class="modal-body">
                                        <input type="hidden" name="id_lokasi" value="<?php echo $u->id_lokasi; ?>">
                                        <div class="form-group">
                                            <label>Nama Lokasi</label>
                                            <div class="box-body pad">
                                         <textarea id="nama_lokasi" name="nama_lokasi" class="form-control" type="text" rows="1" cols="73" required><?php echo $u->nama_lokasi; ?></textarea>
                                         </div>
                                        </div><div class="form-group">
                                            <label>Garis Lintang</label>
                                            <div class="box-body pad">
                                         <textarea id="garis_lintang" name="garis_lintang" class="form-control" type="text" rows="1" cols="73" required><?php echo $u->garis_lintang; ?></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Garis Bujur</label>
                                            <div class="box-body pad">
                                         <textarea id="garis_bujur" name="garis_bujur"  class="form-control" type="text" rows="1" cols="73" required><?php echo $u->garis_bujur; ?></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Informasi</label>
                                            <div class="box-body pad">
                                         <textarea id="informasi" name="informasi" class="form_control" type="text" rows="1" cols="73" required><?php echo $u->informasi; ?></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                         <input id="gambar" name="gambar" class="form-control" type="file" rows="1" cols="73" required>
                                         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button id="your-id" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            
                            <?php } ?>