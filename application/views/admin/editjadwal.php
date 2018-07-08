<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<form action="<?php echo base_url().'dashboard/proseseditjadwal' ?>" method="post">
			<select class="form-control " name="wilayah">
				<?php foreach($wilayah as $u){ ?>
				<option value="<?php echo $u->id_wilayah; ?>"><?php echo $u->nama; ?></option>
				<?php } ?>
			</select>
			<br>
			<?php foreach($user as $u){ ?>
			<input type="text" name="no"  hidden="" value="<?php echo $u->no ?>">
			<input type="text" name="senin" class="form-control" placeholder="senin" required value="<?php echo $u->senin ?>"><br/>
			<input type="text" name="selasa" class="form-control" placeholder="selasa" required value="<?php echo $u->selasa ?>"><br/>
			<input type="text" name="rabu" class="form-control" placeholder="rabu" required value="<?php echo $u->rabu ?>"><br/>
			<input type="text" name="kamis" class="form-control" placeholder="kamis" required value="<?php echo $u->kamis ?>"><br/>
			<input type="text" name="jumat" class="form-control" placeholder="jumat" required value="<?php echo $u->jumat ?>"><br/>
			<?php } ?>
			<select class="form-control " name="mobil">
				<?php foreach($mobil as $u){ ?>
				<option value="<?php echo $u->id_mobil; ?>"><?php echo $u->nopol; ?></option>
				<?php } ?>
			</select><br>
			<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
		</form>
	</div>

</main>