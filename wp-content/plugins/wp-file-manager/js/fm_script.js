jQuery(window).load(function(e) {
				jQuery('.wfmrs').delay( 10000 ).slideDown('slow');
				jQuery('.lokhal_verify_email_popup').slideDown();
		       jQuery('.lokhal_verify_email_popup_overlay').show();
			});
   jQuery(document).ready(function() {
				jQuery('#wp_file_manager').elfinder({
					url : ajaxurl,
					customData : {action: 'mk_file_folder_manager', _wpnonce: security_key },
					uploadMaxChunkSize : 1048576000000,
					defaultView : 'list',
					height: 500,
					lang : fmlang,
				});				
				jQuery('.close_fm_help').on('click', function(e) {
					var what_to_do = jQuery(this).data('ct');
					 jQuery.ajax({
						 type : "post",
						 url : ajaxurl,
						 data : {action: "mk_fm_close_fm_help", what_to_do : what_to_do},
						 success: function(response) {
							jQuery('.wfmrs').slideUp('slow');
						 }
						});	});
						
   jQuery('#fm_lang').change(function(e) {
    var fm_lang = jQuery(this).val();
	window.location.href = 'admin.php?page=wp_file_manager&lang='+fm_lang;
});	
jQuery('#fm_theme').change(function(e) {
    var fm_theme = jQuery(this).val();
	window.location.href = 'admin.php?page=wp_file_manager&theme='+fm_theme;
});								
						
	 jQuery('.lokhal_cancel').click(function(e) { 
	    e.preventDefault();  
		var email = jQuery('#verify_lokhal_email').val();   
		var fname = jQuery('#verify_lokhal_fname').val();   
		var lname = jQuery('#verify_lokhal_lname').val(); 
		jQuery('.lokhal_verify_email_popup').slideUp();
		jQuery('.lokhal_verify_email_popup_overlay').hide();		
		send_ajax('cancel', email, fname, lname);
    });
	 jQuery('.verify_local_email').click(function(e) { 
	    e.preventDefault();  
		var email = jQuery('#verify_lokhal_email').val(); 
		var fname = jQuery('#verify_lokhal_fname').val();   
		var lname = jQuery('#verify_lokhal_lname').val();  
		jQuery('.lokhal_verify_email_popup').slideUp();
		jQuery('.lokhal_verify_email_popup_overlay').hide();		
		send_ajax('verify', email, fname, lname);
    });
						
});
function send_ajax(todo, email, fname, lname) {
	        jQuery.ajax({
						 type : "post",
						 url : ajaxurl,
						 data : {action: "mk_filemanager_verify_email", 'todo' : todo, 'vle_nonce': vle_nonce, 'lokhal_email': email, 'lokhal_fname': fname, 'lokhal_lname': lname},
						 success: function(response) {
							if(response == '1') {
			alert('A confirmation link has been sent to your email address. Please click on the link to verify your email address.');
							} else if(response == '2') {
								alert('Error - Email Not Sent.');
							}
						 }
						});	
}