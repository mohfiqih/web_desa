<head>
     <title>Add Kelas X | SIAAP</title>
</head>

<div class="main-panel">
     <div class="content">
          <div class="content-page"><br />
               <div class="content">
                    <div class="container-fluid">
                         <div>
                              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                   aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page"><a
                                                  href="<?php echo base_url('jadwal/kelas_x'); ?>">Kelas X</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Kelas X
                                        </li>
                                   </ol>
                              </nav>
                         </div>

                         <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_x")); ?>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="card">
                                        <div class="card-body">
                                             <div class="form-floating mb-3">
                                                  <label for="example-select-floating">Pilih Kelas</label>
                                                  <select class="form-control" name="kelas"
                                                       aria-label="Floating label select example" required>
                                                       <option value="">Kelas</option>
                                                       <option value="X MIPA 1" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 1</option>
                                                       <option value="X MIPA 2" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 2</option>
                                                       <option value="X MIPA 3" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 3</option>
                                                       <option value="X MIPA 4" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 4</option>
                                                       <option value="X MIPA 5" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 5</option>
                                                       <option value="X MIPA 6" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 6</option>
                                                       <option value="X MIPA 7" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 7</option>
                                                       <option value="X MIPA 8" <?php if (uri(1) == "tambah_x") ?>>
                                                            X MIPA 8</option>
                                                  </select>

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <label>Wali Kelas</label>
                                                  <input type="text" class="form-control" name="wali_kelas"
                                                       placeholder="Wali Kelas" autocomplete="off" required>

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <label>Jumlah Mata Pelajaran</label>
                                                  <input type="text" class="form-control" name="jumlah_p"
                                                       placeholder="Jumlah Mata Pelajaran" required>
                                             </div>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-success third">Add</button>
                                                  <a href="<?php echo base_url("jadwal/kelas_x"); ?>">
                                                       <button type="button" class="btn btn-danger">Cancel</button>
                                                  </a>
                                             </div>
                                        </div><!-- end col -->
                                   </div>
                              </div>
                              </form>
                              <?php echo form_close(); ?>
                              <!-- <div class="col-md-8">
                                        <div class="card">
                                             <div class="card-body">
                                                  <div class="col-12">
                                                       <div class="form-control" style="height: 200px;">
                                                            <label for="example-select-floating">Jadwal
                                                                 PDF</label><br />
                                                            <input type="file" name="judul[]">
                                                            <center>
                                                                 <div class="dz-message needsclick">
                                                                      <i
                                                                           class="h1 text-muted dripicons-cloud-upload"></i>
                                                                      <h3>Drop files here or click to upload.</h3>
                                                                      <span class="text-muted font-13">(Type berkas gif,
                                                                           jpg, png,
                                                                           pdf,
                                                                           doc,
                                                                           docx,
                                                                           xlsx, zip, rar)
                                                                 </div>
                                                            </center>
                                                       </div>
                                                  </div><br />
                                                  <div class="text-center">
                                                       <button type="submit" class="btn btn-success third">Add</button>
                                                       <a href="<?php echo base_url("jadwal/kelas_x"); ?>">
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> -->
                         </div>
                         </form>
                    </div>
                    </form>

                    <!-- end row -->
               </div>
          </div>
     </div>
</div>