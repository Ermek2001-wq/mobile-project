<?php
	require_once('config.php');

	if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on' ) {
	} else {
		header('Location: index.php');
	}

	$pageTitle = 'Добавить товар';

?>

<?php include('./templates/_head.php'); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<?php include('./templates/_header.php'); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form action="add-new.php" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
							<input name="title" type="text" class="form-control" placeholder="Название">
						</div>
						<div class="form-group">
							<select class="form-control" name="category" >
								<option value="Завтрак">Завтрак</option>
								<option value="Обед">Обед</option>
								<option value="Ужин">Ужин</option>
								<option value="Комбо">Комбо</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control" placeholder="Цена">
						</div>



						<div class="form-group pt-3">
							<label for="img">Фото:</label>
							<input name="img" type="file" class="form-control-file" id="img">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="description">Описание:</label>
								<textarea name="description" class="form-control" id="description" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
