$(document).ready(function(){
	$("body").on('change', ".brand", function() {
		if ($(this).val() != 0){
			$.ajax({
				url: "/ajax.php",
				type: "POST",
				dataType: "html",
				data: "TYPE=sections&SECTION_ID=" + $(this).val(),
				success: function(data){
					$('.select-model').html(data)
				}
			});
		};
	});
	$("body").on('change', ".model", function() {
		console.info("hello");
		if ($(this).val() != 0){
			$.ajax({
				url: "/ajax.php",
				type: "POST",
				dataType: "html",
				data: "TYPE=elements&SECTION_ID=" + $(this).val(),
				success: function(data){
					$('.select-package').html(data)
				}
			});
		};
	});
	$("body").on('change', ".package", function() {		
		if ($(this).val() != 0){
			var $brand = $(".select-brand option:selected").text();
			var $model = $(".select-model option:selected").text();
			$('.show-button').html(
				'<a class="btn-primary" href="/catalog/' + $brand + '/' + $model + '/' + $(this).val() + '/">Показать</a>'
			);
		};
	});
});