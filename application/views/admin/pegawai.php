<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<div style="overflow-y: scroll; height:250px;">
			<table class="table table-hover" >
				<thead>
					<tr>
						<th>nik</th>
						<th>nama</th>
						<th>alamat</th>
						<th>no hp</th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<?php 
				foreach($user as $u){ 
					?>
					<tr>
						<td><?php echo $u->nik; ?></td>
						<td><?php echo $u->nama; ?></td>
						<td><?php echo $u->alamat; ?></td>
						<td><?php echo $u->no_hp; ?></td>
						<td>
							<center>
								<a href="<?php echo base_url()."dashboard/hapuspetugas/".$u->id_petugas; ?>">hapus</a>
							</center>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<br>
			<form action="<?php echo base_url().'dashboard/tambahpetugas' ?>" method="post">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="">nama dan  nik</span>
					</div>
					<input type="text" class="form-control" name="nama">
					<input type="text" class="form-control" name="nik">
				</div>
				<br>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="">alamat dan  no hp</span>
					</div>
					<input type="text" class="form-control" name="alamat">
					<input type="text" class="form-control" name="hp">
				</div>
				<br>
				<!-- <input type="text" name="nopol" class="form-control" placeholder="nopol" required ><br/> -->
				<button class="btn btn-primary btn-lg" type="submit">submit</button>
			</form>
		</div>
	</main>