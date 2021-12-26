$(function(){
	$("#search-input").keyup(function(){
		if ($(this).val().length>=3){
			var sec;
			if($("#customRadio1").prop("checked")){sec=1;}
			if($("#customRadio2").prop("checked")){sec=2;}
			if($("#customRadio3").prop("checked")){sec=3;}
			data = "kelime="+$("#search-input").val()+"&secenek="+sec;			
			$.ajax({
				type:"POST",
				data: data,
				url: "assets/php/search.php",
				success:function(sonuc){
					$("#sonuclar").html(sonuc);
				},
				error:function(){

				}
			});
		}
	});
});