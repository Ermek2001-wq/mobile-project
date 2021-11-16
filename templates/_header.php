<!-- header -->
<div class="header">
	<div class="row">
		<div class="col-sm-6">
			<a href="index.php" class="site-logo">
				<img width="60"  src="img/icons/icon.png">
				<span>ПП</span>Ресторан правильного питания
			</a>
		</div>
		<div class="col-sm-6">
			<div class="admin-link">
				<?php if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on'): ?>
					<a href="./admin.php">
						<img width="38" src="img/icons/padlock.png" alt="">
					</a>
					<a href="./logout.php">
						<img width="38" src="img/icons/logout.png" alt="">
					</a>
				<?php else: ?>
					<a href="./login.php">
						<img width="38" src="img/icons/padlock.png" alt="">
					</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
<!-- // header -->