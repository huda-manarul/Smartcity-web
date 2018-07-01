<br>
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h2>Form Pengaduan</h2><hr/>
		<form action="<?php echo base_url().'dashboard/prosestamabahinformasi' ?>" method="post" >
			<input type="text" name="judul" class="form-control" placeholder="Objek Pengaduan" required/><br/>
			<textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
			<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
		</form>
	</div>
</div>

