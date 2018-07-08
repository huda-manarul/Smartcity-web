<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<form action="<?php echo base_url().'dashboard/updatemobil' ?>" method="post">
			<?php foreach($user as $u){ ?>
			<input type="text" name="id" hidden=""  value="<?php echo $u->id_mobil; ?>" ><br/>
			<input type="text" name="nopol" class="form-control" placeholder="nopol" required value="<?php echo $u->nopol; ?>" ><br/>
			<?php } ?>
			<select class="form-control " name="petugas">
				<?php foreach($petugas as $u){ ?>
				<option value="<?php echo $u->id_petugas; ?>"><?php echo $u->nama; ?></option>
				<?php } ?>
			</select><br>
			<button class="btn btn-primary btn-lg" type="submit">submit</button>
		</form>
	</div>
</main>