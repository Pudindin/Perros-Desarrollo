
<?php

	require_once('query_template.php');
	require_once('user.php');
	$query = ('SELECT comentario FROM perros');
	$data = $view->data(get_items($db_con,$query)[0]);
	echo json_encode($data);

?>
