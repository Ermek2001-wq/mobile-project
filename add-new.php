<?php

	require_once('config.php');
	if ( @$_SESSION['login'] != 'on' ) {
		header('Location: index.php');
	}

	$title = htmlspecialchars($_POST['title']);
	$price = htmlspecialchars($_POST['price']);
	$description = htmlspecialchars($_POST['description']);
	$category = htmlspecialchars($_POST['category']);



	if ( isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '' ) {
		move_uploaded_file($_FILES['img']['tmp_name'], './img/products/' . $_FILES['img']['name'] );
		$fileName = $_FILES['img']['name'];
	} else {
		$fileName = 'nophoto.jpg';
	}

	$sql = "INSERT INTO products (title, price, description, img, category)
					VALUES (:title, :price, :description, :img, :category)";

	$stmt = $db->prepare($sql);

	$stmt->bindValue(':title', $title);
	$stmt->bindValue(':price', $price);
	$stmt->bindValue(':description', $description);
	$stmt->bindValue(':img', $fileName);
	$stmt->bindValue(':category', $category);


	$stmt->execute();

	header('Location: admin-success.php');

?>