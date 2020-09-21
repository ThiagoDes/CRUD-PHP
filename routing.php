<?php 


$controllers=array(
	'replubica'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('replubica','error');
	}		
}else{
	call('replubica','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'replubica':
		require_once('Model/Replubica.php');
		$controller= new ReplubicaController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>