<?php     
$CI =& get_instance();
echo form_open(current_url()); 
if($view['context']=='update'){ 
	echo form_hidden($view['form_data']['id']);
}

#pre_form_fields#

?>

#forms_fields#

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>

<script>
$(document).ready(function(){
	<?php if($view['context']=='detail'){ ?>$("#elm").attr("disabled", "disabled");<?php } ?>
	
	#onload_js#

});

#add_js#
</script>