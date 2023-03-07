<head>
     <title>Kelas XII | Template</title>
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
                                        <li class="breadcrumb-item active" aria-current="page">Kelas XII
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <div class="col-md-6" style="margin-top: 20px;">
                                   <a href="<?php echo base_url('#'); ?>">
                                        <button type="button" style="float: left;"
                                             class=" btn btn-success waves-effect waves-light">
                                             <span class="btn-label"><i class="fa fa-plus"
                                                       style="margin-right: 10px;"></i></span>Add
                                        </button>
                                   </a>
                                   <a href="<?php echo base_url('#'); ?>" target="_blank">
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
                                                       <th class="align-middle" scope="col" style="width: 1px;">
                                                            Action
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody>

                                                  <tr class="fw-normal">
                                                       <th class="align-middle">

                                                       </th>
                                                       <th class="align-middle">

                                                       </th>
                                                       <th class="align-middle">

                                                       </th>
                                                       <th class="align-middle">

                                                       </th>
                                                       <td class="align-middle">
                                                            <a href="" data-mdb-toggle="tooltip"
                                                                 class="fas fa-eye text-success me-3" title="Detail">
                                                            </a>

                                                            <a style="margin-left: 10px;" href=""
                                                                 data-mdb-toggle="tooltip" title="Remove"
                                                                 onclick="return confirm('Yakin hapus data?')"><i
                                                                      class="fas fa-trash-alt text-danger"></i></a>
                                                       </td>
                                                  </tr>
                                             </tbody>
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