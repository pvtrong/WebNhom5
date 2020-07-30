$(document).ready(function(){
	$('.add-cart').click(function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		$.ajax({
			url:url,
			type:'GET',
			success:function(res){
				$('#menucart').load(location.href + ' #menucart');
				$('#modal-msg').modal('show');
			}
		});
	});

});