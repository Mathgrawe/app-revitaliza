<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php foreach ((isset($scripts) ? $scripts : array()) as $js): ?>
	<script src="<?= base_url($js) ?>"></script>
<?php endforeach; ?>
</body>
</html>
