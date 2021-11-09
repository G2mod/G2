<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');

if(!file_exists('data/var.txt')){
	$data = file_get_contents('https://g2mod.click/dtool/var.txt');
	file_put_contents('data/var.txt',$data);
} else {
	$d2 = file_get_contents('data/var.txt');
	echo $s2;	
};
/*
if(!file_exists('data/var.php')){
};
if(!file_exists('data/var.php')){
};
 
@system('clear');
$logo = "\n ########   ########   ####   ####   ########  ########  
###    ### ###    ### ###### ###### ###    ### ###    ### 
###              ###  ### ##### ### ###    ### ###    ### 
###            ###    ###  ###  ### ###    ### ###    ### 
###   ####   ###      ###       ### ###    ### ###    ### 
###``    ###  ###       ###       ### ###    ### ###    ### 
 ########  ########## ###       ###  ########  ########   \n \n https://G2mod.click \n \n ";
echo "$logo";
 */
?>
