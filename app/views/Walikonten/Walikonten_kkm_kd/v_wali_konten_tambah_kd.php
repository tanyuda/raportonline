<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="icon_document_alt"></i><?php echo $namaCTRL;?></h3>
					<ol class="breadcrumb">
                                            <li><i class="icon_documents"></i><a href="<?php echo $url;?>listsiswa"><?php echo $breadcrumb;?></a></li>					  	
					</ol>
				</div>
			</div>
              <!-- project team & activity end -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <?php echo $namaCTRL;?> 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" action="<?php echo $url;?>tambah-kd" method="post">

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Jenis Kopetensi Dasar</label>
                                      <div class="col-sm-7">
                                          <p><?php echo $validasi->errorMessages('nissiswa', '<p style="color:red">', '</p>');?></p>
                                 <!-- Dropdown Jenis KD --> <input type="text" value="<?php echo $validasi->value('nissiswa');?>" name="nissiswa" class="form-control round-input">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nomor Kopetensi Dasar</label>
                                      <div class="col-sm-7">
                                          <p><?php echo $validasi->errorMessages('id_orangtua', '<p style="color:red">', '</p>');?></p>
                                          <input id="id_orangtua" name="id_orangtua" type="text" placeholder="Masukan NIK Ayah atau Ibu Siswa" class="form-control round-input">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nama</label>
                                      <div class="col-sm-7">
                                           <p><?php echo $validasi->errorMessages('nama_siswa', '<p style="color:red">', '</p>');?></p>
                                          <input type="text" value="<?php echo $validasi->value('nama_siswa');?>" name="nama_siswa" class="form-control round-input">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Tempat Lahir</label>
                                      <div class="col-sm-7">
                                          <p><?php echo $validasi->errorMessages('tempat_lahir_siswa', '<p style="color:red">', '</p>');?></p>
                                          <input type="text" value="<?php echo $validasi->value('tempat_lahir_siswa');?>" name="tempat_lahir_siswa" class="form-control round-input">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Taggal Lahir</label>
                                      <div class="col-sm-7">
                                          <p><?php echo $validasi->errorMessages('tgl_lahir_siswa', '<p style="color:red">', '</p>');?></p>
                                          <input type="text" value="<?php echo $validasi->value('tgl_lahir_siswa');?>" name="tgl_lahir_siswa" placeholder="Contoh format tanggal yang benar 1969-03-16" class="form-control round-input">
                                      </div>
                                  </div>
                                                                                                 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label"></label>
                                      <div class="col-sm-7">
                                    <td>
                                        <button <a class="btn btn-primary" name="login" type="submit" value="submit">Simpan</a></button>
                                        <button <a class="btn btn-danger" name="reset" type="reset" value="reset">Reset</a></button>
                                    </td>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <!--<section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group has-success">
                                      <label class="control-label col-lg-2" for="inputSuccess">Input with success</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputSuccess">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="control-label col-lg-2" for="inputWarning">Input with warning</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputWarning">
                                      </div>
                                  </div>
                                  <div class="form-group has-error">
                                      <label class="control-label col-lg-2" for="inputError">Input with error</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputError">
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section> -->
                      <!--<section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Control sizing</label>
                                      <div class="col-lg-10">
                                          <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                                          <input class="form-control m-bot15" type="text" placeholder="Default input">
                                          <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">

                                          <select class="form-control input-lg m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                          <select class="form-control m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                          <select class="form-control input-sm m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section> -->
                      <!--section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
                                      <div class="col-lg-10">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                          </div>

                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great option one
                                              </label>
                                          </div>

                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Option two can be something else and selecting it will deselect option one
                                              </label>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Inline checkboxes</label>
                                      <div class="col-lg-10">
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                          </label>
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                          </label>
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                          </label>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Selects</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>

                                          <select multiple class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Column sizing</label>
                                      <div class="col-lg-10">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <input type="text" class="form-control" placeholder=".col-lg-2">
                                              </div>
                                              <div class="col-lg-3">
                                                  <input type="text" class="form-control" placeholder=".col-lg-3">
                                              </div>
                                              <div class="col-lg-4">
                                                  <input type="text" class="form-control" placeholder=".col-lg-4">
                                              </div>
                                          </div>

                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>-->
                  </div>
              </div>

          </section>
      </section>
      <!--main content end-->