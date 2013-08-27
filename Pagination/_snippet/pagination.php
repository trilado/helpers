<div class="pagination">
<?php if($count > 1): ?>
	<ul>
		<?php if($p > 1): ?>
		<li><a href="~/<?= $url .'/'. ($p - 1) ?>" class="btn-pagination">«</a></li>
		<?php endif ?>

		<?php for($i = 1; $i <= $count; $i++): ?>
			<?php if($i == $p): ?>
			<li class="active"><span><?= $i ?></span></li>
			<?php else: ?>
			<li><a href="~/<?= $url .'/'. $i ?>" class="btn-pagination"><?= $i ?></a></li>
			<?php endif ?>
		<?php endfor ?>

		<?php if($p < $count): ?>
		<li><a href="~/<?= $url .'/'. ($p + 1) ?>" class="btn-pagination">»</a></li>
		<?php endif ?>
	</ul>
<?php else: ?>
	<p class="muted">Página 1 de 1</p>
<?php endif ?>
</div>