<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	$.ajaxSetup({
	    headers:{
	        'X-CSRF-TOKEN':'{!! csrf_token() !!}'
	    }
	});
</script>