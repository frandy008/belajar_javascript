          <div class="card">
            <div class="card-header bg-success text-white">
              Input Data
            </div>
            <div class="card-body">
              <form method="post" class="form-user">
                <!-- Select Basic -->
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-4 control-label" for="meja">Meja</label>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">                     
                      <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                    </div>
                    
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-4 control-label" for="input"></label>
                    <div class="col-md-4">
                      <button id="input" name="input" class="btn btn-primary">Input</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <script type="text/javascript">
          $(document).ready(function(){
            $("#input").click(function(){
              var data = $('.form-user').serialize();
              $.ajax({
                type: 'POST',
                url: "simpan.php",
                data: data,
                success: function() {
                  $('.isi-content').load("home.php");
                }
              });
            });
          });
          </script>