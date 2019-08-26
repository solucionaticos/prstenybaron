<div class="work">

  <div class="container">


    <div class="row pt15 pb15">
      <div class="col-sm-12 text-center h1info">
        <h1>{name}</h1>
      </div>
    </div>
    <div class="row m20">
      <div class="col-sm-12"></div>
    </div>

    <section class="ftco-section contact-section bg-light">

      <div class="row">

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">

                <div id="demo" class="carousel slide" data-ride="carousel" style="border: 1px solid #e1b373;">
                  <ul class="carousel-indicators">
                  {images}
                    {slide}
                  {/images}
                  </ul>
                  <div class="carousel-inner">
                  {images}
                   <div class="carousel-item {class} text-center">
                    <img class="img-fluid" src="{base_url}assets/uploads/files/{path}/{image}">
                  </div>
                  {/images}
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>

            </div>
            <div class="col-lg-7">
              <div class="shop-single-item">
                <h2 class="shop-single-item-title">{name}</h2>

                <h4 class="shop-single-item-price">Cena na Velikosti: {price_size}</h4>
                <h4 class="shop-single-item-price">Cena s Brilianty: {price_brillants}</h4>
                <div class="shop-single-item-description">
                  <p>{description}</p>
                </div>

                <hr class="m-t-30 m-b-30">
                <div class="container">

                    <button type="button" class="buy-now text-center py-2 btn btn-light btn-sm" data-toggle="modal" data-target="#orderModal">OBJEDNÁVKOVÝ FORMULÁR
                    </button>
                    <button type="button" class="buy-now text-center py-2 btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">NEZÁVAZNÝ VÝPOČET CENY
                    </button>
                      
                </div>

               


              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <hr class="m-t-30 m-b-30"> 


    <section class="mb50">

      <div class="row">
       {related_products}
       <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
        <div class="product">
          <a href="{base_url}home/detail/{url}"><img class="img-fluid" src="{base_url}assets/uploads/files/products/{image}" alt="{name}"></a>

          <div class="text-center">
            <div class="prd-link"><a href="{base_url}home/detail/{url}">{name}</a></div>
          </div>
        </div>
      </div>
      {/related_products}
    </div>

  </section>
</section> 

      <div class="row m20">
        <div class="col-sm-12"></div>
      </div>


</div>

</div>


     <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">OBJEDNÁVKOVÝ FORMULÁR ordern</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="container">
            <div class="modal-body">
                <form id="form_order" name="form_order">
          <label for="inputEmail4">NEZÁVAZNÝ VÝPOčET CENY</label>

          <div class="form-group">
            <label for="usr">jméno a příjmení:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>

          <div class="form-group">
            <label for="usr">ulice:</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>

          <div class="form-group">
            <label for="usr">město:</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>

          <div class="form-group">
            <label for="usr">PSČ:</label>
            <input type="text" class="form-control" id="zip_code" name="zip_code">
          </div>

          <div class="form-group">
            <label for="usr">kontaktní telefon:</label>
            <input type="text" class="form-control" id="contact_telephone" name="contact_telephone">
          </div>

          <div class="form-group">
            <label for="usr">kontaktní e-mail:</label>
            <input type="text" class="form-control" id="contact_email" name="contact_email">
          </div>

          <label for="inputEmail4">TYP PRSTENU</label>

          <div class="form-group">
            <label for="usr">dámský:</label>
            <input type="text" class="form-control" id="type_male" name="type_male">
          </div>
          <div class="form-group">
            <label for="usr">pánský:</label>
            <input type="text" class="form-control" id="type_female" name="type_female">
          </div>

          <label for="inputEmail4">VELIKOST PRSTENU</label>

          <div class="form-group">
            <label for="usr">dámský:</label>
            <input type="text" class="form-control" id="size_male" name="size_male">
          </div>
          <div class="form-group">
            <label for="usr">pánský:</label>
            <input type="text" class="form-control" id="size_female" name="size_female">
          </div>
                   
          
          <label for="inputEmail4">TYP KAMENE</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="type_stone" name="type_stone" value="zirkon">zirkon

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="type_stone" name="type_stone" value="briliant">briliant
              </label>
          </div>
          <div class="form-group">
            <label for="usr">počet kamenů:</label>
            <input type="text" class="form-control" id="num_stone" name="num_stone">
          </div>
          <br/>
          <label for="inputEmail4">MATERIÁL</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="material" name="material" >zlato 14kt

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="material" name="material">stříbro
              </label>
          </div>
          
          <br/>
          <label for="inputEmail4"> ZLATO, BARVA</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color">bílé


            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color" value="žluté">žluté
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color" value="červené">červené
              </label>
          </div>

          <label for="inputEmail4"> TEXT RYTINY DO PRSTENU</label>  

          <div class="form-group">
            <label for="usr">dámský:</label>
            <input type="text" class="form-control" id="text_engraving_male" name="text_engraving_male">
          </div>

            <div class="form-group">
            <label for="usr">pánský:</label>
            <input type="text" class="form-control" id="text_engraving_female" name="text_engraving_female">
          </div>

          <label for="inputEmail4">ZPůSOB PřEVZTÍ</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="takeover_method" name="takeover_method" value="Česká pošta dobírka">Česká pošta dobírka
            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="takeover_method" name="takeover_method" value="osobně na adrese provozovny">osobně na adrese provozovny
              </label>
          </div>
          <span> Objednávka telefonicky: 732 450 054</span>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Vaše poznámky, vlastní úpravy:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
          </div>
          

                  </form>
      </div>
      </div>
            <div class="modal-footer">
            
      <button type="submit" id="btn_Odeslat_order" name="btn_Odeslat_order" class="btn btn-primary">Odeslat</button>
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">NEZÁVAZNÝ VÝPOČET CENY calcultion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="container">
            <div class="modal-body">
                <form id="form_calculation" name="form_calculation">
          <label for="inputEmail4">NEZÁVAZNÝ VÝPOčET CENY</label>
                    <div class="form-row">
          
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">jméno a příjmení</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">e-mail nebo telefon:
            </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                      </div>
          </div>
          <div class="form-group ">
                        <label for="inputPassword4">telefon:
            </label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="">
                    </div>
          

          <label for="inputEmail4">TYP PRSTENU</label>
          <div class="form-row">
          
            <div class="form-group col-md-6">
            <label for="inputEmail4">dámský:</label>
            <input type="email" class="form-control" id="type_male"  name="type_male" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">pánský:
            </label>
            <input type="text" class="form-control" id="type_female" name="type_female" placeholder="">
            </div>
            </div>
            <label for="inputEmail4">VELIKOST PRSTENU</label>
          <div class="form-row">
          
            <div class="form-group col-md-6">
            <label for="inputEmail4">dámský:</label>
            <input type="email" class="form-control" id="size_male" name="size_male" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">pánský:
            </label>
            <input type="text" class="form-control" id="size_female" name="size_female" placeholder="">
            </div>
            </div>

           

          <label for="inputEmail4">TYP KAMENE</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="type_stone" name="type_stone" >zirkon

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="type_stone" name="type_stone">briliant
              </label>
          </div>

          <br/>
          <label for="inputEmail4">MATERIÁL</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="material" name="material">zlato 14kt

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="material" name="material">stříbro
              </label>
          </div>
          
          <br/>
          <label for="inputEmail4"> ZLATO, BARVA</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color">bílé


            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color">žluté
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" name="color">červené
              </label>
          </div>
          <div class="form-group">
            <label for="usr">počet kamenů:</label>
            <input type="text" class="form-control" id="num_stone" name="num_stone">
          </div>

          <span> Nejpozději do druhého dne Vám bude odeslána cenová nabídka.</span>
          <span>  Nezávazný výpočet ceny lze také provést telefonicky: 732 450 054.</span>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Vaše poznámky, vlastní úpravy:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
          </div>

                  </form>
      </div>
      </div>
            <div class="modal-footer">
            
      <button type="su" id="btn_Odeslat_calculation" name="btn_Odeslat_calculation" class="btn btn-primary">Odeslat</button>
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      
            </div>
          </div>
        </div>
    </div>
    



 <script>

  $(function() {

    $("#btn_Odeslat_order").click(function() 
    {
      $.ajax({ type: "POST",url: "<?php echo site_url('save_order')?>",data: $('#form_order').serialize(),
          success: function(data)
          {
          }
    });
    
  });

  $("#btn_Odeslat_calculation").click(function() 
    {
      $.ajax({ type: "POST",url: "<?php echo site_url('calculation')?>",data: $('#form_calculation').serialize(),
          success: function(data)
          {
          }
    });  
  }); 

  });
  
</script>