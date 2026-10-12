<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= html_escape(isset($title) ? $title : 'iParts') ?></title>
	<link rel="icon" href="<?= base_url('uploads/logo.png') ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
	<?php foreach ((isset($styles) ? $styles : array()) as $css): ?>
		<link href="<?= base_url($css) ?>" rel="stylesheet">
	<?php endforeach; ?>

	<script>
		// Aplica o tema antes de renderizar (evita "piscar" branco)
		(function () {
			var t = null;
			try { t = localStorage.getItem('iparts-theme'); } catch (e) {}
			if (!t) t = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
			document.documentElement.setAttribute('data-theme', t);
		})();
	</script>
</head>
<body>
