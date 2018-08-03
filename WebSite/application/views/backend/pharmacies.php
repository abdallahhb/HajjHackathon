<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3>Je cherche une Clinique</h3>
			<div class="hr_colored_div"></div>
			<?php
			$pharmacies = $this->db->get('pharmacies')->result_array();
			foreach($pharmacies as $pharmacy){ ?>
				<div class="row box_content_gray" style="background-color:#f9f9f9;">
					<div class="media">
						<div class="media-left">
							<img src="icons/pharmacy.png" class="media-object img-circle" style="width:70px">
						</div>
						<div class="media-body">
							<h3 class="media-heading">
								<?php echo $pharmacy['comercial_name']; ?>
								<span class="glyphicon glyphicon-ok check_circle"></span>
							</h3>
							<h4>
								<span class="glyphicon glyphicon-map-marker"></span>
								<?php echo $pharmacy['address']; ?></h4>
							</div>
							<div class="media-left">
								<a href="<?php echo base_url() . 'index.php?home/pharmacy_data/'.$pharmacy['id'] ;?>" class="btn btn-primary">
									voir fiche
								</a>
								<a href="<?php echo base_url() . 'index.php?home/pharmacy_data/'.$pharmacy['id'] ;?>" class="btn btn-success">
									(+213) <?php echo $pharmacy['phone']; ?>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
