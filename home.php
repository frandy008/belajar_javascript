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
            $sd = mysql_query("SELECT * FROM tbl_pesanan WHERE id = '$data[id]'");
            $dpid = mysql_fetch_array($sd);
          ?>
          <!-- Large modal -->
          <div class="modal fade bd-example-modal-lg<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form method="post" class="form-user">
                  <input type="hidden" name="id" value="<?= $dpid['id'] ?>">
                  <!-- Select Basic -->
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-4 control-label" for="meja">Meja</label>
                      <div class="col-md-8">
                        <select id="meja" name="meja" class="form-control">
                          <option value="">Pilih</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- Multiple Checkboxes -->
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-4 control-label" for="minuman">Minuman</label>
                      <div class="col-md-8">
                      <div class="checkbox">
                        <label for="minuman-0">
                          <input type="checkbox" name="minuman[]" id="minuman-0" value="Kopi Hitam">
                          Kopi Hitam
                        </label>
                      </div>
                      <div class="checkbox">
                        <label for="minuman-1">
                          <input type="checkbox" name="minuman[]" id="minuman-1" value="Kopi Susu">
                          Kopi Susu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label for="minuman-2">
                          <input type="checkbox" name="minuman[]" id="minuman-2" value="Teh Manis">
                          Teh Manis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label for="minuman-3">
                          <input type="checkbox" name="minuman[]" id="minuman-3" value="Lemon Tea">
                          Lemon Tea
                        </label>
                      </div>
                      </div>
                    </div>
                  </div>

                  <!-- Multiple Checkboxes -->
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-4 control-label" for="makanan">Makanan</label>
                      <div class="col-md-8">
                        <div class="checkbox">
                          <label for="makanan-0">
                            <input type="checkbox" name="makanan[]" id="makanan-0" value="Nasi Goreng Biasa">
                            Nasi Goreng Biasa
                          </label>
                        </div>
                        <div class="checkbox">
                          <label for="makanan-1">
                            <input type="checkbox" name="makanan[]" id="makanan-1" value="Nasi Goreng Spesial">
                            Nasi Goreng Spesial
                          </label>
                        </div>
                        <div class="checkbox">
                          <label for="makanan-2">
                            <input type="checkbox" name="makanan[]" id="makanan-2" value="Roti Bakar Coklat">
                            Roti Bakar Coklat
                          </label>
                        </div>
                        <div class="checkbox">
                          <label for="makanan-3">
                            <input type="checkbox" name="makanan[]" id="makanan-3" value="Roti Bakar Keju">
                            Roti Bakar Keju
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Textarea -->
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-4 control-label" for="keterangan">Keterangan</label>
                      <div class="col-md-8">                     
                        <textarea class="form-control" id="keterangan" name="keterangan"><?= $dpid['keterangan'] ?></textarea>
                      </div>
                      
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-4 control-label" for="input"></label>
                      <div class="col-md-8">
                        <button id="input" name="input" class="btn btn-primary">Input</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>