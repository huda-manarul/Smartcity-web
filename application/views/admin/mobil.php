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
						<th>nopol</th>
						<th>petugas</th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<?php 
				foreach($user as $u){ 
					?>
					<tr>
						<td><?php echo $u->nopol; ?></td>
						<td><?php echo $u->id_petugas; ?></td>
						<td>
							<center>
								<a href="<?php echo base_url()."dashboard/editmobil/".$u->id_mobil; ?>">edit</a> || <a href="<?php echo base_url()."dashboard/hapusmobil/".$u->id_mobil; ?>">hapus</a>
							</center>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<br>
			<form action="<?php echo base_url().'dashboard/tambahmobil' ?>" method="post">
				<input type="text" name="nopol" class="form-control" placeholder="nopol" required ><br/>
				<select class="form-control " name="petugas">
					<?php foreach($petugas as $u){ ?>
					<option value="<?php echo $u->id_petugas; ?>"><?php echo $u->nama; ?></option>
					<?php } ?>
				</select><br>
				<button class="btn btn-primary btn-lg" type="submit">submit</button>
			</form>
		</div>
	</main>