
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
  <body>
    <?php
        //var_dump($errors->all()) ;
        //var_dump($oldInput);
        //foreach ($errors->)
        
        $validateErrors = $errors->all();
    ?>
    @include('public.module.validate-error-navbar')  
    @include('public.module.validate-error-contact-form')
    @include('public.module.contact')
    
    
    
    @include('public.module.js-include')
  </body>
</html>
