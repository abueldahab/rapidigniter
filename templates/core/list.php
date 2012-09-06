<?php
$CI =& get_instance();
if(!$view['form_data']){
	echo '<p>No Data</p>';
}
else {
	$header = array_keys($view['form_data'][0]);
	
	#pre_form_fields#
	
	if($view['edit']){
		$header[] = 'Action';
		$action = TRUE;
		$edit = TRUE;
	}
	if($view['delete']){
		if(!$action){
			$header[] = 'Action'
		}
		$delete = TRUE;
	}

	for($i=0;$i<count($view['form_data']);$i++){
		$id = array_values($view['form_data'][$i]);
		if ($edit) { $view['form_data'][$i]['Edit'] = anchor('/#item_#/edit/'.$id[0],'Edit','class = "edit"'); }
		if ($delete) { $view['form_data'][$i]['Edit'] .= anchor('#item_#/delete/'.$id[0],'Delete',array('onClick'=>'return check_delete(\'/#item_#/delete/'.$id[0].' \')','class' => "delete")); }                                                            
	}
$this->table->set_heading($header); 
echo $this->table->generate($view['form_data']);
}
if($view['context']=='add'){
	echo anchor('/#Item#/add','Add New #Item#');
}
?>
	
<script>
$(document).ready(function(){
	#onload_js#



});

#add_js#
</script>