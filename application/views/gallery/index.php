<center>
	<h2><?= $title; ?></h2>
</center>
<?php if ($this->session->userdata('logged_in')) : ?>
	<a href="<?php echo base_url(); ?>gallery/create"><button>Upload Gambar</button></a><br>
<?php endif; ?>
<div class="gallery-image">
	<?php foreach ($gallery as $gal) : ?>
		<?php $date = date_create($gal['date_taken']);
		$date_time = date_format($date, "d/m/Y");
		?>
		<!-- -------------------------------------------------------------------------------- -->
		<div class="img-box">
			<img src="<?php echo site_url(); ?>assets/images/gallery/<?php echo $gal['upload_image']; ?>" />
			<div class="transparent-box">
				<div class="caption">
					<p><?php echo $gal['title']; ?></p>
					<p>Diambil pada tanggal <?php echo $date_time ?></p>
					<button onclick="Download('<?php echo site_url(); ?>assets/images/gallery/<?php echo $gal['upload_image']; ?>','<?php echo $gal['upload_image']; ?>')">Download</button>
					<a href="<?php echo site_url(); ?>assets/images/gallery/<?php echo $gal['upload_image']; ?>" target=”_blank”><button onclick="">Lihat</button></a>
					<?php if ($this->session->userdata('logged_in')) : ?>
						<?php echo form_open('/gallery/delete/' . $gal['id']); ?>
						<button style="margin-top:5px;margin-bottom: -25px" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						</form>
					<?php endif; ?>
					<script>
						function Download(url, filename) {
							var a = document.createElement('a');
							a.href = url;
							a.download = filename;
							document.body.appendChild(a);
							a.click();
							document.body.removeChild(a);
						}
					</script>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>