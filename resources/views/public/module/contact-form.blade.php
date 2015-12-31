
<section id="contact-form"  class="contact-form">
    
        <!--div class="row text-center">
            <h2 class="section-heading">один клик <small>или</small> один звонок</h2>
            <h3 class="section-subheading">Веломастерская всего в 1 клике или 1 звонке. </h3>
        </div-->  
        <div class="row">  
          <div class="container">  
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0">
              <h2 class="section-heading text-center text-white">заявка в 1 клик</h2>
              <!--p class="lead  text-uppercase text-white "><br>Всего 1 клик чтобы сделать заказ или задать вопрос. Мы перезвоним вам в течении пары минут для уточнения деталей.</p-->
              <p class="lead  text-uppercase text-white text-center ">Всего 1 клик чтобы сделать заказ или задать вопрос. </p>
                
                
              
              <div class="panel panel-success">
                  <div class="panel-body">
                                 
                    {!! Form::open(['route'=>'storeOrder']) !!}
                        <div class="form-group"
                            <label class="form-control" for="phone">ваш номер телефона</label>
                            
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" id='phone-type-mobile' name='phone-type' checked="true">
                                    мобильный                                        
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name='phone-type' id='phone-type-city' >
                                    прямой / городской                                        
                                </label>
                            </div>
                            
                            <input class="form-control input-lg" id="phone" name="phone" placeholder="сотовый или прямой [обязательно]" required="укажите телефон">
                        </div>
                        <div class="form-group"
                        <label class="form-control" for="name">как к вам обращаться</label>
                            <input class="form-control input-lg" id="name" name="name" placeholder="ваше имя [обязательно]" required="укажите ваше имя">
                        </div>
                        <div class="form-group"
                        <label class="form-control" for="comment">комментарий, пожелание или вопрос</label>
                            <textarea type="" rows="4" class="form-control input-lg" id="comment" name="comment" placeholder="например время, когда вам перезвонить, или адрес, куда подъехать... "></textarea>
                        </div>
                    <button type="submit" id='submit' class="btn btn-lg btn-uci-green btn-block" >ОТПРАВИТЬ ЗАЯВКУ</button> 
                    {!! Form::close() !!}
                
                  <br>
                  <div class="text-center text-uppercase">    
                    <a href="#contact-data" class="page-scroll  ">
                        Или позвоните нам  <br>
                        <span class="glyphicon glyphicon-phone"></span> 43-45-95<br>
                    </a>
                  </div> 
              
                  </div>
              </div>
              
                <p class="lead  text-uppercase text-white text-center"><br>Отправьте заявку и Мы перезвоним вам в течении пары минут для уточнения деталей.</p>
                    
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