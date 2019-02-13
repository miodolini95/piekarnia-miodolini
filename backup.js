		$("#add").click(function(){
			
			currenttext = "- "+currenttext +" x "+ document.getElementById("amount").value + "</br>";
			shoptext += currenttext;
			$(".shop").html("TWOJE ZAMOWIENIE:" + "</br>" + shoptext);
			currenttext = " ";
			
			
			
			if(shopindex == 1)
			{
				amount += (document.getElementById('amount').value * 10);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 2)
			{
				amount += (document.getElementById('amount').value * 3);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 3)
			{
				amount += (document.getElementById('amount').value * 6);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 4)
			{
				amount += (document.getElementById('amount').value * 7);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 5)
			{
				amount += (document.getElementById('amount').value * 2);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 6)
			{
				amount += (document.getElementById('amount').value * 4);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 7)
			{
				amount += (document.getElementById('amount').value * 12);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 8)
			{
				amount += (document.getElementById('amount').value * 7);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 9)
			{
				amount += (document.getElementById('amount').value * 2);
				$(".amount").html(amount + "zl");
			}
			else if(shopindex == 10)
			{
				amount += (document.getElementById('amount').value * 9);
				$(".amount").html(amount + "zl");
			}
		});