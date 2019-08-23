

	<div class="work">
		
		<div class="container">


			<div class="row pt15 pb15">
				<div class="col-sm-12 text-center h1info">
					<h1>{page_title}</h1>
				</div>
			</div>
			<?php if ( trim($page_description) != '' ) { ?>
			<div class="row">
				<div class="col-sm-12 text-justify pr15 pl15 pt15 pb15 info">
					{page_description}
				</div>
			</div>
			<?php } ?>
			<div class="row m20">
				<div class="col-sm-12"></div>
			</div>


		    <section class="mb50">

		    		<div class="row">

						{products}
		    			<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
		    				<div class="product">
		    					<a href="{base_url}home/detail/{url}"><img class="img-fluid" src="{base_url}assets/uploads/files/products/{image}" alt="{name}"></a>

								<div class="text-center">
		    						<div class="prd-link"><a href="{base_url}home/detail/{url}">{name}</a></div>
								</div>

								<div style="background:white; text-align:center;">
								<a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;"  data-toggle="modal" data-target="#exampleModal">NEZÁVAZNÝ VÝPOČET CENY<span><i class="ion-ios-cart ml-1"></i></span></a>
					
								</div>
						
								<div style="background:white; text-align:center; margin-top:10px;">
								<a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;" data-toggle="modal" data-target="#orderModal">OBJEDNÁVKOVÝ FORMULÁR<span><i class="ion-ios-cart ml-1"></i></span></a>
								</div>
								
		    				</div>
		    			</div>
						{/products}

		    		</div>

		    </section>

			<div class="row m20">
				<div class="col-sm-12"></div>
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
                <form>
					<label for="inputEmail4">NEZÁVAZNÝ VÝPOčET CENY</label>
                    <div class="form-row">
					
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">jméno a příjmení</label>
                        <input type="email" class="form-control" id="name" name="name" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">e-mail nebo telefon:
						</label>
                        <input type="password" class="form-control" id="email" name="email" placeholder="">
                      </div>
					</div>
					<div class="form-group ">
                        <label for="inputPassword4">telefon:
						</label>
                        <input type="password" class="form-control" id="telephone" name="telephone" placeholder="">
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
						<input type="password" class="form-control" id="type_female" name="type_female" placeholder="">
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
						<input type="password" class="form-control" id="size_female" name="size_female" placeholder="">
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
					<span> 	Nezávazný výpočet ceny lze také provést telefonicky: 732 450 054.</span>
				
					<div class="form-group">
						<label for="message-text" class="col-form-label">Vaše poznámky, vlastní úpravy:</label>
						<textarea class="form-control" id="notes" name="notes"></textarea>
					</div>

                  </form>
			</div>
			</div>
            <div class="modal-footer">
			<button type="button" class="btn btn-primary">Odeslat</button>
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      
            </div>
          </div>
        </div>
	  </div>
	  


	   <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">OBJEDNÁVKOVÝ FORMULÁR</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
			</div>
			<div class="container">
            <div class="modal-body">
                <form>
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
								<input type="radio" class="form-check-input" id="type_stone" name="type_stone">zirkon

						</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" id="type_stone" name="type_stone">briliant
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
								<input type="radio" class="form-check-input" id="takeover_method" name="takeover_method">Česká pošta dobírka
						</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" id="takeover_method" name="takeover_method">osobně na adrese provozovny
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
			<button type="button" class="btn btn-primary">Odeslat</button>
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
