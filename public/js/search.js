
	$('#search').on('keyup', function() {
		$value = $(this).val();
		$.ajax({
			type: 'get',
			url: 'searchJax',
			data: {'search':$value},
			success:function(data){
				// console.log(data);
				$('tbody').html(data);
			}
		});
	});
