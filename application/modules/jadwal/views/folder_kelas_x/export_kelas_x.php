<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Data Kelas X</title>
</head>
<style>
table {
     border-collapse: collapse;
     width: 100%;
}

table,
th,
td {
     border: 1px solid black;
}

th,
td {
     padding: 5px;
}

th {
     color: black;
}

tr:hover {
     background-color: #f5f5f5;
}
</style>

<body>
     <!-- <div class="container"> -->
     <div class="row">
          <!-- <div class="col-md-6">
               <img width="50" height="50" src="<?php echo base_url('assets/backend/images/phb.png'); ?>" alt="">
          </div> -->
          <div class="col-md-6">
               <center>
                    <p style="line-height: 70%;">Yayasan Pendidikan Angkasa Bangsa</p>
                    <h3 style="line-height: 70%;">SMA NEGERI ANGKASA BANGSA</h3>
                    <!-- <h3 style="line-height: 70%;">Program Studi DIII Teknik Komputer</h3> -->
                    <p style="line-height: 70%;">Kampus I: Jl. Mataram No.9 Tegal 52142 Telp. 0283-352000 Fx.
                         0283-353353</p>
                    <p style="line-height: 70%;">Website: <a style="text-decoration:none;color: black;"
                              href="www.poltektegal.ac.id">www.poltektegal.ac.id</a><span
                              style="margin-left: 20px;">Email: <a style="text-decoration:none;color: black;"
                                   href="tik@poltektegal.ac.id">tik@poltektegal.ac.id</a></span></p>
                    <hr>
                    <hr>
               </center>
          </div>
          <br />
          <div>
               <center>
                    <h3>APPLICATION MANAGERIAL</h3>
               </center>
          </div>
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
                              <!-- <th class="align-middle" scope="col" style="width: 1px;">
                                   Action
                              </th> -->
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
                              <!-- <td class="align-middle">
                                   <a href="" data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                        title="Detail">
                                   </a>

                                   <a style="margin-left: 10px;"
                                        href="<?php echo url(1) .'/hapus_x/'. enkrip($d->id_x); ?>"
                                        data-mdb-toggle="tooltip" title="Remove"
                                        onclick="return confirm('Yakin hapus kelas <?php echo $d->id_x; ?>?')"><i
                                             class="fas fa-trash-alt text-danger"></i></a>
                              </td> -->
                         </tr>
                    </tbody>
                    <?php }} else { ?>
                    <td class="text-center" colspan="6">No Data</td>
                    <?php } ?>
               </table>
          </div>
          <br />
          <div style="margin-left: 870px;">
               <p style="line-height: 70%;">Tegal,</p>
               <p style="line-height: 70%;">Kepala Sekolah</p><br /><br />
               <u style="line-height: 70%;">Moh. Fiqih Erinsyah, M.Kom.</u>
               <p style="line-height: 70%;">NIP.20938190</p>
          </div>
     </div>
     </div>
</body>

</html>