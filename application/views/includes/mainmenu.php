<?php
/* Page Definitions in format url, PageName */
$menuitems = array();
$menuitems[0] = array('home','Home');
$menuitems[1] = array('about','About Us');

/* Loop through menu array */
foreach ($menuitems as $item) {
	echo '<li class="dropdown dropdown-mega">';
	echo '<a id="'.$item[0].'" class="dropdown-item dropdown-toggle" href="'.base_url().$item[0].'" >';
	echo $item[1];
	echo '</a>';
	echo '</li>';
}
?>