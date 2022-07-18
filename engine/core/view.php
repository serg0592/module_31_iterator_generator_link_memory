<?php
class View {
	
	//метод генерации страницы без авторизации
	function generate($content_view)
	{
		include '../engine/views/'.$content_view;	
	}
}
?>