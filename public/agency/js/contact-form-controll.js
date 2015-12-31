
$('document').ready(setPhoneMask);
$('#phone-type-mobile').click(setPhoneMask);
$('#phone-type-city').click(setPhoneMask);

//$('#order-type-2').click(function(){$('#comment').val("");});




/*
 * setPhoneMask()
 * вешаю маску на input 
 *
 */
 
function setPhoneMask(){
    
   $('#phone').val('');
   $('#submit').prop('disabled',false);
   
   if (!$('#phone-type-city').prop('checked')){
       var mask ="+7(999)999-99-99";
       var plh = 'ваш мобильный [обязательно]';
   }
   else{
     var mask ="+7(833)299-99-99";
     var plh = 'ваш городской / прямой [обязательно]';
   }
   
    $('#phone').inputmask(mask, {
                        "oncomplete": function(){$('#submit').prop('disabled',false);}, // AJAX  FUNCTION
                        "onincomplete": function(){$('#submit').prop('disabled',true);}, // DOM FUNCTION
                        "oncleared": function(){$('#submit').prop('disabled',false);} }); // DOM FUNCTION
     $("#phone").prop('placeholder', plh);                  
} 






