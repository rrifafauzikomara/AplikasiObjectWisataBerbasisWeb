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
                                  <form id="form-id" action="http://localhost/bulukumba/index.php/c_kontak_forum/simpankomentar" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="tambahLabel">Balas Komentar</h4>
                                        </div>
                                        <div class="modal-body">
                                        <input type="hidden" name="id_cf" value="<?php echo $u->id_cf; ?>">
                                        <div class="form-group">
                                            <label>Komentar</label>
                                            <div class="box-body pad">
                                         <textarea id="komentar" name="komentar" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
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