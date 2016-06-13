<?php
if(qa_is_logged_in()==true){
	$id = qa_get_logged_in_userid();
	$level = qa_get_logged_in_level();
	
	if($level>99){
		$SQLa = '';
	} else{
		$SQLa = 'UPDATE swjaco11_AllVisites SET all_visit=all_visit+1';
	}
}else{
	$SQLa = 'UPDATE swjaco11_AllVisites SET all_visit=all_visit+1';
}

$SQLb = 'SELECT all_visit FROM swjaco11_AllVisites';

qa_db_query_sub($SQLa);
$ALL = qa_db_query_sub($SQLb);

$language = array(
	'all_visit' => 'Wszystkich odwiedzaj¹cych: '
);

echo $language['all_visit'].$ALL

?>