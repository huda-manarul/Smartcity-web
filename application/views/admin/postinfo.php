<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>Tambah Informasi</h2><hr/>
			<form action="<?php echo base_url().'dashboard/prosestamabahinformasi' ?>" method="post" enctype="multipart/form-data" >
				<input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="gambar" id="filinput">
						<label class="custom-file-label" for="customFile"></label>
					</div>
				</div>
				<textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
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