
//$('document').ready(setPhoneMask);
$('#phone-type-mobile').click(setPhoneMask);
$('#phone-type-city').click(setPhoneMask);

//$('#order-type-2').click(function(){$('#comment').val("");});


function setPhoneMask(){
    $('#phone').val('');
    
    if (!$('#phone-type-city').prop('checked')){
       //var pattern ="[0-9]{10}";
       //var placeholder = 'Ваш телефон [обязательно]';
       //var phoneAddone= '+7';
       //var phoneExample= 'Например: 912 000-43-21';
   }
   else{
       //var pattern ="[0-9]{6}";
       //var placeholder = 'Код города + номер телефона';
       //var phoneAddone= '+7(8332)';
       //var phoneExample= 'Например: +7(833)2 43-45-95';
       $('#phone').val('+7(833)2 ');
   }
    
    //$('#phone').prop('pattern',pattern);
    //$("#phone").prop('placeholder', placeholder);
    //$("#phone-addon").html(phoneAddone);
    //$("#phone-example").html(phoneExample);
}


/*
 * setPhoneMask-jQ()
 * вешаю маску на input 
 *
 */
 
function setPhoneMaskjQ(){
    
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








