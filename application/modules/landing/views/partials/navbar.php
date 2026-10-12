<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="navbar navbar-expand-lg fixed-top site-nav" id="siteNav">
	<div class="container">
		<a class="navbar-brand" href="#topo"><img src="<?= base_url('uploads/logo.png') ?>" alt="iParts" class="logo"></a>

		<div class="d-flex align-items-center gap-2 order-lg-3">
			<button class="icon-btn theme-toggle" id="themeToggle" aria-label="Alternar modo escuro"><i class="bi bi-moon-stars-fill"></i><i class="bi bi-sun-fill"></i></button>
			<button class="icon-btn d-none d-sm-inline-flex" aria-label="Buscar"><i class="bi bi-search"></i></button>
			<button class="icon-btn cart-btn" aria-label="Carrinho"><i class="bi bi-bag"></i><span class="cart-dot">2</span></button>
			<a href="#" class="btn-orange btn-sm-pill d-none d-sm-inline-flex"><i class="bi bi-box-arrow-in-right"></i> Login</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu">
				<span class="burger"><span></span><span></span><span></span></span>
			</button>
		</div>

		<div class="collapse navbar-collapse order-lg-2" id="menu">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"><a class="nav-link active" href="#sobre">O que é iParts?</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Serviços</a>
					<ul class="dropdown-menu">
						<?php foreach ($categorias as $slug => $cat): ?>
							<li><a class="dropdown-item" href="#servicos" data-goto="<?= $slug ?>"><i class="bi <?= $cat['icone'] ?>"></i> <?= $cat['nome'] ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Menu</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#afiliado">Seja Afiliado</a></li>
						<li><a class="dropdown-item" href="#app">Baixar App</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
				<li class="nav-item d-sm-none mt-2"><a href="#" class="btn-orange w-100 justify-content-center"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
			</ul>
		</div>
	</div>
</nav>
