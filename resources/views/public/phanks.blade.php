
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ВелоМастерская "КАТАЙ!" г. Киров</title>

    @include('public.module.css-include')
  </head>
  <body class="bg-darkest-gray" >
    @include('public.module.price-navbar')
    
    <section id='phanks'>
    <div class="container">
        <div class="row">
            <p class="lead text-center text-uppercase text-white">
                спасибо тебе, о любимый клиент <br>
                {!! $name !!}
            </p>
        </div>
    </div>
    </section>   
    
    
    @include('public.module.js-include')
  </body>
</html>



