<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="section" id="sobre">
	<span class="confetti c5"></span><span class="confetti c6"></span>
	<div class="container">
		<div class="text-center mb-5">
			<span class="eyebrow reveal">Nossos principais benefícios</span>
			<h2 class="section-title reveal" data-delay="100">Seu Parceiro de Serviços<br class="d-none d-md-block"> de Oficina Favorito</h2>
		</div>

		<div class="row g-4">
			<?php foreach ($beneficios as $i => $b): ?>
				<div class="col-md-4">
					<div class="benefit reveal" data-delay="<?= $i * 150 ?>">
						<div class="benefit-ico"><i class="bi <?= $b['icone'] ?>"></i></div>
						<h3><?= $b['titulo'] ?></h3>
						<p><?= $b['texto'] ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
