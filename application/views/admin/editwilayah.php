<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>Tambah Informasi</h2><hr/>
			<form action="<?php echo base_url().'dashboard/proseseditwilayah' ?>" method="post" enctype="multipart/form-data" >
				<?php foreach($user as $u){ ?>
				<input type="text" name="no"  value="" hidden="<?php echo $u->id_wilayah; ?>" ><br/>
				<input type="text" name="nama" class="form-control" value="<?php echo $u->nama; ?>" placeholder="nama wilayah" required/><br/>
				<textarea id="ckeditor" name="isi" class="form-control" required><?php echo $u->isi; ?></textarea><br/>
				<?php } ?>
				<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
			</form>
		</div>
	</div>
</main>
<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>
<script>
  $('#filinput').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
 </script>