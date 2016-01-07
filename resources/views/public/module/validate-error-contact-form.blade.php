<?php /*var_dump($oldInput)*/ ?>
<section id="contact-form"  class="validate-error-header">
    
        
        <div class="row">  
          <div class="container">  
          <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-0 col-md-offset-0">
              <div class="error-form">
              <h2 class="section-heading text-center text-white">Oops!</h2> 
              <p class="text-center text-white text-uppercase">
                  Есть
                  @if(count($validateErrors)==1)
                   одна небольшая ошибка. <br> Исправьте её и отправьте заявку.
                  @else
                   {{ count($validateErrors) }} небольшие ошибки. <br> Исправьте их и отправьте заявку.
                  @endif
                  
                  
              </p>
              
              <div class="panel panel-success">
                  <div class="panel-body">
                      
                      <div class="alert alert-danger">
                          <!--p class="text-uppercase text-uci-black"-->
                            <?php $i=0; ?>  
                            @foreach($validateErrors as $error)
                            <p> {{++$i}}. {{ $error }} </p>
                            @endforeach
                          <!--/p--> 
                      </div>
                      
                                 
                    {!! Form::open(['route'=>'orderValidate']) !!}
                        
                        <div class="form-group">
                            <!--label class="form-control" for="phone">ваш номер телефона</label-->
                            
                            <!--div class="radio">
                                <label class="radio-inline">
                                    <input type="radio"  id='phone-type-mobile' name='phone-type' checked="true">
                                    <span class="text-uci-green">мобильный</span>                                        
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"  name='phone-type' id='phone-type-city' >
                                    <span class="text-uci-blue">городской</span>                                        
                                </label>
                            </div-->
                            
                            <small id="phone-example" class="text-muted">пример: 912 000-43-21 / +7(833)2 43-45-95</small>
                            <input class="form-control input-lg" type="tel" id="phone" name="phone" placeholder="Ваш телефон" value="{!! $oldInput['phone'] !!}" >
                            
                            <!--span id="phone-example" class="text-muted">Например: 912 000-43-21 или +7(833)2 43-45-95</span-->
                        </div>
                    <hr>
                        <div class="form-group">
                        <!--label class="form-control hidden sr-only" for="name">как к вам обращаться</label-->
                            <small id="" class="text-muted">пример: Люк Скайуокер</small>
                            <input class="form-control input-lg" id="name" name="name" value="{!! $oldInput['name'] !!}" placeholder="Ваше имя" >
                            
                        </div>
                    <hr>
                        <div class="form-group">
                        <!--label class="form-control" for="comment">комментарий, пожелание или вопрос</label-->
                        <small id="" class="text-muted">пример:  "<span class="hidden-xs">Привет из пустынь Татуина.</span> А фэт-байки делаете?"</small>
                        <textarea type="" rows="4" class="form-control input-lg" id="comment" name="comment" placeholder="Ваш вопрос, пожелание или ,например, адрес, куда подъехать за велосипедом... ">{!!$oldInput['comment']!!}</textarea>
                        
                            
                        </div>
                    
                        <input id="order-type" name="order-type" value="{!! $oldInput['order-type'] !!}" hidden="">
                    
                    <button type="submit" id='submit' class="btn btn-lg btn-uci-green btn-block" >ОТПРАВИТЬ ЗАЯВКУ</button> 
                    {!! Form::close() !!}
                
                  <br>
                  <div class=" ">    
                    <!--a href="#contact-data" class="page-scroll  ">
                        Или позвоните нам  <br>
                        <span class="glyphicon glyphicon-phone"></span> 43-45-95<br>
                    </a-->
                    <p class="text-muted text-center text-uppercase ">отправьте заявку и мы перезвоним для уточнения деталей.</p>
                  </div> 
              
                  </div>
              </div>
              
                <!--p class="lead  text-uppercase text-white text-center"><br>Отправьте заявку и мы перезвоним для уточнения деталей.</p-->
                <p class="lead  text-uppercase text-white text-center">
                    <br>Или позвоните нам  <br>
                    <span class="glyphicon glyphicon-phone"></span> 43-45-95<br>
                </p>
                    
              </div>       
          </div>
        </div>
        </div>
</section>