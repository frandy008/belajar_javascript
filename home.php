          <div class="card">
            <div class="card-header bg-success text-white">
              Data Pesanan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Meja No</th>
                      <th>Minuman</th>
                      <th>Makanan</th>
                      <th>Keterangan</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    mysql_connect('localhost','root','');
                    mysql_select_db('db_no_refresh');
                    $q = mysql_query("SELECT * FROM tbl_pesanan");
                    $no=1;
                    while ($dp = mysql_fetch_array($q)) {
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td>Meja <?php echo $dp['meja'] ?></td>
                      <td><?php echo $dp['minuman'] ?></td>
                      <td><?php echo $dp['makanan'] ?></td>
                      <td><?php echo $dp['keterangan'] ?></td>
                      <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg<?= $dp['id'] ?>">Edit</a> / Hapus</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <?php  
          $sdp = mysql_query("SELECT * FROM tbl_pesanan");
          while ($data = mysql_fetch_array($sdp)) { 
          ?>
          <!-- Large modal -->
          <div class="modal fade bd-example-modal-lg<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                </div>
              </div>
            </div>
          </div>
          <?php } ?>