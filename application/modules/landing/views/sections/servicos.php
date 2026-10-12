<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="section pt-0" id="servicos">
	<div class="container">
		<div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-5">
			<div>
				<span class="eyebrow reveal">Seu menu</span>
				<h2 class="section-title text-start reveal" data-delay="100">Serviços que vão<br>Conquistar a sua Confiança.</h2>
			</div>
			<div class="d-flex gap-3 reveal" data-delay="200">
				<button class="arrow-btn" id="prevBtn" aria-label="Anterior"><i class="bi bi-chevron-left"></i></button>
				<button class="arrow-btn active" id="nextBtn" aria-label="Próximo"><i class="bi bi-chevron-right"></i></button>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-lg-3">
				<ul class="cat-list reveal" id="catList">
					<?php foreach ($categorias as $slug => $cat): ?>
						<li>
							<button class="cat-btn <?= $slug === $categoria_ativa ? 'active' : '' ?>" data-cat="<?= $slug ?>">
								<span class="cat-ico"><i class="bi <?= $cat['icone'] ?>"></i></span> <?= $cat['nome'] ?>
							</button>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-lg-9">
				<?php foreach ($categorias as $slug => $cat): ?>
					<div class="service-track <?= $slug === $categoria_ativa ? 'show' : '' ?>" data-panel="<?= $slug ?>">
						<?php foreach ($cat['servicos'] as $s): ?>
							<article class="service-card">
								<img src="<?= $s['img'] ?>" alt="<?= $s['titulo'] ?>" loading="lazy">
								<div class="service-info">
									<h4><?= $s['titulo'] ?></h4>
									<span class="price"><span class="text-orange">$</span> <?= $s['preco'] ?></span>
									<a href="#" class="order-link">Pedir Agora <i class="bi bi-chevron-right"></i></a>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
