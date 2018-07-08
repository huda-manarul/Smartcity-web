<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<form action="<?php echo base_url().'dashboard/prosestambahjadwal' ?>" method="post">
			<select class="form-control " name="wilayah">
				<?php foreach($wilayah as $u){ ?>
				<option value="<?php echo $u->id_wilayah; ?>"><?php echo $u->nama; ?></option>
				<?php } ?>
			</select>
			<br>
			<input type="text" name="senin" class="form-control" placeholder="senin" required ><br/>
			<input type="text" name="selasa" class="form-control" placeholder="selasa" required ><br/>
			<input type="text" name="rabu" class="form-control" placeholder="rabu" required ><br/>
			<input type="text" name="kamis" class="form-control" placeholder="kamis" required ><br/>
			<input type="text" name="jumat" class="form-control" placeholder="jumat" required ><br/>
			<select class="form-control " name="mobil">
				<?php foreach($mobil as $u){ ?>
				<option value="<?php echo $u->id_mobil; ?>"><?php echo $u->nopol; ?></option>
				<?php } ?>
			</select><br>
			<button class="btn btn-primary btn-lg" type="submit">submit</button>
		</form>
	</div>
</main>