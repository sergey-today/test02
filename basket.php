<?

	$new_order = "Артикул: ".$_POST['article']." Размер: ".$_POST['size']." Количество: ".$_POST['count']."\r\n";
	file_put_contents("orders.txt", $new_order, FILE_APPEND | LOCK_EX);

?>