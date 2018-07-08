<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h2>Edit Informasi</h2><hr/>
		<form action="<?php echo base_url().'dashboard/prosesedittaman' ?>" method="post" enctype="multipart/form-data">
			<?php 
			foreach($user as $u){ 
				?>
				<input type="text" name="id" value="<?php echo $u->id_taman ?>" hidden>
				<input type="text" name="judul" class="form-control" placeholder="Judul berita" required value="<?php echo $u->nama_taman ?>"><br/>
				<input type="text" name="alamat" class="form-control" placeholder="Judul berita" required value="<?php echo $u->alamat ?>"><br/>
				<div class="form-group">
					<label class="label" for="namafile">Gambar Sebelumnya : <a href="<?php echo base_url().'assets/images/'.$u->gambar_taman; ?>"><?php echo $u->gambar_taman ?></a></label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="gambar" id="filinput">
						<label class="custom-file-label" for="customFile"></label>
					</div>
				</div>
				<br>
				<textarea id="ckeditor" name="berita" class="form-control" required><?php echo $u->detail_taman ?></textarea><br/>
				<?php 
			}
			?>
			<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
		</form>
	</div>
</div>
</main>
<script type="text/javascript">
	$('#filinput').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
})
</script>
<style type="text/css">
.col-sm-9{
	margin-top: -450px;
}
</style>

