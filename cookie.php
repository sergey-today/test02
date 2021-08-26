<?

	$cookie_opt = array (
		'expires' => time() + 3600,
		'path' => '/',
		'domain' => 'sergey.today',
		'secure' => true,
		'httponly' => true,
		'samesite' => 'None'
	);

	setcookie('region', $_POST['region']);

?>