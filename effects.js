
$(document).ready(function(){
$("#cont").slideDown(2000);
});

//about us
		$("#ph1").click(function(){
			$("#ph1").addClass('ph1');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		
		$("#ph2").click(function(){
			$("#ph2").addClass('ph2');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		$("#ph3").click(function(){
			$("#ph3").addClass('ph3');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		$("#ph4").click(function(){
			$("#ph4").addClass('ph4');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		$("#ph5").click(function(){
			$("#ph5").addClass('ph5');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		$("#ph6").click(function(){
			$("#ph6").addClass('ph6');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});
		$("#ph7").click(function(){
			$("#ph7").addClass('ph7');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			
			});									
		$("#ph8").click(function(){
			$("#ph8").addClass('ph8');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph9").removeClass('ph9');
			
			});			
		$("#ph9").click(function(){
			$("#ph9").addClass('ph9');
			$("#tx1").removeClass('xtext');
			$("#tx1").addClass('xtext1');
			$("#tx1").css('opacity','1');
			setTimeout(function(){$("#tx1").html('')},100);
			setTimeout(function(){$("#tx1").html('X')},300);
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			});			
			
			
		$("#tx1").click(function(){
			
			$("#tx1").css('opacity','0');
			$("#tx1").removeClass('xtext1');
			$("#tx1").addClass('xtext');
			$("#tx1").html(' ');
			
			$("#ph1").removeClass('ph1');
			
			$("#ph2").removeClass('ph2');
			
			$("#ph3").removeClass('ph3');
			
			$("#ph4").removeClass('ph4');
			
			$("#ph5").removeClass('ph5');
			
			$("#ph6").removeClass('ph6');
			
			$("#ph7").removeClass('ph7');
			
			$("#ph8").removeClass('ph8');
			
			$("#ph9").removeClass('ph9');
			});
				
//end about us

//shop
var shopindex;
var shoptext = ""; 
var currenttext = "";
var amount = 0;
		
		
		$(".b1").click(function(){	
				shopindex = 10;
				currenttext = "Czekoladowe Ciastka";
				
				$(".b1").css("border","3px solid white");
				$(".b1").addClass("filter","brightness(100%)");
				
					
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b2").click(function(){	
				shopindex = 3;
				currenttext = "Czekoladowe Mini-muffinki";
				
				$(".b2").css("border","3px solid white");
				$(".b2").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b3").click(function(){	
				shopindex = 6;
				currenttext = "Czekoladowe Jajka";
		
				$(".b3").css("border","3px solid white");
				$(".b3").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b4").click(function(){	
				shopindex = 7;
				currenttext = "Czekoladowe pocałunki";
				
		
				$(".b4").css("border","3px solid white");
				$(".b4").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b5").click(function(){	
				shopindex = 2;
				currenttext = "Bananowe Ciasteczka";
		
		
				$(".b5").css("border","3px solid white");
				$(".b5").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b6").click(function(){	
				shopindex = 4;
				currenttext = "Czekoladowe Ciastka";
		
				$(".b6").css("border","3px solid white");
				$(".b6").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b7").click(function(){	
				shopindex = 12;
				currenttext = "Pączki";
		
				$(".b7").css("border","3px solid white");
				$(".b7").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b8").click(function(){	
				shopindex = 7;
				currenttext = "Pączuszki";
		
				$(".b8").css("border","3px solid white");
				$(".b8").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b9").click(function(){	
				shopindex = 2;
				currenttext = "Chrusty";
		
				$(".b9").css("border","3px solid white");
				$(".b9").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b10").css("border","none");
		});
		$(".b10").click(function(){	
				shopindex = 9;
				currenttext = "Croissant";
		
				$(".b10").css("border","3px solid white");
				$(".b10").css("filter","brightness(100%)");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
		});
	
				$(".b1").mouseenter(function(){
					$(".b1").css("filter","brightness(100%)");
					});
				$(".b2").mouseenter(function(){
					$(".b2").css("filter","brightness(100%)");
					});
				$(".b3").mouseenter(function(){
					$(".b3").css("filter","brightness(100%)");
					});
				$(".b4").mouseenter(function(){
					$(".b4").css("filter","brightness(100%)");
					});
				$(".b5").mouseenter(function(){
					$(".b5").css("filter","brightness(100%)");
					});
				$(".b6").mouseenter(function(){
					$(".b6").css("filter","brightness(100%)");
					});
				$(".b7").mouseenter(function(){
					$(".b7").css("filter","brightness(100%)");
					});
				$(".b8").mouseenter(function(){
					$(".b8").css("filter","brightness(100%)");
					});
				$(".b9").mouseenter(function(){
					$(".b9").css("filter","brightness(100%)");
					});
				$(".b10").mouseenter(function(){
					$(".b10").css("filter","brightness(100%)");
					});
			

		
	
		$("#add").click(function()
		{
			if(document.getElementById("amount").value != "" && (shopindex == 10 || shopindex == 3 || shopindex == 6 || shopindex == 7 || shopindex == 2 ||
			shopindex == 4 || shopindex == 12 || shopindex == 7 || shopindex == 2 || shopindex == 9))
				{
			currenttext = "- "+currenttext +" x "+ document.getElementById("amount").value + "</br>";
			shoptext += currenttext;
			$(".shop").html("TWOJE ZAMOWIENIE:" + "</br>" + shoptext);
			currenttext = " ";
			
				$(".b1").css("border","none");
				$(".b2").css("border","none");
				$(".b3").css("border","none");
				$(".b4").css("border","none");
				$(".b5").css("border","none");
				$(".b6").css("border","none");
				$(".b7").css("border","none");
				$(".b8").css("border","none");
				$(".b9").css("border","none");
				$(".b10").css("border","none");
				
				$(".b1").css("filter","brightness(70%)");
				$(".b2").css("filter","brightness(70%)");
				$(".b3").css("filter","brightness(70%)");
				$(".b4").css("filter","brightness(70%)");
				$(".b5").css("filter","brightness(70%)");
				$(".b6").css("filter","brightness(70%)");
				$(".b7").css("filter","brightness(70%)");
				$(".b8").css("filter","brightness(70%)");
				$(".b9").css("filter","brightness(70%)");
				$(".b10").css("filter","brightness(70%)");
				
				shopindex == 0;
				
				amount += (document.getElementById('amount').value * shopindex);
				$(".amount").html(amount + "zl");
				document.getElementById("amount").value = "";
			}
			else
			{
				$(".shop").html("TWOJE ZAMOWIENIE:" + "</br>" + shoptext);
			}

		});

		
		$("#zero").click(function(){
			$(".amount").html("0zl");
			$(".shop").html("TWOJE ZAMOWIENIE:");
			shoptext = ""; 
			amount = 0;
		});
			
		$("#order").click(function(){
			$(".shop").fadeToggle(500);
			
		});
		
		function isNumberKey(evt){
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				return true;
}
		