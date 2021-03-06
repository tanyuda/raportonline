    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="icon_document_alt"></i> <?php echo $namaCTRL;?></h3>
                                </div>
                        </div>
              <!-- project team & activity end -->

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="<?php echo $url;?>tambah-nilai"><i class="icon_plus_alt2"></i> Tambah Nilai</a>
              <br>
              <br>
              <div class="col-lg-12">
                      <section class="panel">         
                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                 <th>No.</th>
                                 <th><i class="icon_id"></i> NIS Siswa</th>
                                 <th><i class="icon_profile"></i> Nama Siswa</th>
                                 <th><i class="icon_pin_alt"></i> Nama Mata Pelajaran</th>
                                 <th><i class="icon_cogs"></i> Aksi</th>
                              </tr>
                              <tr>
                            <?php if($nilaisiswa) : $no=1;?>
                                <?php foreach ($nilaisiswa as $nilai) :?>
                                 <td><?php echo $no++.'.';?></td>
                                 <td><?php echo $nilai->NIS_SISWA;?></td>
                                 <td><?php echo $nilai->NAMA_SISWA;?></td>
                                 <td><?php echo $nilai->NAMA_MAPEL;?></td>
                                 <td>
                                  <div class="btn-group">
                                      <!--<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>-->
                                      <a class="btn btn-success" href="<?php echo $url;?>edit-nilai/<?php echo $this->enkripsi->safe_b64encode($nilai->ID_NILAI);?>"><i class="icon_check_alt2"></i> Edit</a>
                                      <a class="btn btn-danger" href="<?php echo $url;?>hapus-nilai/<?php echo $this->enkripsi->safe_b64encode($nilai->ID_NILAI);?>"
                                      data-toggle="tooltip" value="delete" class="btn btn-danger" onclick="javascript: return confirm('<?php echo "Hapus Nilai";?>')">
                                      <i class="icon_close_alt2"></i> Hapus</a>
                                  </div>
                                  </td>
                              </tr>
                                <?php endforeach;?>
                                <?php else : ?>
                                    <tr><td colspan='7'>Tidak ada data.</td></tr>
                                <?php endif;?>                  
                           </tbody>
                        </table>
                          <div class="container">                  
                                <ul class="pager">
                                    <?php if($pageLinks) : ?>
                                        <?php foreach($pageLinks as $paging) :?>
                                            <li><?php echo $paging;?></li>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </ul>
                          </div>
                      </section>
                  </div>
          </section>
      </section>
      <!--main content end-->