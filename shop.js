	
	var ant = document.querySelector("#amount").value;
	var amount = 0;
	
	$(document).ready(function(){
		
		$(".amount").html(amount + "zl");
		$("#add").click(function(){
			if (shopindex = 1)
			{
				amount = amount + (10*ant);
			}
		});
	});