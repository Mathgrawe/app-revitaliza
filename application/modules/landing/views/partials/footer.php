<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer class="site-footer" id="contato">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-3 col-md-6">
				<img src="<?= base_url('uploads/logo.png') ?>" alt="iParts" class="logo mb-3">
				<p class="small muted">Conectando pessoas às oficinas para facilitar a manutenção de seus veículos e garantir a sua segurança nas estradas.</p>
				<div class="socials">
					<a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
					<a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
					<a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
				</div>
			</div>
			<div class="col-6 col-md-3 col-lg-2">
				<h6>Sobre</h6>
				<ul><li><a href="#sobre">Sobre Nós</a></li><li><a href="#">Notícias</a></li><li><a href="#">Menu</a></li></ul>
			</div>
			<div class="col-6 col-md-3 col-lg-2">
				<h6>Empresa</h6>
				<ul><li><a href="#sobre">O que é iParts?</a></li><li><a href="#afiliado">Seja Afiliado</a></li><li><a href="#">FAQ</a></li><li><a href="#">Blog</a></li></ul>
			</div>
			<div class="col-6 col-md-6 col-lg-2">
				<h6>Suporte</h6>
				<ul><li><a href="#">Conta</a></li><li><a href="#">Centro de Atendimento</a></li><li><a href="#">Feedback</a></li><li><a href="#">Contato</a></li><li><a href="#">Acessibilidade</a></li></ul>
			</div>
			<div class="col-md-6 col-lg-3">
				<h6>Entrar em Contato</h6>
				<p class="small muted">Pergunta ou feedback? Adoraríamos ouvir de você.</p>
				<form class="newsletter" id="newsletterForm">
					<input type="email" placeholder="Email Address" aria-label="Email" required>
					<button type="submit" aria-label="Enviar"><i class="bi bi-send-fill"></i></button>
				</form>
			</div>
		</div>
		<div class="footer-bottom">© <?= date('Y') ?> iParts. Todos os direitos reservados.</div>
	</div>
</footer>

<button class="to-top" id="toTop" aria-label="Voltar ao topo"><i class="bi bi-arrow-up"></i></button>
