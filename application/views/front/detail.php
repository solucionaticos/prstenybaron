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
              <h5 class="modal-title" id="exampleModalLabel">OBJEDNÁVKOVÝ FORMULÁR </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="container">
            <div class="modal-body">

              <form id="form_order" method="post" class="form-horizontal">
                    <label for="inputEmail4">NEZÁVAZNÝ VÝPOčET CENY</label>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Jméno a příjmení:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">Ulice:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="address" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">Město:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">PSČ:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="zip_code" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Kontaktní telefon::</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="contact_telephone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">kontaktní e-mail:</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="contact_email" />
                        </div>
                    </div>
                    <label for="inputEmail4">TYP PRSTENU</label>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">Dámský:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="type_male" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">Pánský:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="type_female" />
                        </div>
                    </div>
                     <label for="inputEmail4">VELIKOST PRSTENU</label>
                     <div class="form-group">
                        <label class="col-sm-6 control-label">Dámský:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="size_male" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">pánský:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="size_female" />
                        </div>
                    </div>
                    <label for="inputEmail4">TYP KAMENE</label> 
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Dámský:</label>
                        <div class="col-sm-12">
                             <div class="radio">
                                <label>
                                    <input type="radio" name="type_stone" value="1" checked/> zirkon
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="type_stone" value="2" /> briliant
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Počet kamenů::</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="num_stone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">MATERIÁL:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="num_stone" />
                        </div>
                    </div>
                     <label for="inputEmail4">MATERIÁL</label>  
                     <div class="col-sm-12">
                             <div class="radio">
                                <label>
                                    <input type="radio" name="material" value="1" checked/> Zlato 14kt
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="material" value="2" /> stříbro
                                </label>
                            </div>

                        </div>

                        <label for="inputEmail4">ZLATO, BARVA</label>  
                     <div class="col-sm-12">
                             <div class="radio">
                                <label>
                                    <input type="radio" name="color" value="1" /> bílé 
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="color" value="2" /> žluté
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="color" value="3"  checked/> červené
                                </label>
                            </div>

                        </div>
                    <label for="inputEmail4"> TEXT RYTINY DO PRSTENU</label>  
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Dámský:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="text_engraving_female" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">ZPůSOB PřEVZTÍ:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="text_engraving_male" />
                        </div>
                    </div>

                    <label for="inputEmail4">ZPůSOB PřEVZTÍ</label>  
                     <div class="col-sm-12">
                             <div class="radio">
                                <label>
                                    <input type="radio" name="takeover_method" value="1" checked /> Česká pošta dobírka 
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="takeover_method" value="2" /> osobně na adrese provozovny
                                </label>
                            </div>
                          
                        </div>
                        <label for="inputEmail4"> Objednávka telefonicky: 732 450 054</label> 
                      <div class="form-group">
                        <label class="col-sm-12 control-label">Vaše poznámky, vlastní úpravy:</label>
                        <div class="col-sm-12">
                             <textarea class="form-control" id="notes" name="notes"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3" style="text-align: center;">
                            
                            <button type="submit" class="btn btn-primary" id="btn_Odeslat_order" >Odeslat</button>
                        </div>

                    </div>
                    <div id="success">
                     
                    </div>
                    
                </form>
                
      </div>
      </div>
            <div class="modal-footer">
            
    
              
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
              <h5 class="modal-title" id="exampleModalLabel">NEZÁVAZNÝ VÝPOČET CENY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="container">
            <div class="modal-body">
                <form id="form_calculation" name="form_calculation" method="post" class="form-horizontal">
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
            <input type="text" class="form-control" id="type_male"  name="type_male" placeholder="">
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
            <input type="text" class="form-control" id="size_male" name="size_male" placeholder="">
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
                <input type="radio" class="form-check-input" id="type_stone" value="1" name="type_stone" checked >zirkon

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="type_stone" value="2" name="type_stone">briliant
              </label>
          </div>

          <br/>
          <label for="inputEmail4">MATERIÁL</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="material" value="1" name="material" checked>zlato 14kt

            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="2" id="material" name="material">stříbro
              </label>
          </div>
          
          <br/>
          <label for="inputEmail4"> ZLATO, BARVA</label>  
          <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" value="1" name="color" checked>bílé


            </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" value="2" name="color">žluté
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="color" value="3" name="color">červené
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
          <div id="success_c">
                     
                    </div>
<button type="submit" id="btn_Odeslat_calculation" name="btn_Odeslat_calculation" class="btn btn-primary">Odeslat</button>
                  </form>
      </div>
      </div>
            <div class="modal-footer">
            
      
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      
            </div>
          </div>
        </div>
    </div>
    

<script>
$(document).ready(function() {
    $('#form_order').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
             address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
             zip_code: {
                validators: {
                    notEmpty: {
                        message: 'The zip code is required'
                    }
                }
            },
             contact_email: {
                validators: {
                    notEmpty: {
                        message: 'The contact email is required'
                    }
                }
            },
            contact_telephone: {
                validators: {
                    notEmpty: {
                        message: 'The contact telephone is required'
                    }
                }
            },
            type_male: {
                validators: {
                    notEmpty: {
                        message: 'The type male is required'
                    }
                }
            },
            type_female: {
                validators: {
                    notEmpty: {
                        message: 'The type female is required'
                    }
                }
            },
            size_male: {
                validators: {
                    notEmpty: {
                        message: 'The size male is required'
                    }
                }
            },
            size_female: {
                validators: {
                    notEmpty: {
                        message: 'The size size female is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required'
                    }
                }
            },
            size_female: {
                validators: {
                    notEmpty: {
                        message: 'The size female is required'
                    }
                }
            },
            text_engraving_female: {
                validators: {
                    notEmpty: {
                        message: 'The text engraving female is required'
                    }
                }
            },
            type_stone: {
                validators: {
                    notEmpty: {
                        message: 'The type stone is required'
                    }
                }
            },
            num_stone: {
                validators: {
                    notEmpty: {
                        message: 'The num stone is required'
                    }
                }
            },
            material: {
                validators: {
                    notEmpty: {
                        message: 'The material is required'
                    }
                }
            },
            color: {
                validators: {
                    notEmpty: {
                        message: 'The color is required'
                    }
                }
            },
            text_engraving_male: {
                validators: {
                    notEmpty: {
                        message: 'The text engraving male  is required'
                    }
                }
            },
            takeover_method: {
                validators: {
                    notEmpty: {
                        message: 'The takeover method is required'
                    }
                }
            },
            notes: {
                validators: {
                    notEmpty: {
                        message: 'The notes is required'
                    }
                }
            },
          
           
        }
    }).on('success.form.bv', function(e) {
          
            e.preventDefault();
            
            $.ajax({ type: "POST",url: "<?php echo site_url('save_order')?>",data: $('#form_order').serialize(),
          success: function(data)
                  {
                    $("#success").append("<div class='alert alert-success'>úspěch </div>" );
                     setTimeout(refrescar,5000);
                      
                  }
            });

          });
});
 function refrescar() { 
        location.reload(); 
    }
</script>

 <script>

  $(function() {


 $('#form_calculation').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },

          email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    }
                }
             },
          telephone: {
                validators: {
                    notEmpty: {
                        message: 'The telephone is required'
                    }
                }
              },
             type_male: {
                validators: {
                    notEmpty: {
                        message: 'The type male is required'
                    }
                } 
              },
               type_female: {
                validators: {
                    notEmpty: {
                        message: 'The type female is required'
                    }
                  }
                },
                size_male: {
                validators: {
                    notEmpty: {
                        message: 'The size size male is required'
                    }
                  }
                },
                size_female: {
                validators: {
                    notEmpty: {
                        message: 'The size female is required'
                    }
                   }
                },


        }
    }).on('success.form.bv', function(e) {
          
            e.preventDefault();
            
           $.ajax({ type: "POST",url: "<?php echo site_url('calculation')?>",data: $('#form_calculation').serialize(),
                  success: function(data)
                  {

                    $("#success_c").append("<div class='alert alert-success'>úspěch </div>" );
                     setTimeout(refrescar,5000);

                  }
            });

          });

   

  });

 
</script>