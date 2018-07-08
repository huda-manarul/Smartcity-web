<br>
<div class="container">
	<h3>Izin ruang terbuka hijau</h3><br>
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
          </tr>
        </thead>
        <?php 
        foreach($user as $u){ 
          ?>
          <tr>
            <td><?php echo $u->nik ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->instansi ?></td>
            <td><?php echo $u->tanggal ?></td>
            <td><?php echo $u->status ?></td>
            <td><?php echo $u->ket ?></td>
          </tr>
          <?php } ?>
        </table>
</div>