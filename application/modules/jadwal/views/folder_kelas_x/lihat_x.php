<head>
     <title>Jadwal | Template</title>
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
                                                  href="<?php echo base_url('jadwal/kelas_x'); ?>">Daftar Kelas X</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Jadwal Pelajaran
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <br />

                              <!-- <hr style="margin-left: 20px;margin-right: 20px;"> -->
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 25px;">Data
                                                  </h4>
                                             </div>
                                             <?php
                                                       $no=0+1;
                                                       if ($data_x){
                                                       foreach ($data_x as $d){ 
                                             ?>
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr height="5px">
                                                            <td width="150">Kelas</td>
                                                            <td width="20">:</td>
                                                            <td>
                                                                 <?php echo $d->kelas; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td width="150">Wali Kelas</td>
                                                            <td width="20">:</td>
                                                            <td>
                                                                 <?php echo $d->wali_kelas; ?>
                                                            </td>
                                                       </tr>
                                                  </tbody>

                                             </table>
                                        </div>

                                        <div class="col-md-6">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 25px;">Another Data
                                                  </h4>
                                             </div>
                                             <div style="overflow: auto;">
                                                  <table class="table table-hover mb-0">
                                                       <tbody>
                                                            <tr>
                                                                 <td width="150">Jumlah Siswa</td>
                                                                 <td width="20">:</td>
                                                                 <td>
                                                                      <?php echo $d->jml_siswa_x; ?>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td width="150">Jumlah Pelajaran</td>
                                                                 <td width="20">:</td>
                                                                 <td>
                                                                      <?php echo $d->jumlah_p; ?>
                                                                 </td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <?php }} else { ?>
                                                  <td class="text-center" colspan="6">No Data</td>
                                                  <?php } ?>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="container-fluid">
                    <div class="card">
                         <div class="col-md-6" style="margin-top: 25px;">
                              <a href="<?php echo base_url('#'); ?>">
                                   <button type="button" style="float: left;"
                                        class=" btn btn-success waves-effect waves-light">
                                        <span class="btn-label"><i class="fa fa-plus"
                                                  style="margin-right: 10px;"></i></span>Add Jadwal
                                   </button>
                              </a>
                              <a href="<?php echo base_url('#'); ?>" target="_blank">
                                   <button type="button" style="float: left;margin-left: 10px;"
                                        class=" btn btn-danger waves-effect waves-light">
                                        <span class="btn-label"><i class="fa fa-download"
                                                  style="margin-right: 10px;"></i></span>Download Jadwal
                                   </button>
                              </a>
                         </div>
                         <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                              <div class="row">
                                   <table class="table table-hover mb-0">
                                        <thead>
                                             <tr>
                                                  <th class="align-middle" scope="col" style="width: 1px;">No
                                                  </th>
                                                  <th class="align-middle" scope="col" style="width: 160px;">
                                                       Nama Pelajaran</th>
                                                  <th class="align-middle" scope="col" style="width: 160px;">
                                                       Guru Pengampu</th>
                                                  <th class="align-middle" scope="col" style="width: 160px;">
                                                       Jam Pelajaran</th>
                                                  <th class="align-middle" scope="col" style="width: 1px;">
                                                       Action
                                                  </th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <!-- <?php
                                                       $no=0+1;
                                                       if ($data_x){
                                                       foreach ($data_x as $d){ 
                                                  ?> -->
                                             <tr class="fw-normal">
                                                  <td class="align-middle">
                                                       <!-- <?php echo $no++; ?> -->
                                                  </td>
                                                  <td class="align-middle">
                                                       <!-- <?php echo $d->kelas; ?> -->
                                                  </td>
                                                  <td class="align-middle">
                                                       <!-- <?php echo $d->wali_kelas; ?> -->
                                                  </td>
                                                  <td class="align-middle">
                                                       <!-- <?php echo $d->jumlah_p; ?> -->
                                                  </td>
                                                  <!-- <td class="align-middle">
                                                            <a href="<?php echo url(1) .'/lihat_x/'. enkrip($d->id_x); ?>"
                                                                 data-mdb-toggle="tooltip"
                                                                 class="fas fa-eye text-success me-3" title="Detail">
                                                            </a>

                                                            <a style="margin-left: 10px;"
                                                                 href="<?php echo url(1) .'/hapus_x/'. enkrip($d->id_x); ?>"
                                                                 data-mdb-toggle="tooltip" title="Remove"
                                                                 onclick="return confirm('Yakin hapus kelas <?php echo $d->id_x; ?>?')"><i
                                                                      class="fas fa-trash-alt text-danger"></i></a>
                                                       </td> -->
                                             </tr>
                                        </tbody>
                                        <!-- <?php }} else { ?>
                                             <td class="text-center" colspan="6">No Data</td>
                                             <?php } ?> -->
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
</div>