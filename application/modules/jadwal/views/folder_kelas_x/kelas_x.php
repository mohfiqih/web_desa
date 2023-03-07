<head>
     <title>Kelas X | Template</title>
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
                                        <li class="breadcrumb-item active" aria-current="page">Daftar Kelas X
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <div class="col-md-6" style="margin-top: 20px;">
                                   <a href="<?php echo base_url('jadwal/add_x'); ?>">
                                        <button type="button" style="float: left;"
                                             class=" btn btn-success waves-effect waves-light">
                                             <span class="btn-label"><i class="fa fa-plus"
                                                       style="margin-right: 10px;"></i></span>Add
                                        </button>
                                   </a>
                                   <a href="<?php echo base_url('jadwal/export_x'); ?>" target="_blank">
                                        <button type="button" style="float: left;margin-left: 10px;"
                                             class=" btn btn-danger waves-effect waves-light">
                                             <span class="btn-label"><i class="fa fa-download"
                                                       style="margin-right: 10px;"></i></span>Export
                                             PDF
                                        </button>
                                   </a>
                              </div>
                              <div class="row">
                                   <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                                        <table id="myTable" class="table table-hover mb-0">
                                             <thead>
                                                  <tr>
                                                       <th class="align-middle" scope="col" style="width: 1px;">No
                                                       </th>
                                                       <th class="align-middle" scope="col" style="width: 160px;">
                                                            Kelas</th>
                                                       <th class="align-middle" scope="col" style="width: 160px;">
                                                            Wali Kelas</th>
                                                       <th class="align-middle" scope="col" style="width: 160px;">
                                                            Jumlah Mata Pelajaran</th>
                                                       <th class="align-middle" scope="col" style="width: 160px;">
                                                            Jumlah Siswa</th>
                                                       <th class="align-middle" scope="col" style="width: 100px;">
                                                            Action
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                       $no=0+1;
                                                       if ($data_x){
                                                       foreach ($data_x as $d){ 
                                                  ?>
                                                  <tr class="fw-normal">
                                                       <td class="align-middle">
                                                            <?php echo $no++; ?>
                                                       </td>
                                                       <td class="align-middle">
                                                            <?php echo $d->kelas; ?>
                                                       </td>
                                                       <td class="align-middle">
                                                            <?php echo $d->wali_kelas; ?>
                                                       </td>
                                                       <td class="align-middle">
                                                            <?php echo $d->jumlah_p; ?>
                                                       </td>
                                                       <td class="align-middle">
                                                            <?php echo $d->jml_siswa_x; ?>
                                                       </td>
                                                       <td class="align-middle">
                                                            <a style="text-decoration: none;margin-left: 10px;"
                                                                 href="<?php echo url(1) .'/lihat_x/'. enkrip($d->id_x); ?>"
                                                                 data-mdb-toggle="tooltip"
                                                                 class="fas fa-eye text-success me-3" title="Detail">
                                                            </a>

                                                            <a style="margin-left: 10px;"
                                                                 href="<?php echo url(1) .'/edit_x/'. enkrip($d->id_x); ?>"
                                                                 data-mdb-toggle="tooltip" title="Remove"
                                                                 onclick="return confirm('Yakin hapus kelas <?php echo $d->id_x; ?>?')"><i
                                                                      class="fas fa-edit text-warning"></i></a>

                                                            <a style="margin-left: 10px;"
                                                                 href="<?php echo url(1) .'/hapus_x/'. enkrip($d->id_x); ?>"
                                                                 data-mdb-toggle="tooltip" title="Remove"
                                                                 onclick="return confirm('Yakin hapus kelas <?php echo $d->id_x; ?>?')"><i
                                                                      class="fas fa-trash-alt text-danger"></i></a>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                             <?php }} else { ?>
                                             <td class="text-center" colspan="6">No Data</td>
                                             <?php } ?>
                                        </table>
                                   </div>
                              </div>
                         </div>
                         </center>
                    </div>
               </div>
          </div>
     </div>
</div>
</div>