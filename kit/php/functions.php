<?php
// used ONLY for generating the final download package
if (!isset($_ROOT)) 
	$_ROOT = "";

function getLEVEL()
{
	global $_LEVEL;
	
	$level = $_LEVEL == 0 ? '' : '';
	$level = $_LEVEL > 0 ? str_repeat('../', $_LEVEL) : $level;

	return $level;
}
function setLEVEL($level = false)
{
	global $_LEVEL;
	$_LEVEL = $level ? $level : LEVEL;
}
function getURL($query = false)
{
	global $locale;
	global $_ROOT;
	
	if (!$query)
		return getLEVEL() . $_ROOT;
	
	if (!is_array($query))
		return $query ? (DEV ? 'index.php' : getLEVEL() . 'index.html') : getLEVEL();
	else
	{
		$url = DEV ?
		( !isset($query[0]) ? "?" . http_build_query($query, '', '&amp;') . '&amp;lang=' . $locale : 'index.php?lang=' . $locale . '&page=' . $query[0] ) :
		getLEVEL() . implode("/", $query) . ".html?lang=" . $locale;
		
		if (isset($query['layout_type']) || isset($query['menu_position']) || isset($query['style']))
		{
			if (DEV)
				$url = 'index.php?lang=' . $locale . '&page=' . $query['page'];
			else
				$url = $query['page'] . ".html?lang=" . $locale;
			
			if (isset($query['layout_type'])) $url .= "&amp;layout_type=" . $query['layout_type'];
			if (isset($query['menu_position'])) $url .= "&amp;menu_position=" . $query['menu_position'];
			if (isset($query['style'])) $url .= "&amp;style=" . $query['style'];
			return $url;
		}
		
		if (isset($_GET['layout_type']) || isset($_GET['menu_position']) || isset($_GET['style']))
		{
			if (isset($query[0]))
			{
				if (DEV)
					$url = 'index.php?lang=' . $locale . '&page=' . $query[0]; 
				else
					$url = getLEVEL() . $query[0] . ".html?lang=" . $locale;
			}
			else
			{
				if (DEV)
					$url = 'index.php?lang=' . $locale . '&page=' . $query['page'];
				else
					$url = getLEVEL() . implode("/", $query) . ".html?lang=" . $locale;
			}
			
			if (isset($_GET['layout_type'])) $url .= "&amp;layout_type=" . $_GET['layout_type'];
			if (isset($_GET['menu_position'])) $url .= "&amp;menu_position=" . $_GET['menu_position'];
			if (isset($_GET['style'])) $url .= "&amp;style=" . $_GET['style'];
		}
		return $url;
	}
}

if (!DEV && $section != 'index') setLEVEL(1);
if (!DEV && $sub_section != 'index') setLEVEL(2);