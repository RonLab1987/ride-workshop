
//$('document').ready(setPhoneMask);
//$('#phone-type-mobile').click(setPhoneMask);
//$('#phone-type-city').click(setPhoneMask);

$('#order-type-1').click(function(){orderTypeSelect(1);});
$('#order-type-2').click(function(){orderTypeSelect(2);});
$('#order-type-3').click(function(){orderTypeSelect(3);});
$('#order-type-4').click(function(){orderTypeSelect(4);});
$('#order-type-0').click(orderTypeUnselect);


function orderTypeSelect(type){
    switch(type){
        case 1: 
            var message ="Увезём, сделаем и привезём.";
            var submessage ="Пожалуйста, укажите адрес.";
            var orderType = "забираем-делаем-привозим";
        break;
        case 2: 
            var message ="Приедем и сделаем";
            var submessage ="Пожалуйста, укажите адрес.";
            var orderType = "выездной ремонт";
        break;
        case 3: 
            var message ="Примем и сделаем.";
            var submessage ="Отправьте заявку и договоримся о времени.";
            var orderType = "сам привезёт";
        break;
        case 4: 
            var message ="Рассмотрим ваш вариант";
            var submessage ="Пожалуйста, напишите как будет удобно вам.";
            var orderType = "свой вариант";
        break;
   }
   
   $("#contact-form-message").html(message);
   $("#contact-form-submessage").html(submessage);
   $("#contact-form-alert").removeClass('hidden');
   $("#order-type").val(orderType);
    
}

function orderTypeUnselect(){
   $("#contact-form-message").html("");
   $("#contact-form-submessage").html("");
   $("#contact-form-alert").addClass('hidden');
   $("#order-type").val("отмена выбора");
}



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








