<div class="container">
	table class="table table-hover">
        <thead>
          <tr>
            <th>nik</th>
            <th>nama</th>
            <th>tahun mobil</th>
            <th>plat no</th>
            <th>status</th>
            <th>ket</th>
          </tr>
        </thead>
        <?php 
        foreach($user as $u){ 
          ?>
          <tr>
            <td><?php echo $u->nik ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->mobil_keluaran ?></td>
            <td><?php echo $u->plat_no ?></td>
            <td><?php echo $u->status ?></td>
            <td><?php echo $u->pesan ?></td>
          </tr>
          <?php } ?>
        </table>
</div>