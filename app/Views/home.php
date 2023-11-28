<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
	<div class="row">
		<?php foreach($services->data as $row){ ?>
			<div class="col-lg-1 col-3 text-center">
				<a href="<?= base_url('payment/'.strtolower($row->service_code)) ?>" style='font-size: 12px; color: black;' class='text-decoration-none'><img src="<?= $row->service_icon ?>" class='img-fluid' alt="<?= $row->service_name ?> Logo"><?= $row->service_name ?></a>
			</div>
		<?php } ?>
	</div>
	<div class="mt-3 mx-3">
		<h6 class="text-grey"><strong>Temukan promo yang menarik</strong></h6>
		<div class="inline_banner">
			<?php foreach($banner->data as $row){ ?>
				<img src="<?= $row->banner_image ?>" alt="<?= $row->banner_name ?> 1">
			<?php } ?>
		</div>
	</div>
</div>

<?= $this->endSection() ?>