<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<div style="overflow-y: scroll; height:450px;">
			<table class="table table-hover" >
				<thead>
					<tr>
						<th>judul penaduan</th>
						<th>isi pengaduan</th>
						<th>tanggal</th>
					</tr>
				</thead>
				<?php 
				foreach($user as $u){ 
					?>
					<tr>
						<td><?php echo $u->obj_pengaduan; ?></td>
						<td><?php echo $u->isi; ?></td>
						<td><?php echo $u->tanggal; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</main>