$(document).ready(function() {
$("#otheramount").hide();
$("#listedblock").hide();

var raffleticket =  (parseInt($("#numberofraffle20").val())*20) + (parseInt($("#numberofraffle50").val())*50);
var indticket = (parseInt($("#numberofticket500").val())*500) + (parseInt($("#numberofticket1000").val())*1000);

var donation = parseFloat($("#donationamount").val());
var adtotal =  (parseInt($("#goldpg").val()) * $("#hgoldpg").val()) + (parseInt($("#silverpg").val()) * $("#hsilverpg").val()) + (parseInt($("#fullpg").val()) * $("#hfullpg").val()) + (parseInt($("#halfpg").val()) * $("#hhalfpg").val()) + (parseInt($("#bronzepg").val()) * $("#hbronzepg").val()) + (parseInt($("#quarterpg").val()) * $("#hquarterpg").val());

$("input[name='submit'], input:reset, input:checkbox, input:radio, #container input:text,input:button").uniform();
//-------------------------------------------------------------------------	
          
	$("input[name='don']").live('change',function () {
		if ($("input[name='don']:checked").val() == '1000') {
		    $('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket + indticket + adtotal; 
			$('#amount').val(othertotal.toFixed(2));
		}
		else if ($("input[name='don']:checked").val() == '500')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket + indticket + adtotal;
			$('#amount').val(othertotal.toFixed(2));
			
		}
		else if ($("input[name='don']:checked").val() == '250')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal;
			$('#amount').val(othertotal.toFixed(2));
		
		}
		else if ($("input[name='don']:checked").val() == '100')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal;
			$('#amount').val(othertotal.toFixed(2));
		}
		else if ($("input[name='don']:checked").val() == '75')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal; 
			$('#amount').val(othertotal.toFixed(2));
		}
		else if ($("input[name='don']:checked").val() == '50')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal;	
			$('#amount').val(othertotal.toFixed(2));	
		}
		else if ($("input[name='don']:checked").val() == '25')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal;
			$('#amount').val(othertotal.toFixed(2));
			//$('#amount').val(othertotal + extrazeros);
		}
		else if ($("input[name='don']:checked").val() == '0')  {
			$('#otheramount').attr('class', '');
			$('#otheramount').fadeOut("slow");
			$('#other').val('');
			$('#other').attr('class', 'text');
			$('div.formError.otherformError').children().css('display','none');
			var donation1 = parseInt($('input:radio[name=don]:checked').val());
			$('#donationamount').val(donation1);
			donation = donation1;
			var othertotal = donation1 + raffleticket +indticket + adtotal;
			if (indticket < 1) {
				$('#listedblock').hide(400);
				$('#listedname').attr('class', 'text');
			    $('div.formError.listednameformError').children().css('display','none');
			}
			$('#amount').val(othertotal.toFixed(2));
		}
		else {
			$('#otheramount').fadeIn("slow");
			$('#other').attr('class', 'validate[required] text');
			$('div.formError.otherformError').children().css('display','block');
			donation1 = parseFloat($('#other').val());
                        donation = donation1; 
			var othertotal = donation1 + raffleticket +indticket + adtotal;
			$('#amount').val(othertotal.toFixed(2));
			$('#other').keyup(function() {
				donation1 = parseFloat($('#other').val());
				donation = donation1;
				$('#donationamount').val(donation1);
				var othertotal = donation1 + raffleticket +indticket + adtotal;
				$('#amount').val(othertotal.toFixed(2));
				
				if (donation1 > .99) {
					$('#listedblock').fadeIn(200).delay(100).show(400);
					$('#listedname').attr('class', 'validate[required] text');
					$('div.formError.listednameformError').children().css('display','block');
				}
				else {
					if (indticket < 1) {
						$('#listedblock').hide(400);
						$('#listedname').attr('class', 'text');
					    $('div.formError.listednameformError').children().css('display','none');
					}
				}
			});
		}
	});

	/////////////////////////////////////////////	
	/*Protects for error on first submit on don; Keep radio where it should be*/
	var radio_val = parseFloat($('#donationamount').val());
	var radio_valint = parseInt($('#donationamount').val());
	
	if (radio_val > .99) {
		$('#listedblock').fadeIn(200).delay(100).show(400);
		$('#listedname').attr('class', 'validate[required] text');
		$('div.formError.listedname').children().css('display','block');
	}
	else {
		$('#listedblock').hide(400);
		$('#listedname').attr('class', 'text');
		$('div.formError.listedname').children().css('display','none');
	}
	if(radio_valint == 1000) {
		$('#don1000').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 1000)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 500) {
		$('#don500').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 500)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 250) {
		$('#don250').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 250)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 100) {
		$('#don100').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 100)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint== 75) {
		$('#don75').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 75)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 50) {
		$('#don50').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 50)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 25) {
		$('#don25').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 25)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else if (radio_valint == 0) {
		$('#don0').parent().attr('class','checked');
		$("input[name='don']").each(function() {
			if ($(this).val() == 0)
				return;
			else
		    	$(this).parent().removeClass('checked');
		  });
	}
	else {
		$("#other").val(radio_val);
		$('#donother').parent().attr('class','checked');
	}
	

    //contact me checks
    var check_val = $('#contactme').val();
    if (check_val == 'Yes') {
        $('#contactme').parent().attr('class', 'checked');
        $('#contactme').val('Yes');
    }
    else {
        $('#contactme').parent().attr('class', '');
    }

    $('#contactme').unbind("click").click(function() {
        if ($(this).parent().hasClass('checked')) {
            $(this).parent().attr('class', '');
            $('#contactme').val('No');
        }
        else {
            $(this).parent().attr('class', 'checked');
            $('#contactme').val('Yes');
        }
    });
	
 $("#numberofraffle20").live('change',
 function() {
        var fintotal = parseInt($('#numberofraffle20').val()) * 20;
		fintotal += parseInt($('#numberofraffle50').val()) * 50;
		var total = fintotal + indticket + donation + adtotal;
		//$('#amount').val(total+extrazeros);
		$('#amount').val(total.toFixed(2));
		raffleticket = fintotal;
 			});
 $("#numberofraffle50").live('change',
 function() {
        var fintotal = parseInt($('#numberofraffle50').val()) * 50;
		fintotal += parseInt($('#numberofraffle20').val()) * 20;
		var total = fintotal + indticket + donation + adtotal;
		//$('#amount').val(total+extrazeros);
		$('#amount').val(total.toFixed(2));
		raffleticket = fintotal;
 	});
$("#numberofticket1000").live('change', 
function() {
        var indtotal = parseInt($('#numberofticket1000').val()) * 1000;
		indtotal += parseInt($('#numberofticket500').val()) * 500;
		var total = indtotal + raffleticket + donation + adtotal;
		//$('#amount').val(total +extrazeros);
		$('#amount').val(total.toFixed(2));
					
		if (parseInt($('#numberofticket1000').val()) > 0) {
			$('#listedblock').fadeIn(200).delay(100).show(400);
			$('#listedname').attr('class', 'validate[required] text');
			$('div.formError.listednameformError').children().css('display','block');
		}
		else {
			if (donation < 1) {
				$('div.formError.listednameformError').children().css('display','none');
				$('#listedblock').hide(400);
				$('#listedname').attr('class', 'text');
			}
		}
		indticket = indtotal;
 	});
$("#numberofticket500").live('change', 
function() {
        var indtotal = parseInt($('#numberofticket500').val()) * 500;
		indtotal += parseInt($('#numberofticket1000').val()) * 1000;
		var total = indtotal + raffleticket + donation + adtotal;
		$('#amount').val(total.toFixed(2));
		
		if (parseInt($('#numberofticket500').val()) > 0) {
					$('#listedblock').fadeIn(200).delay(100).show(400);
					$('#listedname').attr('class', 'validate[required] text');
					$('div.formError.listednameformError').children().css('display','block');
				}
		else {
			if (donation < 1) {
				$('div.formError.listednameformError').children().css('display','none');
				$('#listedblock').hide(400);
				$('#listedname').attr('class', 'text');
			}
		}
		indticket = indtotal;
	});
/*On error return checkboxes*/
	$("div#adspace input[type='hidden']").each(function(index) {
		var trueid = '#' + $(this).attr('id').substr(1);
		trueid = String(trueid);
		if (($(this).val()) == 1) {
			$(trueid).parent().attr('class', 'checked');
		}
		else {
			$(trueid).parent().removeClass('checked');
		}
	});
	$("div#adspace input[type='checkbox']").unbind("click").click(function() {
		var checkval = 0; 
		var h_id = '#h' + $(this).attr('id');
		if ($(this).parent().hasClass('checked')) {
			$(this).parent().removeClass('checked');
			$(h_id).val(0);
		}
		else {
			$(this).parent().attr('class', 'checked');
			$(h_id).val(1);
		}
		$("div#adspace input[type='checkbox']").each(function() {
			if ($(this).parent().hasClass('checked')) {
			 	var val = parseInt($(this).attr('value'));
				checkval += val;
			}
		});
		adtotal = checkval;
		var othertotal = donation + raffleticket +indticket + adtotal;
		$('#amount').val(othertotal.toFixed(2));
	});
    ////////////////////////////////////////////
    /*For errors */
    $('.perinfo').click(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    $('.ccinfo').click(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    $('.ticketinfo').click(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    $('.perinfo').change(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    $('.ccinfo').change(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    $('.ticketinfo').change(function() {
        $('.formErrorContent').css('visibility', 'hidden');
        $('.formErrorArrow ').css('visibility', 'hidden');
    });
    ////////////////////////////////////////////////////
    $("#container input:text").focus(function() {
        if ($(this).parent().is('dd')) {
            $(this).closest('dl').addClass('highlight');
        }
        else
        $(this).parent().addClass("highlight");
    });
    $("#container input:text").blur(function() {
        if ($(this).parent().is('dd')) {
            $(this).closest('dl').removeClass('highlight');
        }
        else
        $(this).parent().removeClass("highlight");
    });

    $("select").focus(function() {
        if ($(this).parent().is('dd')) {
            $(this).closest('dl').addClass('highlight');
        }
        else
        $(this).parent().addClass("highlight");
    });
    $("select").blur(function() {
        if ($(this).parent().is('dd')) {
            $(this).closest('dl').removeClass('highlight');
        }
        else
        $(this).parent().removeClass("highlight");
    });
    /////////////////////////////////////////
    /*On reset function*/
    $("#reset").click(function() {
        $(":input").not(":button, :submit, :reset, :hidden, :radio, :checkbox, #amount").each(function() {
            this.value = this.defaultValue;
            if ($(":input").is(":text")) {
                this.value = "";
            }
        });

        var sal = $('#salutation');
        if (sal.val() == "") {
                sal.val($('option:first', sal).val());
                }
        else  {
               	$("#salutation option:first").remove();
                $("#salutation").prepend('<option value="">Choose One</option>');
                sal.val($('option:first', sal).val());
                }


        var ph_type = $('#phonetype');
        if (ph_type.val() == "")
        ph_type.val($('option:first', ph_type).val());
        else {
            $("#phonetype option:first").remove();
            $("#phonetype").prepend('<option value="">Choose One</option>');
            ph_type.val($('option:first', ph_type).val());
        }

        var expMonth = $('#expMonth');
        expMonth.val($('option:first', expMonth).val());
        var expYear = $('#expYear');
        expYear.val($('option:first', expYear).val());

        var state = $('#state');
        if (state.val() == "")
        state.val($('option:first', state).val());
        else {
            $("#state option:first").remove();
            $("#state").prepend('<option value="">Select a state...</option>');
            state.val($('option:first', state).val());
        }

    });
	
    /////////////////////////////////////////////////
    /*On Submit Work*/
	
    $("#theform").submit(function() {			
        $('.formErrorContent').css('visibility', 'visible');
        $('.formErrorArrow').css('visibility', 'visible');

		var callit = parseInt($('#amount').val());
		if ((!callit) || (callit == 0)) {
			$('#amount').attr('value','');
			$('#amount').attr('class', 'validate[required] text');
			$('div.formError.amountformError').children().css('display','block');
		}
		else {
			$('#amount').attr('class', 'text');
			$('div.formError.amountformError').children().css('display','none');
		}

        var check_fin = $('#contactme').val();
        $('#h_contactme').val(check_fin);
        if (check_fin == 'No') {
            $('#solicit').val('Do Not Solicit');
        }


    });
});
