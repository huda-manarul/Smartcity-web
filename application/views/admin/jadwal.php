<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<h2>Informasi Pengelolaan Sampah</h2><br>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>wilayah</th>
					<th>senin</th>
					<th>selasa</th>
					<th>rabu</th>
					<th>kamis</th>
					<th>jumat</th>
					<th>mobil</th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php 
			foreach($user as $u){ 
				?>
				<tr>
					<td><?php echo "wilayah ".$u->id_wilayah ?></td>
					<td><?php echo $u->senin ?></td>
					<td><?php echo $u->selasa ?></td>
					<td><?php echo $u->rabu ?></td>
					<td><?php echo $u->kamis ?></td>
					<td><?php echo $u->jumat ?></td>
					<td><?php echo "mobil ".$u->id_mobil ?></td>
					<td>
						<center>
							 <a href="<?php echo base_url().'dashboard/tambahjadwal' ?>">tulis</a> || <a href="<?php echo base_url()."dashboard/editjadwal/".$u->no; ?>">edit</a> || <a href="<?php echo base_url()."dashboard/hapusjadwal/".$u->no; ?>">hapus</a>
						</center>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</main>