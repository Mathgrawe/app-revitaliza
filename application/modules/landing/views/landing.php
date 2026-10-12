<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revitaliza® | Restauração e polimento de pisos em Vitória e Vila Velha – ES</title>
	<meta name="description" content="Restauração, polimento, impermeabilização e limpeza técnica de mármore, granito, pedra São Tomé, porcelanato, granilite e ladrilho hidráulico em Vitória e Vila Velha – ES. Orçamento sem compromisso.">
	<meta name="theme-color" content="#16130f">
	<meta property="og:title" content="Revitaliza® – Mestres da restauração de pisos">
	<meta property="og:description" content="Seu piso de volta ao brilho. Mármore, granito, São Tomé, porcelanato e mais. Vitória · Vila Velha · ES.">
	<meta property="og:image" content="https://revitaliza.com.br/wp-content/uploads/2017/07/BKQV5315.jpeg">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,400&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= $assets ?>css/landing.css">
	<script>document.documentElement.className += ' js';</script>
</head>
<body>

<!-- Ícones -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
	<defs>
		<symbol id="i-wa" viewBox="0 0 24 24"><path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38a9.9 9.9 0 0 0 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2Zm5.8 14.02c-.24.68-1.42 1.3-1.95 1.35-.5.05-1.12.07-1.8-.11-.42-.13-.95-.31-1.63-.6-2.87-1.24-4.74-4.13-4.88-4.32-.14-.19-1.17-1.55-1.17-2.96 0-1.41.74-2.1 1-2.39.26-.29.57-.36.76-.36h.55c.17 0 .41-.07.64.49.24.58.81 2 .88 2.14.07.14.12.31.02.5-.1.19-.14.31-.29.48-.14.17-.3.37-.43.5-.14.14-.29.3-.13.59.17.29.74 1.22 1.58 1.97 1.09.97 2 1.27 2.29 1.41.29.14.45.12.62-.07.17-.19.71-.83.9-1.12.19-.29.38-.24.64-.14.26.1 1.67.79 1.95.93.29.14.48.21.55.33.07.12.07.68-.17 1.36Z"/></symbol>
		<symbol id="i-phone" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/></symbol>
		<symbol id="i-mail" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></g></symbol>
		<symbol id="i-pin" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/></g></symbol>
		<symbol id="i-check" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="m5 12.5 4.5 4.5L19 7.5"/></symbol>
		<symbol id="i-arrow" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></symbol>
		<symbol id="i-plus" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M12 5v14M5 12h14"/></symbol>
		<symbol id="i-close" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M6 6l12 12M18 6 6 18"/></symbol>
		<symbol id="i-sparkle" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3c.6 4.2 2.8 6.4 7 7-4.2.6-6.4 2.8-7 7-.6-4.2-2.8-6.4-7-7 4.2-.6 6.4-2.8 7-7Z"/></symbol>
		<symbol id="i-shield" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 5 6v5c0 4.5 3 8.3 7 10 4-1.7 7-5.5 7-10V6l-7-3Z"/><path d="m9 12 2 2 4-4"/></g></symbol>
		<symbol id="i-layers" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 13 9 5 9-5"/></g></symbol>
		<symbol id="i-drop" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3s6 6.4 6 11a6 6 0 0 1-12 0c0-4.6 6-11 6-11Z"/></symbol>
		<symbol id="i-broom" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 3 11 11"/><path d="M8.5 10.5 13.5 15.5 11 21H3l2.5-8.5 3-2Z"/><path d="M7 21l1.5-4M11 21l.5-2.5"/></g></symbol>
		<symbol id="i-grid" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="1.5"/><path d="M3 12h18M12 3v18"/></g></symbol>
		<symbol id="i-sink" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18a9 9 0 0 1-18 0Z"/><path d="M12 11V5a2 2 0 0 1 4 0"/></g></symbol>
		<symbol id="i-drill" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/></g></symbol>
		<symbol id="i-puzzle" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M4 8h4a2 2 0 1 1 4 0h4v4a2 2 0 1 1 0 4v4H4v-4a2 2 0 1 0 0-4V8Z"/></symbol>
		<symbol id="i-jet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M3 8h8l2 2v4l-2 2H3z"/><path d="M16 9l5-2M16 12h5M16 15l5 2"/></g></symbol>
		<symbol id="i-steps" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 18h4l2-4 2 4h4l2-4h2"/><path d="M4 8h16"/></g></symbol>
		<symbol id="i-stone" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="M3 9 8 4h8l5 5-9 11L3 9Z"/><path d="M3 9h18M9 4l3 16 3-16"/></g></symbol>
		<symbol id="i-sun" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></g></symbol>
	</defs>
</svg>

<!-- Header -->
<header class="hd" id="topo">
	<div class="wrap hd__in">
		<a href="#topo" class="brand" aria-label="Revitaliza – início">
			<img class="brand__logo" src="https://revitaliza.com.br/wp-content/uploads/2016/09/cropped-image-1-300x145.png" srcset="https://revitaliza.com.br/wp-content/uploads/2016/09/cropped-image-1-300x145.png 300w, https://revitaliza.com.br/wp-content/uploads/2016/09/cropped-image-1-768x372.png 768w" sizes="120px" width="300" height="145" alt="Revitaliza® – Restauração e Limpeza">
		</a>
		<nav class="nav" id="nav" aria-label="Principal">
			<a href="#servicos">Serviços</a>
			<a href="#combos">Combos</a>
			<a href="#obras">Antes &amp; Depois</a>
			<a href="#processo">Processo</a>
			<a href="#produtos">Produtos</a>
			<a href="#faq">Dúvidas</a>
			<a href="#diagnostico" class="nav__cta">Orçamento grátis</a>
		</nav>
		<a class="btn btn--wa hd__wa" href="https://wa.me/5527997776667" target="_blank" rel="noopener" data-wa>
			<svg><use href="#i-wa"/></svg><span>27 99777-6667</span>
		</a>
		<button class="burger" id="burger" aria-label="Abrir menu" aria-expanded="false" aria-controls="nav"><span></span><span></span></button>
	</div>
</header>

<main>

<!-- Hero -->
<section class="hero">
	<div class="hero__veins" aria-hidden="true"></div>
	<div class="wrap hero__in">
		<div class="hero__copy">
			<p class="eyebrow reveal"><span class="dot"></span> Vitória · Vila Velha · Espírito Santo</p>
			<h1 class="hero__title reveal">
				Seu piso de volta<br>ao <em>brilho</em> de<br>quando era novo.
			</h1>
			<p class="hero__lead reveal">
				Restauração, polimento e impermeabilização de mármore, granito, pedra São Tomé,
				porcelanato, granilite e ladrilho hidráulico — com técnica de quem trabalha pedra
				há anos e produtos que removem manchas e protegem contra a ação do tempo.
			</p>
			<div class="hero__actions reveal">
				<a href="#diagnostico" class="btn btn--primary btn--lg">Diagnóstico gratuito <svg><use href="#i-arrow"/></svg></a>
				<a href="#obras" class="btn btn--ghost btn--lg">Ver antes &amp; depois</a>
			</div>
			<ul class="hero__facts reveal">
				<li><b data-count="13">13</b><span>serviços<br>especializados</span></li>
				<li><b data-count="8">8</b><span>tipos de piso<br>e revestimento</span></li>
				<li><b data-count="3">3</b><span>combos prontos<br>para sua obra</span></li>
			</ul>
		</div>

		<div class="hero__demo reveal" aria-label="Demonstração interativa de polimento">
			<div class="polish" id="polish">
				<div class="polish__stone" aria-hidden="true"></div>
				<div class="polish__shine" aria-hidden="true"></div>
				<canvas class="polish__dirt" id="polishCanvas"></canvas>
				<div class="polish__grout" aria-hidden="true"></div>
				<div class="polish__hint" id="polishHint">
					<span class="polish__puck" aria-hidden="true"></span>
					Passe o dedo ou o mouse para <b>polir</b>
				</div>
				<div class="polish__done" id="polishDone">
					<svg><use href="#i-sparkle"/></svg>
					<strong>Brilho devolvido.</strong>
					<span>Agora imagine isso no seu piso.</span>
					<a href="#diagnostico" class="btn btn--primary">Quero esse resultado</a>
				</div>
			</div>
			<div class="polish__bar">
				<span>Polimento</span>
				<div class="meter"><i id="polishMeter"></i></div>
				<b id="polishPct">0%</b>
			</div>
		</div>
	</div>
</section>

<!-- Materiais -->
<div class="ticker" aria-label="Materiais atendidos">
	<div class="ticker__track">
		<span>Mármore</span><span>Granito</span><span>Pedra São Tomé</span><span>Porcelanato</span><span>Madeira</span><span>Paviflex</span><span>Granilite</span><span>Ladrilho hidráulico</span><span>Ardósia</span><span>Bege Bahia</span><span>Fachadas</span>
		<span aria-hidden="true">Mármore</span><span aria-hidden="true">Granito</span><span aria-hidden="true">Pedra São Tomé</span><span aria-hidden="true">Porcelanato</span><span aria-hidden="true">Madeira</span><span aria-hidden="true">Paviflex</span><span aria-hidden="true">Granilite</span><span aria-hidden="true">Ladrilho hidráulico</span><span aria-hidden="true">Ardósia</span><span aria-hidden="true">Bege Bahia</span><span aria-hidden="true">Fachadas</span>
	</div>
</div>

<!-- Confiança -->
<section class="trust">
	<div class="wrap">
		<p class="trust__lbl">Obras que passaram pelas nossas mãos</p>
		<ul class="trust__list">
			<li>Ed. Palácio do Café <small>Vitória</small></li>
			<li>Unimed Diagnóstico <small>Vitória</small></li>
			<li>Loja da Fábrica Garoto <small>Vila Velha</small></li>
			<li>BMW <small>Vitória</small></li>
			<li>Igreja N. Sra. do Rosário <small>Prainha · Vila Velha</small></li>
		</ul>
	</div>
</section>

<!-- Serviços -->
<section class="sec" id="servicos">
	<div class="wrap">
		<header class="sec__hd reveal">
			<p class="eyebrow">Serviços especializados</p>
			<h2>Tudo o que a sua pedra<br>precisa, <em>em um só lugar.</em></h2>
			<p>Executados por profissionais qualificados, com anos de experiência no beneficiamento de mármore e granito.</p>
		</header>

		<div class="filters reveal" role="tablist" aria-label="Filtrar serviços">
			<button class="chip is-on" data-filter="all" role="tab" aria-selected="true">Todos</button>
			<button class="chip" data-filter="brilho" role="tab" aria-selected="false">Brilho &amp; restauração</button>
			<button class="chip" data-filter="protecao" role="tab" aria-selected="false">Proteção &amp; limpeza</button>
			<button class="chip" data-filter="reparo" role="tab" aria-selected="false">Reparos &amp; instalação</button>
		</div>

		<div class="svc">
			<article class="svc__card reveal" data-cat="brilho"><span class="svc__n">01</span><svg><use href="#i-sparkle"/></svg><h3>Re-polimento</h3><p>Devolve o brilho natural da pedra, sem verniz e sem cera.</p></article>
			<article class="svc__card reveal" data-cat="brilho"><span class="svc__n">02</span><svg><use href="#i-layers"/></svg><h3>Revitalização de piso e fachadas</h3><p>Recupera cor, textura e uniformidade de áreas internas e externas.</p></article>
			<article class="svc__card reveal" data-cat="protecao"><span class="svc__n">03</span><svg><use href="#i-drop"/></svg><h3>Impermeabilização</h3><p>Barreira contra manchas de líquidos, gordura e umidade.</p></article>
			<article class="svc__card reveal" data-cat="protecao"><span class="svc__n">04</span><svg><use href="#i-broom"/></svg><h3>Limpeza técnica pós-obra</h3><p>Remove resíduos de cimento, tinta e rejunte sem agredir o revestimento.</p></article>
			<article class="svc__card reveal" data-cat="reparo"><span class="svc__n">05</span><svg><use href="#i-grid"/></svg><h3>Rejuntamento de piso</h3><p>Troca do rejunte encardido ou trincado, com acabamento uniforme.</p></article>
			<article class="svc__card reveal" data-cat="reparo"><span class="svc__n">06</span><svg><use href="#i-sink"/></svg><h3>Colagem de bacias e cubas</h3><p>Fixação segura de cubas em bancadas de mármore e granito.</p></article>
			<article class="svc__card reveal" data-cat="reparo"><span class="svc__n">07</span><svg><use href="#i-drill"/></svg><h3>Furos de diversos diâmetros</h3><p>Furação precisa em pedra para torneiras, ralos e instalações.</p></article>
			<article class="svc__card reveal" data-cat="reparo"><span class="svc__n">08</span><svg><use href="#i-puzzle"/></svg><h3>Restauração de peças quebradas</h3><p>Recomposição de quinas, trincas e lascas com acabamento invisível.</p></article>
			<article class="svc__card reveal" data-cat="protecao"><span class="svc__n">09</span><svg><use href="#i-jet"/></svg><h3>Jateamento de alta pressão</h3><p>Limpeza profunda de áreas externas, pedras rústicas e fachadas.</p></article>
			<article class="svc__card reveal" data-cat="protecao"><span class="svc__n">10</span><svg><use href="#i-steps"/></svg><h3>Levigamento antiderrapante</h3><p>Textura segura para áreas molhadas, rampas e entornos de piscina.</p></article>
			<article class="svc__card reveal" data-cat="brilho"><span class="svc__n">11</span><svg><use href="#i-stone"/></svg><h3>Ardósia e São Tomé</h3><p>Tratamento específico para pedras naturais rústicas.</p></article>
			<article class="svc__card reveal" data-cat="brilho"><span class="svc__n">12</span><svg><use href="#i-sun"/></svg><h3>Tratamento de porcelanato</h3><p>Limpeza e proteção para porcelanatos polidos e acetinados.</p></article>
			<article class="svc__card reveal" data-cat="brilho"><span class="svc__n">13</span><svg><use href="#i-shield"/></svg><h3>Estucagem de Bege Bahia</h3><p>Preenchimento dos poros típicos do Bege Bahia para um acabamento liso.</p></article>
		</div>
	</div>
</section>

<!-- Combos -->
<section class="sec sec--dark" id="combos">
	<div class="wrap">
		<header class="sec__hd reveal">
			<p class="eyebrow">Combos Revitaliza</p>
			<h2>Escolha o nível de<br><em>transformação.</em></h2>
			<p>Pacotes completos para cada situação — da manutenção ao restauro total.</p>
		</header>

		<div class="combos">
			<article class="combo reveal" data-combo="Basic">
				<p class="combo__tag">Manutenção</p>
				<h3>Basic</h3>
				<p class="combo__desc">Para pisos em bom estado que precisam de limpeza profunda e proteção.</p>
				<ul>
					<li><svg><use href="#i-check"/></svg>Limpeza técnica</li>
					<li><svg><use href="#i-check"/></svg>Impermeabilização</li>
				</ul>
				<a href="#diagnostico" class="btn btn--line" data-pick-combo="Basic">Quero o Basic</a>
			</article>

			<article class="combo combo--hot reveal" data-combo="Plus">
				<p class="combo__tag">Brilho + proteção</p>
				<h3>Plus</h3>
				<p class="combo__desc">Para pisos opacos, com manchas e rejunte encardido.</p>
				<ul>
					<li><svg><use href="#i-check"/></svg>Envelopamento de proteção</li>
					<li><svg><use href="#i-check"/></svg>Limpeza de rejunte</li>
					<li><svg><use href="#i-check"/></svg>Polimento com pasta abrasiva</li>
					<li><svg><use href="#i-check"/></svg>Impermeabilização</li>
				</ul>
				<a href="#diagnostico" class="btn btn--primary" data-pick-combo="Plus">Quero o Plus</a>
			</article>

			<article class="combo reveal" data-combo="Top Premium">
				<p class="combo__tag">Restauro completo</p>
				<h3>Top Premium</h3>
				<p class="combo__desc">Para pisos riscados, desnivelados ou desgastados. Cuidamos de tudo.</p>
				<ul>
					<li><svg><use href="#i-check"/></svg>Envelopamento de móveis e paredes</li>
					<li><svg><use href="#i-check"/></svg>Pacote mudança</li>
					<li><svg><use href="#i-check"/></svg>Troca de rejunte</li>
					<li><svg><use href="#i-check"/></svg>Nivelamento</li>
					<li><svg><use href="#i-check"/></svg>Restauração com lixas</li>
					<li><svg><use href="#i-check"/></svg>Polimento com pasta abrasiva</li>
					<li><svg><use href="#i-check"/></svg>Impermeabilização</li>
				</ul>
				<a href="#diagnostico" class="btn btn--line" data-pick-combo="Top Premium">Quero o Top Premium</a>
			</article>
		</div>
	</div>
</section>

<!-- Antes & Depois -->
<section class="sec" id="obras">
	<div class="wrap">
		<header class="sec__hd sec__hd--row reveal">
			<div>
				<p class="eyebrow">Obras · Antes &amp; Depois</p>
				<h2>A prova está<br><em>no chão.</em></h2>
			</div>
			<div class="filters" aria-label="Filtrar obras">
				<button class="chip is-on" data-gfilter="all">Todas</button>
				<button class="chip" data-gfilter="marmore">Mármore</button>
				<button class="chip" data-gfilter="granito">Granito</button>
				<button class="chip" data-gfilter="outros">Outras pedras</button>
			</div>
		</header>

		<div class="gal">
			<a class="gal__it gal__it--big reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2017/07/BKQV5315-1024x1024.jpeg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2017/07/BKQV5315-768x768.jpeg" alt="Restauração de piso de mármore, antes e depois"><span><b>Hall de entrada · Ed. Palácio do Café</b>Mármore · Vitória</span></a>
			<a class="gal__it reveal" data-g="granito" href="https://revitaliza.com.br/wp-content/uploads/2017/07/VSIV7721.jpeg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2017/07/VSIV7721-768x768.jpeg" alt="Granito arabesco com escamação, antes e depois"><span><b>Granito arabesco · escamação e eflorescência</b>Itapemirim · Sul do ES</span></a>
			<a class="gal__it reveal" data-g="outros" href="https://revitaliza.com.br/wp-content/uploads/2016/12/igreja1812.jpeg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/12/igreja1812-768x768.jpeg" alt="Ladrilho hidráulico português restaurado"><span><b>Ladrilho hidráulico português</b>Igreja N. Sra. do Rosário · Vila Velha</span></a>
			<a class="gal__it reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2016/09/begeantes.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/begeantes.png" alt="Mármore Bege Bahia, antes"><span><b>Mármore Bege Bahia · antes</b>Estucagem e polimento</span></a>
			<a class="gal__it reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2016/09/begebahia.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/begebahia.png" alt="Mármore Bege Bahia, depois"><span><b>Mármore Bege Bahia · depois</b>Estucagem e polimento</span></a>
			<a class="gal__it reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2016/10/IMG_0217.jpeg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/10/IMG_0217-768x768.jpeg" alt="Mesa de mármore restaurada"><span><b>Mesa de mármore</b>Praia da Costa · Vila Velha</span></a>
			<a class="gal__it reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2016/09/marmorerejunte.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/marmorerejunte.png" alt="Mármore com rejunte encardido, antes e depois"><span><b>Mármore com rejunte encardido</b>Polimento + limpeza de rejunte</span></a>
			<a class="gal__it gal__it--big reveal" data-g="granito" href="https://revitaliza.com.br/wp-content/uploads/2016/09/IMG_6219-1-1024x1024.jpg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/IMG_6219-1-768x768.jpg" alt="Piso de granito da loja da fábrica Garoto"><span><b>Loja da Fábrica Garoto</b>Granito · Vila Velha</span></a>
			<a class="gal__it reveal" data-g="outros" href="https://revitaliza.com.br/wp-content/uploads/2016/09/saotome.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/saotome.png" alt="Pedra São Tomé, antes e depois"><span><b>Pedra São Tomé</b>Limpeza e tratamento</span></a>
			<a class="gal__it reveal" data-g="granito" href="https://revitaliza.com.br/wp-content/uploads/2016/09/unimed300.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/unimed300.png" alt="Piso de granito da Unimed Diagnóstico restaurado"><span><b>Unimed Diagnóstico</b>Granito · Vitória</span></a>
			<a class="gal__it reveal" data-g="granito" href="https://revitaliza.com.br/wp-content/uploads/2016/09/petropiano.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/petropiano.png" alt="Piso listrado preto e branco, antes e depois"><span><b>Piso preto e branco</b>Restauração e polimento</span></a>
			<a class="gal__it reveal" data-g="marmore" href="https://revitaliza.com.br/wp-content/uploads/2016/10/IMG_0441.jpg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/10/IMG_0441-768x768.jpg" alt="Polimento de mármore com manchas"><span><b>Mármore manchado + rejunte</b>Vitória</span></a>
			<a class="gal__it reveal" data-g="outros" href="https://revitaliza.com.br/wp-content/uploads/2016/09/canal.png"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/canal.png" alt="Revitalização de piso, antes e depois"><span><b>Revitalização de piso</b>Antes &amp; depois</span></a>
			<a class="gal__it reveal" data-g="granito" href="https://revitaliza.com.br/wp-content/uploads/2016/09/image-2.jpeg"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/image-2-768x768.jpeg" alt="Revitalização de piso na BMW Vitória"><span><b>Concessionária BMW</b>Vitória</span></a>
		</div>
	</div>
</section>

<!-- Processo -->
<section class="sec sec--stone" id="processo">
	<div class="wrap">
		<header class="sec__hd reveal">
			<p class="eyebrow">Como trabalhamos</p>
			<h2>Do diagnóstico ao<br><em>último brilho.</em></h2>
		</header>
		<ol class="steps">
			<li class="step reveal"><span class="step__n">1</span><h3>Diagnóstico</h3><p>Identificamos o material e a patologia: manchas, riscos, escamação, eflorescência ou desnível.</p></li>
			<li class="step reveal"><span class="step__n">2</span><h3>Proteção</h3><p>Envelopamento de móveis e paredes para que a casa fique limpa durante o serviço.</p></li>
			<li class="step reveal"><span class="step__n">3</span><h3>Restauração</h3><p>Nivelamento e lixamento em etapas para remover riscos e desgaste.</p></li>
			<li class="step reveal"><span class="step__n">4</span><h3>Polimento</h3><p>Pasta abrasiva e técnica certa para devolver o brilho natural da pedra.</p></li>
			<li class="step reveal"><span class="step__n">5</span><h3>Impermeabilização</h3><p>Proteção contra manchas e contra a ação do tempo, prontinho para usar.</p></li>
		</ol>
	</div>
</section>

<!-- Diagnóstico interativo -->
<section class="sec" id="diagnostico">
	<div class="wrap diag">
		<div class="diag__intro reveal">
			<p class="eyebrow">Diagnóstico em 60 segundos</p>
			<h2>Conte o que está<br>acontecendo com o<br><em>seu piso.</em></h2>
			<p>Responda 4 perguntas rápidas e receba uma recomendação inicial de combo. Depois é só enviar pelo WhatsApp — a avaliação técnica final é feita no local, sem compromisso.</p>
			<ul class="diag__contacts">
				<li><svg><use href="#i-wa"/></svg><a href="https://wa.me/5527997776667" target="_blank" rel="noopener">27 99777-6667</a></li>
				<li><svg><use href="#i-phone"/></svg><a href="tel:+552730354060">27 3035-4060</a> · <a href="tel:+5527999694060">27 99969-4060</a></li>
				<li><svg><use href="#i-mail"/></svg><a href="mailto:revitaliza@revitaliza.com.br">revitaliza@revitaliza.com.br</a></li>
			</ul>
		</div>

		<form class="wiz reveal" id="wiz" novalidate>
			<div class="wiz__top">
				<div class="wiz__prog"><i id="wizBar"></i></div>
				<span class="wiz__count"><b id="wizStep">1</b>/4</span>
			</div>

			<fieldset class="wiz__pane is-on" data-step="1">
				<legend>Qual é o material do piso?</legend>
				<div class="opts">
					<label class="opt"><input type="radio" name="material" value="Mármore"><span>Mármore</span></label>
					<label class="opt"><input type="radio" name="material" value="Granito"><span>Granito</span></label>
					<label class="opt"><input type="radio" name="material" value="Porcelanato"><span>Porcelanato</span></label>
					<label class="opt"><input type="radio" name="material" value="Pedra São Tomé / Ardósia"><span>São Tomé / Ardósia</span></label>
					<label class="opt"><input type="radio" name="material" value="Granilite"><span>Granilite</span></label>
					<label class="opt"><input type="radio" name="material" value="Ladrilho hidráulico"><span>Ladrilho hidráulico</span></label>
					<label class="opt"><input type="radio" name="material" value="Madeira / Paviflex"><span>Madeira / Paviflex</span></label>
					<label class="opt"><input type="radio" name="material" value="Não sei"><span>Não sei</span></label>
				</div>
			</fieldset>

			<fieldset class="wiz__pane" data-step="2">
				<legend>O que você quer resolver? <small>Marque quantos quiser</small></legend>
				<div class="opts">
					<label class="opt"><input type="checkbox" name="problema" value="Perdeu o brilho" data-w="2"><span>Perdeu o brilho</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Manchas" data-w="2"><span>Manchas</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Rejunte encardido" data-w="2"><span>Rejunte encardido</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Riscos profundos" data-w="3"><span>Riscos profundos</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Peças trincadas ou quebradas" data-w="3"><span>Trincas / peças quebradas</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Desnível entre as peças" data-w="3"><span>Desnível entre peças</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Sujeira pós-obra" data-w="1"><span>Sujeira pós-obra</span></label>
					<label class="opt"><input type="checkbox" name="problema" value="Piso escorregadio" data-w="1"><span>Piso escorregadio</span></label>
				</div>
			</fieldset>

			<fieldset class="wiz__pane" data-step="3">
				<legend>Onde é e qual o tamanho?</legend>
				<div class="opts opts--3">
					<label class="opt"><input type="radio" name="local" value="Residência"><span>Residência</span></label>
					<label class="opt"><input type="radio" name="local" value="Condomínio"><span>Condomínio</span></label>
					<label class="opt"><input type="radio" name="local" value="Comércio / empresa"><span>Comércio</span></label>
				</div>
				<div class="range">
					<label for="area">Área aproximada</label>
					<output id="areaOut">40 m²</output>
					<input type="range" id="area" name="area" min="5" max="500" step="5" value="40">
				</div>
			</fieldset>

			<fieldset class="wiz__pane" data-step="4">
				<legend>Para quem enviamos o orçamento?</legend>
				<div class="field"><label for="nome">Seu nome</label><input id="nome" name="nome" type="text" autocomplete="name" placeholder="Como podemos te chamar?"></div>
				<div class="field"><label for="bairro">Bairro e cidade</label><input id="bairro" name="bairro" type="text" autocomplete="address-level2" placeholder="Ex.: Praia da Costa, Vila Velha"></div>
			</fieldset>

			<div class="wiz__pane wiz__res" data-step="5">
				<p class="eyebrow">Recomendação inicial</p>
				<h3>Combo <span id="resCombo">Plus</span></h3>
				<p id="resWhy"></p>
				<ul class="res__sum" id="resSum"></ul>
				<a class="btn btn--wa btn--lg btn--block" id="resSend" href="#" target="_blank" rel="noopener"><svg><use href="#i-wa"/></svg>Enviar pelo WhatsApp</a>
				<button type="button" class="link" id="wizRestart">Refazer diagnóstico</button>
			</div>

			<p class="wiz__err" id="wizErr" role="alert"></p>
			<div class="wiz__nav">
				<button type="button" class="btn btn--ghost" id="wizBack" disabled>Voltar</button>
				<button type="button" class="btn btn--primary" id="wizNext">Continuar <svg><use href="#i-arrow"/></svg></button>
			</div>
		</form>
	</div>
</section>

<!-- Produtos + Equipe -->
<section class="sec sec--stone" id="produtos">
	<div class="wrap duo">
		<article class="duo__card reveal">
			<div class="duo__img"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2023/01/thumbnail_IMG_20220604_205551-826x435.jpg" alt="Produtos de limpeza Revitaliza"></div>
			<div class="duo__body">
				<p class="eyebrow">Produtos Revitaliza</p>
				<h3>O brilho dura mais com a limpeza certa.</h3>
				<p>Kit de limpeza diária, detergente e fibras para manutenção que <b>não agridem o piso</b>.</p>
				<p class="gift"><svg><use href="#i-sparkle"/></svg>Na compra dos nossos serviços, você ganha 1 litro de detergente Revitaliza Pisos.</p>
				<a class="btn btn--line" href="https://wa.me/5527997776667?text=Ol%C3%A1!%20Quero%20saber%20sobre%20os%20produtos%20de%20limpeza%20Revitaliza." target="_blank" rel="noopener">Comprar produtos</a>
			</div>
		</article>
		<article class="duo__card reveal">
			<div class="duo__img"><img loading="lazy" src="https://revitaliza.com.br/wp-content/uploads/2016/09/IMG_4258.jpg" alt="Equipe Revitaliza em treinamento"></div>
			<div class="duo__body">
				<p class="eyebrow">Mestres da restauração</p>
				<h3>Equipe treinada. Cursos para profissionais.</h3>
				<p>Nossa equipe é formada e treinada em técnicas avançadas de restauração. Também oferecemos <b>cursos e treinamentos</b> para quem quer aprender o ofício.</p>
				<a class="btn btn--line" href="https://wa.me/5527997776667?text=Ol%C3%A1!%20Tenho%20interesse%20nos%20cursos%20e%20treinamentos%20da%20Revitaliza." target="_blank" rel="noopener">Quero saber dos cursos</a>
			</div>
		</article>
	</div>
</section>

<!-- FAQ -->
<section class="sec" id="faq">
	<div class="wrap faq">
		<header class="sec__hd reveal">
			<p class="eyebrow">Dúvidas frequentes</p>
			<h2>Antes de você<br><em>perguntar.</em></h2>
		</header>
		<div class="acc">
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">Qual a diferença entre polimento e restauração?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>O <b>polimento</b> devolve o brilho de pisos que estão opacos, mas sem danos. A <b>restauração</b> vai além: nivela as peças e remove riscos e desgaste com lixas em etapas, antes do polimento e da impermeabilização.</p></div>
			</div>
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">Vou precisar tirar os móveis de casa?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>Não necessariamente. Fazemos o <b>envelopamento</b> de móveis e paredes para protegê-los, e o Combo Top Premium inclui o <b>pacote mudança</b>, em que cuidamos da movimentação para você.</p></div>
			</div>
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">Quais tipos de piso vocês atendem?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>Mármore, granito, pedra São Tomé, ardósia, porcelanato, granilite, ladrilho hidráulico, madeira e paviflex — em pisos, bancadas, mesas e fachadas.</p></div>
			</div>
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">Vocês atendem fora de Vitória e Vila Velha?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>Sim. Nossa base é na Grande Vitória, e já executamos obras no interior do Espírito Santo, como Itapemirim e São Mateus. Fale com a gente para verificar a sua região.</p></div>
			</div>
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">O orçamento tem custo?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>Não. O orçamento é <b>sem compromisso</b>. Use o diagnóstico acima ou chame no WhatsApp com fotos do piso para agilizar.</p></div>
			</div>
			<div class="acc__it reveal">
				<button class="acc__q" aria-expanded="false">Como manter o brilho depois do serviço?<svg><use href="#i-plus"/></svg></button>
				<div class="acc__a"><p>Use produtos neutros e fibras que não agridem a pedra — nosso kit de limpeza diária foi feito para isso. Evite produtos ácidos ou abrasivos, que tiram o brilho e mancham o mármore.</p></div>
			</div>
		</div>
	</div>
</section>

<!-- CTA final -->
<section class="final">
	<div class="wrap final__in reveal">
		<h2>Pronto para ver o seu piso <em>brilhar de novo?</em></h2>
		<p>Orçamento sem compromisso. Envie uma foto pelo WhatsApp e receba uma avaliação.</p>
		<div class="hero__actions">
			<a class="btn btn--wa btn--lg" href="https://wa.me/5527997776667" target="_blank" rel="noopener" data-wa><svg><use href="#i-wa"/></svg>Chamar no WhatsApp</a>
			<a class="btn btn--light btn--lg" href="tel:+552730354060"><svg><use href="#i-phone"/></svg>27 3035-4060</a>
		</div>
	</div>
</section>

</main>

<footer class="ft">
	<div class="wrap ft__in">
		<div>
			<a href="#topo" class="brand brand--card"><img class="brand__logo" src="https://revitaliza.com.br/wp-content/uploads/2016/09/cropped-image-1-300x145.png" width="300" height="145" alt="Revitaliza® – Restauração e Limpeza" loading="lazy"></a>
			<p class="ft__legal">Revitaliza Pisos Restaurações e Limpeza Profissional Ltda.</p>
		</div>
		<ul class="ft__list">
			<li><svg><use href="#i-phone"/></svg><a href="tel:+552730354060">27 3035-4060</a></li>
			<li><svg><use href="#i-wa"/></svg><a href="https://wa.me/5527997776667" target="_blank" rel="noopener">27 99777-6667</a> · <a href="tel:+5527999694060">27 99969-4060</a></li>
			<li><svg><use href="#i-mail"/></svg><a href="mailto:revitaliza@revitaliza.com.br">revitaliza@revitaliza.com.br</a></li>
			<li><svg><use href="#i-mail"/></svg><a href="mailto:vendas@revitaliza.net">vendas@revitaliza.net</a></li>
			<li><svg><use href="#i-pin"/></svg>Vitória / Vila Velha · Espírito Santo</li>
		</ul>
	</div>
	<div class="wrap ft__bot">© <span id="year"></span> Revitaliza®. Todos os direitos reservados.</div>
</footer>

<a class="fab" href="https://wa.me/5527997776667" target="_blank" rel="noopener" aria-label="Falar no WhatsApp" data-wa><svg><use href="#i-wa"/></svg></a>

<!-- Lightbox -->
<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Foto da obra" hidden>
	<button class="lb__x" id="lbClose" aria-label="Fechar"><svg><use href="#i-close"/></svg></button>
	<button class="lb__nav lb__nav--prev" id="lbPrev" aria-label="Anterior"><svg><use href="#i-arrow"/></svg></button>
	<figure><img id="lbImg" alt=""><figcaption id="lbCap"></figcaption></figure>
	<button class="lb__nav lb__nav--next" id="lbNext" aria-label="Próxima"><svg><use href="#i-arrow"/></svg></button>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= $assets ?>js/landing.js"></script>
</body>
</html>
