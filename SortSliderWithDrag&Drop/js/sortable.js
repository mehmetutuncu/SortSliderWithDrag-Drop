$(document).ready(function () {
	$("#sirala").sortable({ 
			axis: 'y',  
			revert: true, 
			stop: function (event, ui) {
					var data = $(this).sortable('serialize'); 
					$.ajax({
							type: "POST", 
							data: data, 
							url: "posts/sortSlider.php",  
							success: function (data) { 
									if (data == "başarılı") {
											location.reload();
											
									}
									else {
											alert("başarısız");
									}
							}
					});
			}
	});
});

$('#widget').draggable();  
