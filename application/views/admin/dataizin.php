<style type="text/css">
.col-sm-9{
  margin-top: -450px;
}
</style>
<!-- <div id="container"> -->
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="container">
     <h3>Izin angkutan</h3>
     <div style="overflow-y: scroll; height:250px;">
       <table class="table table-hover">
        <thead>
          <tr>
            <th>nik</th>
            <th>nama</th>
            <th>tahun mobil</th>
            <th>plat no</th>
            <th>status</th>
            <th>ket</th>
            <th><center>aksi</center></th>
          </tr>
        </thead>
        <?php 
        foreach($angkutan as $u){ 
          ?>
          <tr>
            <td><?php echo $u->nik ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->mobil_keluaran ?></td>
            <td><?php echo $u->plat_no ?></td>
            <td><?php echo $u->status ?></td>
            <td><?php echo $u->pesan ?></td>
            <td>
                <center>
                   <a href="<?php echo base_url()."dashboard/izinsetuju/".$u->id; ?>">persetujuan</a>
                </center>
              </td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <br>
      <div style="overflow-y: scroll; height:250px;">
        <h3>Izin ruang terbuka hijau</h3>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>nik</th>
              <th>nama</th>
              <th>instansi</th>
              <!-- <th>plat no</th> -->
              <th>tanggal</th>
              <th>status</th>
              <th>keterangan</th>
              <th><center>aksi</center></th>
              
            </tr>
          </thead>
          <?php 
          foreach($taman as $u){ 
            ?>
            <tr>
              <td><?php echo $u->nik ?></td>
              <td><?php echo $u->nama ?></td>
              <td><?php echo $u->instansi ?></td>
              <td><?php echo $u->tanggal ?></td>
              <td><?php echo $u->status ?></td>
              <td><?php echo $u->ket ?></td>
              <td>
                <center>
                   <a href="<?php echo base_url()."dashboard/izintaman/".$u->id; ?>">persetujuan</a>
                </center>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </main>