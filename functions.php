<?php

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	// highlight_string(var_export($data, true));
	echo '</pre>';
}