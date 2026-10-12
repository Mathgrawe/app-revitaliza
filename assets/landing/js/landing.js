/* =========================================================
   iParts - Landing Page (jQuery)
   ========================================================= */
(function ($) {
	'use strict';

	var $janela = $(window);
	var $html   = $('html');

	var Landing = {

		iniciar: function () {
			this.navegacao();
			this.tema();
			this.menuMobile();
			this.revelarAoRolar();
			this.contadores();
			this.servicos();
			this.paralaxe();
			this.linkAtivo();
			this.inscricaoEmail();
		},

		// Sombra na navbar ao rolar + botão voltar ao topo
		navegacao: function () {
			var $nav   = $('#siteNav');
			var $topo  = $('#toTop');

			function aoRolar() {
				var y = $janela.scrollTop();
				$nav.toggleClass('scrolled', y > 30);
				$topo.toggleClass('show', y > 600);
			}

			$janela.on('scroll', aoRolar);
			aoRolar();

			$topo.on('click', function () {
				$('html, body').animate({ scrollTop: 0 }, 600);
			});
		},

		// Alterna claro/escuro e salva a escolha
		tema: function () {
			$('#themeToggle').on('click', function () {
				var proximo = $html.attr('data-theme') === 'dark' ? 'light' : 'dark';

				$html.addClass('theme-anim').attr('data-theme', proximo);
				try { localStorage.setItem('iparts-theme', proximo); } catch (e) {}

				setTimeout(function () { $html.removeClass('theme-anim'); }, 600);
			});
		},

		// Fecha o menu mobile ao clicar num link
		menuMobile: function () {
			var $menu = $('#menu');

			$menu.on('click', 'a[href^="#"]:not(.dropdown-toggle)', function () {
				if ($menu.hasClass('show')) {
					bootstrap.Collapse.getOrCreateInstance($menu[0]).hide();
				}
			});
		},

		// Animação de entrada ao rolar
		revelarAoRolar: function () {
			var $elementos = $('.reveal, .reveal-left, .reveal-zoom');

			$elementos.each(function () {
				var atraso = $(this).data('delay');
				if (atraso) this.style.setProperty('--d', atraso + 'ms');
			});

			this._aoFicarVisivel($elementos, 0.15, function (el) {
				$(el).addClass('in');
			});
		},

		// Números que contam até o valor final
		contadores: function () {
			this._aoFicarVisivel($('.counter'), 0.6, function (el) {
				var $el   = $(el);
				var casas = parseInt($el.data('decimals') || 0, 10);

				$({ n: 0 }).animate({ n: parseFloat($el.data('to')) }, {
					duration: 1600,
					easing: 'swing',
					step: function (atual) {
						$el.text(atual.toFixed(casas).replace('.', ','));
					}
				});
			});
		},

		// Categorias de serviço + setas
		servicos: function () {
			var $botoes  = $('.cat-btn');
			var $paineis = $('.service-track');

			function mostrarCategoria(slug) {
				$botoes.removeClass('active').filter('[data-cat="' + slug + '"]').addClass('active');

				$paineis.removeClass('show');
				var $painel = $paineis.filter('[data-panel="' + slug + '"]');
				void $painel[0].offsetWidth; // reinicia a animação dos cards
				$painel.addClass('show').scrollLeft(0);

				if ($janela.width() < 992) {
					$botoes.filter('.active')[0].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
				}
			}

			// No fim da faixa, as setas passam para a próxima categoria
			function deslizar(direcao) {
				var faixa  = $paineis.filter('.show')[0];
				var maximo = faixa.scrollWidth - faixa.clientWidth;
				var noFim  = direcao > 0 ? faixa.scrollLeft >= maximo - 5 : faixa.scrollLeft <= 5;

				if (!noFim) {
					faixa.scrollBy({ left: direcao * faixa.clientWidth * 0.8, behavior: 'smooth' });
					return;
				}

				var indice  = $botoes.index($botoes.filter('.active'));
				var proximo = $botoes.eq((indice + direcao + $botoes.length) % $botoes.length);
				mostrarCategoria(proximo.data('cat'));
			}

			$botoes.on('click', function () { mostrarCategoria($(this).data('cat')); });
			$('[data-goto]').on('click', function () { mostrarCategoria($(this).data('goto')); });
			$('#nextBtn').on('click', function () { deslizar(1); });
			$('#prevBtn').on('click', function () { deslizar(-1); });
		},

		// Cards do hero seguem o mouse (apenas desktop)
		paralaxe: function () {
			var $visual = $('.hero-visual');
			if (!$visual.length || !window.matchMedia('(hover: hover) and (min-width: 992px)').matches) return;

			var $itens = $visual.find('.float-card, .float-icon');
			var $area  = $visual.parent();

			$area.on('mousemove', function (e) {
				var r = $visual[0].getBoundingClientRect();
				var x = (e.clientX - r.left) / r.width - 0.5;
				var y = (e.clientY - r.top) / r.height - 0.5;

				$itens.each(function (i) {
					var forca  = i % 2 ? 14 : -18;
					var girar  = $(this).hasClass('clock') ? ' rotate(-12deg)' : '';
					$(this).css('transform', 'translate(' + (x * forca) + 'px,' + (y * forca) + 'px)' + girar);
				});
			});

			$area.on('mouseleave', function () {
				$itens.css('transform', '');
			});
		},

		// Destaca no menu a seção visível
		linkAtivo: function () {
			var $links = $('.site-nav .nav-link[href^="#"]').not('[href="#"]');

			$janela.on('scroll', function () {
				var posicao = $janela.scrollTop() + 120;
				var $atual  = $();

				$links.each(function () {
					var $secao = $($(this).attr('href'));
					if ($secao.length && $secao.offset().top <= posicao) $atual = $(this);
				});

				$links.removeClass('active');
				$atual.addClass('active');
			});
		},

		// Inscrição de e-mail no rodapé (sem backend por enquanto)
		inscricaoEmail: function () {
			$('#newsletterForm').on('submit', function (e) {
				e.preventDefault();
				$(this).find('input').val('').attr('placeholder', 'Obrigado! Em breve entraremos em contato.');
			});
		},

		// Executa o callback uma vez quando o elemento entra na tela
		_aoFicarVisivel: function ($elementos, limite, callback) {
			if (!('IntersectionObserver' in window)) {
				$elementos.each(function () { callback(this); });
				return;
			}

			var observador = new IntersectionObserver(function (entradas) {
				$.each(entradas, function (_, entrada) {
					if (entrada.isIntersecting) {
						callback(entrada.target);
						observador.unobserve(entrada.target);
					}
				});
			}, { threshold: limite, rootMargin: '0px 0px -40px 0px' });

			$elementos.each(function () { observador.observe(this); });
		}
	};

	$(function () { Landing.iniciar(); });

})(jQuery);
