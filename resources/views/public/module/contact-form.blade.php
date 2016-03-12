
<section id="contact-form"  class="contact-form">
 
        <div class="row">  
          <div class="container">  
          <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-0 col-md-offset-0">
              <h2 class="section-heading text-center text-white">Быстрый способ</h2>
              <!--p class="lead  text-uppercase text-white "><br>Всего 1 клик чтобы сделать заказ или задать вопрос. Мы перезвоним вам в течении пары минут для уточнения деталей.</p-->
              <p class="lead  text-uppercase text-white text-center ">
                  Оформить заявку или задать вопрос. 
              </p>
                
                
              
              <div class="panel panel-success">
                  <div class="panel-body">
                     
                     <div class="alert alert-success hidden" role="alert" id="contact-form-alert"> 
                         <p class="text-center text-uppercase" id="contact-form-message"></p>
                         <p class="text-center text-lowercase" id="contact-form-submessage"></p>
                         <p class="text-right"> <a href="#contact-form" class="text-muted " id='order-type-0'><small>отменить выбор</small></a></p>
                     </div> 
                                 
                    {!! Form::open(['route'=>'orderValidate']) !!}
                        <div class="form-group">
                            
                            
                            <small id="phone-example" class="text-muted">пример: 912 337-07-70 или 43-45-95</small>
                            <input class="form-control input-lg" type="tel" id="phone" name="phone" placeholder="Ваш телефон" value="" >
                            
                        </div>
                    <hr>
                        <div class="form-group">
                            <small id="" class="text-muted">пример: Люк Скайуокер</small>
                            <input class="form-control input-lg" id="name" name="name" value="" placeholder="Ваше имя" >
                            
                        </div>
                    <hr>
                        <div class="form-group">
                            <small id="" class="text-muted">пример:  "Привет из пустынь Татуина. А фэт-байки делаете?"</small>
                            <textarea type="" rows="4" class="form-control input-lg" id="comment" name="comment" value=""  placeholder="Ваш вопрос, пожелание или, например, адрес, куда подъехать за велосипедом... "></textarea>
                            
                        </div>
                        
                    <input id="order-type" name="order-type" value="не выбран" hidden="">
                        
                    <button type="submit" id='submit' class="btn btn-lg btn-uci-green btn-block" >ОТПРАВИТЬ ЗАЯВКУ</button>
                {!! Form::close() !!}
                
                  <br>
                  <div class="text-center text-uppercase">    
                    <p class="text-muted text-center text-uppercase ">отправьте заявку и мы перезвоним для уточнения деталей.</p>
                  </div> 
              
                  </div>
              </div>
              
               <p class="lead  text-uppercase text-white text-center">
                    <br>Или позвоните нам  <br>
                    <span class="glyphicon glyphicon-phone"></span> 43-45-95<br>
                </p>    
                <     
          </div>
        </div>
        </div>
      
</section>