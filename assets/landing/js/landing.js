/* ==========================================================================
   Revitaliza® — Landing (jQuery)
   ========================================================================== */
(function ($, window, document) {
	'use strict';

	var WA_NUMBER = '5527997776667';
	var $win = $(window);
	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------- Utilidades ---------- */

	// Gerador pseudo-aleatório com semente (mármore sempre igual)
	function rng(seed) {
		return function () {
			seed |= 0; seed = seed + 0x6D2B79F5 | 0;
			var t = Math.imul(seed ^ seed >>> 15, 1 | seed);
			t = t + Math.imul(t ^ t >>> 7, 61 | t) ^ t;
			return ((t ^ t >>> 14) >>> 0) / 4294967296;
		};
	}

	function onVisible($els, cb, opts) {
		if (!('IntersectionObserver' in window)) { $els.each(function () { cb(this); }); return; }
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (e.isIntersecting) { cb(e.target); io.unobserve(e.target); }
			});
		}, $.extend({ threshold: .15, rootMargin: '0px 0px -40px 0px' }, opts));
		$els.each(function () { io.observe(this); });
	}

	/* ---------- Header, progresso, FAB, nav ativa ---------- */

	function initChrome() {
		var $hd = $('.hd');
		var $fab = $('.fab');
		var $bar = $('<div class="progress" aria-hidden="true"></div>').prependTo('body');
		var $links = $('.nav a[href^="#"]').not('.nav__cta');
		var sections = $('main section[id]').get();
		var ticking = false;

		function update() {
			var y = $win.scrollTop();
			var h = document.documentElement.scrollHeight - window.innerHeight;
			$hd.toggleClass('is-solid', y > 20);
			$fab.toggleClass('is-on', y > window.innerHeight * .7);
			$bar.css('transform', 'scaleX(' + (h > 0 ? y / h : 0) + ')');

			var current = null;
			$.each(sections, function (i, s) {
				if (s && s.getBoundingClientRect().top < window.innerHeight * .4) { current = s.id; }
			});
			$links.each(function () { $(this).toggleClass('is-active', $(this).attr('href') === '#' + current); });

			updateSteps();
			ticking = false;
		}

		$win.on('scroll resize', function () {
			if (!ticking) { ticking = true; window.requestAnimationFrame(update); }
		});
		update();

		// Menu mobile
		var $burger = $('#burger'), $nav = $('#nav');
		$burger.on('click', function () {
			var open = !$nav.hasClass('is-open');
			$nav.toggleClass('is-open', open);
			$burger.attr('aria-expanded', open).attr('aria-label', open ? 'Fechar menu' : 'Abrir menu');
		});
		$nav.on('click', 'a', function () {
			$nav.removeClass('is-open');
			$burger.attr('aria-expanded', false).attr('aria-label', 'Abrir menu');
		});

		$('#year').text(new Date().getFullYear());
	}

	/* ---------- Linha do processo ---------- */

	var $steps, $stepList;
	function updateSteps() {
		if (!$stepList || !$stepList.length) { return; }
		var r = $stepList[0].getBoundingClientRect();
		var vh = window.innerHeight;
		var p = Math.min(1, Math.max(0, (vh * .75 - r.top) / (r.height + vh * .25)));
		$stepList[0].style.setProperty('--p', p.toFixed(3));
		$steps.each(function (i) {
			$(this).toggleClass('is-lit', p >= i / ($steps.length - 1) - .02 || p >= .98);
		});
	}

	/* ---------- Reveal, contadores, spotlight ---------- */

	function initReveal() {
		// Escalonamento automático entre irmãos
		$('.reveal').each(function () {
			var $sib = $(this).parent().children('.reveal');
			var i = $sib.index(this);
			if (i > 0) { this.style.setProperty('--d', Math.min(i, 6) * 0.07 + 's'); }
		});
		onVisible($('.reveal'), function (el) { $(el).addClass('is-in'); });

		onVisible($('[data-count]'), function (el) {
			var $el = $(el), to = +$el.data('count');
			if (reduceMotion) { return; }
			$({ n: 0 }).animate({ n: to }, {
				duration: 1400, easing: 'swing',
				step: function (n) { $el.text(Math.round(n)); },
				complete: function () { $el.text(to); }
			});
		}, { threshold: .6 });

		$(document).on('mousemove', '.svc__card, .combo', function (e) {
			var r = this.getBoundingClientRect();
			this.style.setProperty('--sx', (e.clientX - r.left) + 'px');
			this.style.setProperty('--sy', (e.clientY - r.top) + 'px');
		});

		$steps = $('.step');
		$stepList = $('.steps');
		updateSteps();
	}

	/* ---------- Demo de polimento ---------- */

	function paintMarble(w, h) {
		var c = document.createElement('canvas');
		c.width = w; c.height = h;
		var x = c.getContext('2d');
		var rand = rng(1907);

		var g = x.createLinearGradient(0, 0, w, h);
		g.addColorStop(0, '#f7f3ec');
		g.addColorStop(.5, '#efe8dd');
		g.addColorStop(1, '#f5efe6');
		x.fillStyle = g;
		x.fillRect(0, 0, w, h);

		// Nuvens suaves
		for (var i = 0; i < 26; i++) {
			var cx = rand() * w, cy = rand() * h, rr = (.15 + rand() * .35) * w;
			var rg = x.createRadialGradient(cx, cy, 0, cx, cy, rr);
			var tone = rand() > .5 ? '170,155,132' : '255,255,255';
			rg.addColorStop(0, 'rgba(' + tone + ',' + (.06 + rand() * .1) + ')');
			rg.addColorStop(1, 'rgba(' + tone + ',0)');
			x.fillStyle = rg;
			x.fillRect(0, 0, w, h);
		}

		// Veios: longos, diagonais e "quebradiços", como no mármore de verdade
		var scale = w / 600, base = .62;
		function vein(width, alpha, color, blur, branchy) {
			// começa na borda esquerda ou no topo
			var px, py;
			if (rand() < .5) { px = -10; py = rand() * h; } else { px = rand() * w * .8; py = -10; }
			var ang = base + (rand() - .5) * .5, step = 4 * scale, ph = rand() * 10;
			var pts = [[px, py]];
			while (px > -50 && px < w + 50 && py > -50 && py < h + 50 && pts.length < 2000) {
				ang += (base - ang) * .04 + (rand() - .5) * .45;
				px += Math.cos(ang) * step; py += Math.sin(ang) * step;
				pts.push([px, py]);
			}
			x.save();
			x.filter = blur ? 'blur(' + blur + 'px)' : 'none';
			x.strokeStyle = 'rgba(' + color + ',' + alpha + ')';
			x.lineCap = 'round';
			for (var i = 1; i < pts.length; i++) {
				var t = i / pts.length;
				x.lineWidth = width * Math.max(.15, Math.pow(Math.abs(Math.sin(t * 5 + ph)), 1.5) * 1.3);
				x.beginPath(); x.moveTo(pts[i - 1][0], pts[i - 1][1]); x.lineTo(pts[i][0], pts[i][1]); x.stroke();
				if (branchy && rand() < .01) {
					var bx = pts[i][0], by = pts[i][1], ba = ang + (rand() > .5 ? 1 : -1) * (.5 + rand() * .7);
					x.lineWidth = width * .35;
					x.beginPath(); x.moveTo(bx, by);
					for (var k = 0; k < 14 + rand() * 20; k++) { ba += (rand() - .5) * .5; bx += Math.cos(ba) * step; by += Math.sin(ba) * step; x.lineTo(bx, by); }
					x.stroke();
				}
			}
			x.restore();
		}
		for (var a = 0; a < 3; a++) { vein(22 * scale, .10, '130,114,92', 10 * scale, false); }
		for (var b = 0; b < 3; b++) { vein(3.2 * scale, .5, '104,90,72', .8 * scale, true); }
		for (var d = 0; d < 2; d++) { vein(2.4 * scale, .7, '176,138,88', .3 * scale, true); }
		for (var e = 0; e < 4; e++) { vein(1 * scale, .3, '90,80,66', 0, true); }
		return c;
	}

	function paintDirt(ctx, marble, w, h) {
		var rand = rng(42);
		ctx.globalCompositeOperation = 'source-over';
		ctx.clearRect(0, 0, w, h);
		ctx.save();
		ctx.filter = 'grayscale(.6) brightness(.76) contrast(.6) blur(' + Math.round(w / 140) + 'px)';
		ctx.drawImage(marble, 0, 0, w, h);
		ctx.restore();
		ctx.fillStyle = 'rgba(112,92,64,.38)';
		ctx.fillRect(0, 0, w, h);

		// Manchas
		for (var i = 0; i < 18; i++) {
			var cx = rand() * w, cy = rand() * h, r = (.04 + rand() * .12) * w;
			var g = ctx.createRadialGradient(cx, cy, 0, cx, cy, r);
			g.addColorStop(0, 'rgba(70,55,36,' + (.15 + rand() * .25) + ')');
			g.addColorStop(.7, 'rgba(70,55,36,.06)');
			g.addColorStop(1, 'rgba(70,55,36,0)');
			ctx.fillStyle = g;
			ctx.beginPath(); ctx.arc(cx, cy, r, 0, Math.PI * 2); ctx.fill();
		}
		// Riscos
		ctx.lineCap = 'round';
		for (var s = 0; s < 70; s++) {
			var x0 = rand() * w, y0 = rand() * h, len = (.03 + rand() * .15) * w, an = rand() * Math.PI;
			ctx.strokeStyle = rand() > .5 ? 'rgba(255,255,255,.18)' : 'rgba(40,30,20,.22)';
			ctx.lineWidth = .5 + rand() * 1.2;
			ctx.beginPath(); ctx.moveTo(x0, y0);
			ctx.quadraticCurveTo(x0 + Math.cos(an) * len * .5 + (rand() - .5) * 10, y0 + Math.sin(an) * len * .5, x0 + Math.cos(an) * len, y0 + Math.sin(an) * len);
			ctx.stroke();
		}
		// Granulado
		var img = ctx.getImageData(0, 0, w, h), px = img.data;
		for (var p = 0; p < px.length; p += 4) {
			var n = (rand() - .5) * 26;
			px[p] += n; px[p + 1] += n; px[p + 2] += n;
		}
		ctx.putImageData(img, 0, 0);
	}

	function initPolish() {
		var $box = $('#polish');
		if (!$box.length) { return; }
		var canvas = document.getElementById('polishCanvas');
		var ctx = canvas.getContext('2d', { willReadFrequently: true });
		var $stone = $box.find('.polish__stone');
		var $hint = $('#polishHint'), $done = $('#polishDone');
		var $meter = $('#polishMeter'), $pct = $('#polishPct');
		var probe = document.createElement('canvas');
		probe.width = probe.height = 48;
		var pctx = probe.getContext('2d', { willReadFrequently: true });

		var W, H, dpr, marble, brush, last = null, touched = false, finished = false, measureTimer = null;

		function setup() {
			dpr = Math.min(window.devicePixelRatio || 1, 2);
			W = Math.round($box.width() * dpr);
			H = Math.round($box.height() * dpr);
			if (!W || !H) { return; }
			canvas.width = W; canvas.height = H;
			marble = paintMarble(W, H);
			$stone.css('background-image', 'url(' + marble.toDataURL('image/jpeg', .9) + ')');
			brush = Math.max(34, W * .085);
			paintDirt(ctx, marble, W, H);
			finished = false;
			$(canvas).css({ opacity: 1, transition: '' });
			$done.removeClass('is-on');
			measure();
		}

		function dab(x, y) {
			var g = ctx.createRadialGradient(x, y, 0, x, y, brush);
			g.addColorStop(0, 'rgba(0,0,0,1)');
			g.addColorStop(.55, 'rgba(0,0,0,.75)');
			g.addColorStop(1, 'rgba(0,0,0,0)');
			ctx.fillStyle = g;
			ctx.beginPath(); ctx.arc(x, y, brush, 0, Math.PI * 2); ctx.fill();
		}

		function stroke(x, y) {
			ctx.globalCompositeOperation = 'destination-out';
			if (last) {
				var dx = x - last.x, dy = y - last.y, dist = Math.sqrt(dx * dx + dy * dy);
				var steps = Math.max(1, Math.ceil(dist / (brush * .25)));
				for (var i = 1; i <= steps; i++) { dab(last.x + dx * i / steps, last.y + dy * i / steps); }
			} else {
				dab(x, y);
			}
			ctx.globalCompositeOperation = 'source-over';
			last = { x: x, y: y };
			if (!measureTimer) { measureTimer = setTimeout(function () { measureTimer = null; measure(); }, 120); }
		}

		function measure() {
			pctx.clearRect(0, 0, 48, 48);
			pctx.drawImage(canvas, 0, 0, 48, 48);
			var d = pctx.getImageData(0, 0, 48, 48).data, clean = 0;
			for (var i = 3; i < d.length; i += 4) { if (d[i] < 70) { clean++; } }
			var p = clean / (48 * 48);
			var shown = Math.min(100, Math.round(p / .7 * 100));
			$meter.css('width', shown + '%');
			$pct.text(shown + '%');
			if (p >= .7 && !finished) { finish(); }
		}

		function finish() {
			finished = true;
			$meter.css('width', '100%'); $pct.text('100%');
			$(canvas).css({ transition: 'opacity 1.2s ease', opacity: 0 });
			$hint.addClass('is-hidden');
			setTimeout(function () { $done.addClass('is-on'); }, 500);
		}

		function point(e) {
			var r = canvas.getBoundingClientRect();
			var t = e.originalEvent.touches ? e.originalEvent.touches[0] : e.originalEvent;
			return { x: (t.clientX - r.left) * dpr, y: (t.clientY - r.top) * dpr, cx: t.clientX - r.left, cy: t.clientY - r.top, w: r.width, h: r.height };
		}

		var down = false;
		$box.on('pointerdown', function (e) {
			if ($(e.target).closest('.polish__done').length) { return; }
			down = true; last = null;
			if (!touched) { touched = true; $hint.addClass('is-hidden'); }
			var p = point(e); stroke(p.x, p.y);
		});
		$box.on('pointermove', function (e) {
			var p = point(e);
			this.style.setProperty('--mx', p.cx + 'px');
			this.style.setProperty('--my', p.cy + 'px');
			if (!reduceMotion) {
				this.style.setProperty('--ry', ((p.cx / p.w - .5) * 6).toFixed(2) + 'deg');
				this.style.setProperty('--rx', (-(p.cy / p.h - .5) * 6).toFixed(2) + 'deg');
			}
			// No desktop, polir só de passar o mouse; no toque, arrastando
			if (down || e.originalEvent.pointerType === 'mouse') {
				if (!touched) { touched = true; $hint.addClass('is-hidden'); }
				if (!finished) { stroke(p.x, p.y); }
			}
		});
		$box.on('pointerleave', function () {
			last = null; down = false;
			this.style.setProperty('--rx', '0deg');
			this.style.setProperty('--ry', '0deg');
		});
		$(document).on('pointerup pointercancel', function () { down = false; last = null; });

		// Botão "sujar de novo"
		$('<button type="button" class="link">Sujar de novo e polir outra vez</button>')
			.css({ padding: '6px 0 0', marginTop: '4px' })
			.appendTo($done)
			.on('click', function () { touched = false; $hint.removeClass('is-hidden'); setup(); });

		// Demonstração automática: uma passada da politriz
		function autoDemo() {
			if (touched || reduceMotion) { return; }
			var t0 = null, dur = 1500;
			function frame(ts) {
				if (touched) { last = null; return; }
				if (!t0) { t0 = ts; }
				var t = Math.min(1, (ts - t0) / dur);
				var x = W * (.12 + .3 * t);
				var y = H * (.18 + .12 * Math.sin(t * Math.PI * 3));
				stroke(x, y);
				if (t < 1) { window.requestAnimationFrame(frame); } else { last = null; }
			}
			window.requestAnimationFrame(frame);
		}

		setup();
		onVisible($box, function () { setTimeout(autoDemo, 900); }, { threshold: .5 });

		var rw = $box.width(), resizeT;
		$win.on('resize', function () {
			clearTimeout(resizeT);
			resizeT = setTimeout(function () {
				if (Math.abs($box.width() - rw) > 40) { rw = $box.width(); setup(); }
			}, 250);
		});
	}

	/* ---------- Filtros (serviços e galeria) ---------- */

	function initFilters() {
		$('[data-filter]').on('click', function () {
			var f = $(this).data('filter');
			$(this).addClass('is-on').attr('aria-selected', true).siblings().removeClass('is-on').attr('aria-selected', false);
			$('.svc__card').each(function () {
				var show = f === 'all' || $(this).data('cat') === f;
				$(this).toggleClass('is-out', !show);
				if (show) { $(this).css({ opacity: 0, transform: 'translateY(12px)' }).addClass('is-in'); }
			});
			window.requestAnimationFrame(function () { $('.svc__card').not('.is-out').css({ opacity: '', transform: '' }); });
		});

		$('[data-gfilter]').on('click', function () {
			var f = $(this).data('gfilter');
			$(this).addClass('is-on').siblings().removeClass('is-on');
			$('.gal__it').each(function () {
				var show = f === 'all' || $(this).data('g') === f;
				$(this).toggleClass('is-out', !show);
				if (show) { $(this).addClass('is-in'); }
			});
		});
	}

	/* ---------- Lightbox ---------- */

	function initLightbox() {
		var $lb = $('#lb'), $img = $('#lbImg'), $cap = $('#lbCap');
		var items = [], idx = 0, lastFocus = null, sx = null;

		function show(i) {
			idx = (i + items.length) % items.length;
			var $a = $(items[idx]);
			var thumb = $a.find('img').attr('src');
			var full = $a.attr('href');
			$img.attr({ src: thumb, alt: $a.find('img').attr('alt') });
			var pre = new Image();
			pre.onload = function () { if ($(items[idx]).attr('href') === full) { $img.attr('src', full); } };
			pre.src = full;
			$cap.html($a.find('span').html());
		}

		$('.gal').on('click', '.gal__it', function (e) {
			e.preventDefault();
			items = $('.gal__it').not('.is-out').get();
			lastFocus = this;
			show(items.indexOf(this));
			$lb.prop('hidden', false);
			window.requestAnimationFrame(function () { $lb.addClass('is-on'); });
			$('body').css('overflow', 'hidden');
			$('#lbClose').trigger('focus');
		});

		function close() {
			$lb.removeClass('is-on');
			setTimeout(function () { $lb.prop('hidden', true); $img.attr('src', ''); }, 300);
			$('body').css('overflow', '');
			if (lastFocus) { lastFocus.focus(); }
		}

		$('#lbClose').on('click', close);
		$('#lbPrev').on('click', function () { show(idx - 1); });
		$('#lbNext').on('click', function () { show(idx + 1); });
		$lb.on('click', function (e) { if (e.target === this) { close(); } });
		$(document).on('keydown', function (e) {
			if ($lb.prop('hidden')) { return; }
			if (e.key === 'Escape') { close(); }
			if (e.key === 'ArrowLeft') { show(idx - 1); }
			if (e.key === 'ArrowRight') { show(idx + 1); }
		});
		$lb.on('touchstart', function (e) { sx = e.originalEvent.touches[0].clientX; });
		$lb.on('touchend', function (e) {
			if (sx === null) { return; }
			var dx = e.originalEvent.changedTouches[0].clientX - sx;
			if (Math.abs(dx) > 50) { show(idx + (dx < 0 ? 1 : -1)); }
			sx = null;
		});
	}

	/* ---------- FAQ ---------- */

	function initFaq() {
		$('.acc__q').on('click', function () {
			var $q = $(this), open = $q.attr('aria-expanded') === 'true';
			$('.acc__q[aria-expanded="true"]').not($q).attr('aria-expanded', false).next().stop().slideUp(280);
			$q.attr('aria-expanded', !open).next().stop()[open ? 'slideUp' : 'slideDown'](280);
		});
	}

	/* ---------- Diagnóstico (wizard) ---------- */

	function initWizard() {
		var $wiz = $('#wiz');
		if (!$wiz.length) { return; }
		var step = 1, total = 4, interest = null;
		var $err = $('#wizErr'), $next = $('#wizNext'), $back = $('#wizBack');

		var COMBOS = {
			'Basic': 'Seu piso parece estar em bom estado. Uma limpeza técnica com impermeabilização deve devolver o aspecto de novo e proteger contra manchas.',
			'Plus': 'Para brilho perdido, manchas e rejunte encardido, o ideal é limpar o rejunte, polir com pasta abrasiva e impermeabilizar — com tudo protegido por envelopamento.',
			'Top Premium': 'Riscos profundos, trincas ou desnível pedem restauração completa: nivelamento, lixamento em etapas, troca de rejunte, polimento e impermeabilização.'
		};

		function val(name) { return $.trim($wiz.find('[name="' + name + '"]:checked').val() || ''); }
		function problems() { return $wiz.find('[name="problema"]:checked').map(function () { return this.value; }).get(); }

		function validate() {
			if (step === 1 && !val('material')) { return 'Escolha o material (ou "Não sei").'; }
			if (step === 2 && !problems().length) { return 'Marque pelo menos uma opção.'; }
			if (step === 3 && !val('local')) { return 'Diga se é residência, condomínio ou comércio.'; }
			if (step === 4 && !$.trim($('#nome').val())) { return 'Qual o seu nome?'; }
			return '';
		}

		function go(n, back) {
			step = n;
			$wiz.toggleClass('is-back', !!back);
			$wiz.find('.wiz__pane').removeClass('is-on').filter('[data-step="' + n + '"]').addClass('is-on');
			$('#wizBar').css('width', Math.min(n, total) / total * 100 + '%');
			$('#wizStep').text(Math.min(n, total));
			$back.prop('disabled', n === 1);
			$next.html(n === total ? 'Ver recomendação <svg><use href="#i-sparkle"/></svg>' : 'Continuar <svg><use href="#i-arrow"/></svg>');
			$err.text('');
			$wiz.toggleClass('is-done', n > total);
		}

		function result() {
			var weight = 0;
			$wiz.find('[name="problema"]:checked').each(function () { weight = Math.max(weight, +$(this).data('w')); });
			var combo = weight >= 3 ? 'Top Premium' : weight === 2 ? 'Plus' : 'Basic';
			var area = $('#area').val();
			var nome = $.trim($('#nome').val());
			var bairro = $.trim($('#bairro').val());
			var data = [
				['Material', val('material')],
				['Problemas', problems().join(', ')],
				['Local', val('local') + ' · ~' + area + ' m²'],
				['Bairro', bairro || '—']
			];

			$('#resCombo').text(combo);
			$('#resWhy').text(COMBOS[combo] + (interest && interest !== combo ? ' Você também se interessou pelo combo ' + interest + ' — falamos dos dois.' : ''));
			$('#resSum').empty().append($.map(data, function (d) {
				return $('<li>').append($('<b>').text(d[0]), $('<span>').text(d[1]));
			}));

			var msg = 'Olá, Revitaliza! Fiz o diagnóstico pelo site.\n\n' +
				'*Nome:* ' + nome + '\n' +
				'*Material:* ' + data[0][1] + '\n' +
				'*O que quero resolver:* ' + data[1][1] + '\n' +
				'*Local:* ' + data[2][1] + '\n' +
				(bairro ? '*Bairro/cidade:* ' + bairro + '\n' : '') +
				'*Recomendação do site:* Combo ' + combo + '\n' +
				(interest && interest !== combo ? '*Também tenho interesse no:* Combo ' + interest + '\n' : '') +
				'\nGostaria de um orçamento. Posso enviar fotos do piso.';
			$('#resSend').attr('href', 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(msg));
		}

		$next.on('click', function () {
			var e = validate();
			if (e) {
				$err.text(e);
				$wiz.find('.wiz__pane.is-on').stop(true).animate({ marginLeft: -8 }, 60).animate({ marginLeft: 8 }, 60).animate({ marginLeft: 0 }, 60);
				return;
			}
			if (step === total) { result(); }
			go(step + 1);
		});
		$back.on('click', function () { if (step > 1) { go(step - 1, true); } });
		$('#wizRestart').on('click', function () { $wiz[0].reset(); updateRange(); go(1, true); });

		// Avança sozinho ao escolher uma opção única
		$wiz.on('change', 'input[type="radio"]', function () {
			$err.text('');
			if (step === 1) { setTimeout(function () { if (step === 1) { $next.trigger('click'); } }, 280); }
		});
		$wiz.on('change', 'input[type="checkbox"]', function () { $err.text(''); });
		$wiz.on('keydown', 'input[type="text"]', function (e) {
			if (e.key === 'Enter') { e.preventDefault(); $next.trigger('click'); }
		});

		var $range = $('#area');
		function updateRange() {
			var v = +$range.val(), min = +$range.attr('min'), max = +$range.attr('max');
			$('#areaOut').text((v >= max ? max + '+' : v) + ' m²');
			$range[0].style.setProperty('--fill', ((v - min) / (max - min) * 100) + '%');
		}
		$range.on('input', updateRange);
		updateRange();

		// Botões dos combos levam ao diagnóstico lembrando a escolha
		$('[data-pick-combo]').on('click', function () {
			interest = $(this).data('pick-combo');
		});

		go(1);
	}

	/* ---------- WhatsApp com mensagem padrão ---------- */

	function initWa() {
		var text = encodeURIComponent('Olá, Revitaliza! Vim pelo site e gostaria de um orçamento.');
		$('a[data-wa]').attr('href', 'https://wa.me/' + WA_NUMBER + '?text=' + text);
	}

	/* ---------- Boot ---------- */

	$(function () {
		initChrome();
		initReveal();
		initPolish();
		initFilters();
		initLightbox();
		initFaq();
		initWizard();
		initWa();
	});

})(jQuery, window, document);
