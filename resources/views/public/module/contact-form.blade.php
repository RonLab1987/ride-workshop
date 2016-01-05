
<section id="contact-form"  class="contact-form">
    
        <!--div class="row text-center">
            <h2 class="section-heading">один клик <small>или</small> один звонок</h2>
            <h3 class="section-subheading">Веломастерская всего в 1 клике или 1 звонке. </h3>
        </div-->  
        <div class="row">  
          <div class="container">  
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0">
              <h2 class="section-heading text-center text-white">Быстрый способ</h2>
              <!--p class="lead  text-uppercase text-white "><br>Всего 1 клик чтобы сделать заказ или задать вопрос. Мы перезвоним вам в течении пары минут для уточнения деталей.</p-->
              <p class="lead  text-uppercase text-white text-center ">
                  Оформить заявку или задать вопрос. 
              </p>
                
                
              
              <div class="panel panel-success">
                  <div class="panel-body">
                                 
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
                            <input class="form-control input-lg" type="tel" id="phone" name="phone" placeholder="Ваш телефон" value="" >
                            
                            <!--span id="phone-example" class="text-muted">Например: 912 000-43-21 или +7(833)2 43-45-95</span-->
                        </div>
                    <hr>
                        <div class="form-group">
                        <!--label class="form-control hidden sr-only" for="name">как к вам обращаться</label-->
                            <small id="" class="text-muted">пример: Люк Скайуокер</small>
                            <input class="form-control input-lg" id="name" name="name" value="" placeholder="Ваше имя" >
                            
                        </div>
                    <hr>
                        <div class="form-group">
                        <!--label class="form-control" for="comment">комментарий, пожелание или вопрос</label-->
                            <small id="" class="text-muted">пример:  "Привет из пустынь Татуина. А фэт-байки делаете?"</small>
                            <textarea type="" rows="4" class="form-control input-lg" id="comment" name="comment" value=""  placeholder="Ваш вопрос, пожелание или ,например, адрес, куда подъехать за велосипедом... "></textarea>
                            
                        </div>
                    <button type="submit" id='submit' class="btn btn-lg btn-uci-green btn-block" >ОТПРАВИТЬ ЗАЯВКУ</button>
                {!! Form::close() !!}
                
                  <br>
                  <div class="text-center text-uppercase">    
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
                <!--p class="text-center text-uppercase lead ">
                      <br>
                      <a href="#contact-data" class="page-scroll text-white">
                        Или позвоните нам  <br>
                        <span class="glyphicon glyphicon-menu-down"></span>
                        </a>
                </p-->     
          </div>
        </div>
        </div>
</section>