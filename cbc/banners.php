<?php

header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
header('Content-Type: text/html; charset=utf-8');




//NÃO MEXER


$banner[0]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="responsive-image"></a>';
$banner[1]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/2.jpg" alt="img" class="responsive-image"></a>';
$banner[2]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/3.jpg" alt="img" class="responsive-image"></a>';
$banner[3]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/4.jpg" alt="img" class="responsive-image"></a>';
$banner[4]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/5.jpg" alt="img" class="responsive-image"></a>';
$banner[5]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/6.jpg" alt="img" class="responsive-image"></a>';
$banner[6]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/7.jpg" alt="img" class="responsive-image"></a>';
$banner[7]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/8.jpg" alt="img" class="responsive-image"></a>';
$banner[8]['image'] = '<a href="index.html"><img src="http://www.d-zyne.com/APPS/ZION/banners/9.jpg" alt="img" class="responsive-image"></a>';
/*$banner[1]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/2.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[2]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/3.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[3]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/4.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[4]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/5.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[5]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/6.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[6]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/7.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';
$banner[7]['image'] = '<a href="#"><img data-original="http://www.d-zyne.com/APPS/ZION/banners/8.jpg" src="http://www.d-zyne.com/APPS/ZION/banners/1.jpg" alt="img" class="preload-image responsive-image"></a>';*/



	
// convertemos em json e colocamos na tela
    echo json_encode($banner);
	
	/*

//testa se houve erro no parsing! Vai acusar erro de string mal-formada (JSON_ERROR_SYNTAX) 
if (json_last_error() == 0) { echo '- Nao houve erro! O parsing foi perfeito'; }	else {	echo 'Erro!</br>'; switch (json_last_error()) { case JSON_ERROR_DEPTH: echo ' - profundidade maxima excedida'; break; case JSON_ERROR_STATE_MISMATCH: echo ' - state mismatch'; break; case JSON_ERROR_CTRL_CHAR: echo ' - Caracter de controle encontrado'; break; case JSON_ERROR_SYNTAX: echo ' - Erro de sintaxe! String JSON mal-formada!'; break; case JSON_ERROR_UTF8: echo ' - Erro na codificação UTF-8'; break; default: echo ' – Erro desconhecido'; break; } }

*/

?>