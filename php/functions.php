<?php

function site_url($base, $page)
{
	if (!$base)
	{
		$base = substr($self, 1, strrpos($_SERVER['PHP_SELF'],".")-1);
	}
	
	return $base.$page;
}

?>