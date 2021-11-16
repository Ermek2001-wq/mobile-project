<!-- Left aside -->
<div class="col-md-3 col-lg-2">
	<ul class="nav">
		<li class="nav__element"><a href="index.php" class="nav__link">Все блюда</a></li>

		<?php if ( isset($_GET['category']) && $_GET['category'] == 'Завтрак' ): ?>
			<li class="nav__element"><a href="index.php?category=Завтрак" class="nav__link nav__link--active">Завтрак</a></li>
		<?php else: ?>
			<li class="nav__element"><a href="index.php?category=Завтрак" class="nav__link">Завтрак</a></li>
		<?php endif ?>

		<?php if ( isset($_GET['category']) && $_GET['category'] == 'Обед' ): ?>
			<li class="nav__element"><a href="index.php?category=Обед" class="nav__link nav__link--active">Обед</a></li>
		<?php else: ?>
			<li class="nav__element"><a href="index.php?category=Обед" class="nav__link">Обед</a></li>
		<?php endif ?>

		<?php if ( isset($_GET['category']) && $_GET['category'] == 'Ужин' ): ?>
			<li class="nav__element"><a href="index.php?category=Ужин" class="nav__link nav__link--active">Ужин</a></li>
		<?php else: ?>
			<li class="nav__element"><a href="index.php?category=Ужин" class="nav__link">Ужин</a></li>
		<?php endif ?>

		<?php if ( isset($_GET['category']) && $_GET['category'] == 'Комбо' ): ?>
			<li class="nav__element"><a href="index.php?category=Комбо" class="nav__link nav__link--active">Комбо</a></li>
		<?php else: ?>
			<li class="nav__element"><a href="index.php?category=Комбо" class="nav__link">Комбо</a></li>
		<?php endif ?>

	</ul>
</div>
<!-- // Left aside -->
