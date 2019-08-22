

	<div class="work">
		
		<div class="container">

			<div class="row pt15 pb15">
				<div class="col-sm-12 text-center h1info">
					<h1>{page_title}</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center pr15 pl15 pt15 pb15 info">
					{page_description}
				</div>
			</div>
			<div class="row m20">
				<div class="col-sm-12"></div>
			</div>

		    <section class="mb50">

		    		<div class="row">

						{products}
		    			<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
		    				<div class="product">
		    					<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/uploads/files/products/{image}" alt="{name}"></a>
								
									<!-- <a href="#" class="add-to-cart text-center py-2 mr-1 btn btn-primary"><span>Vincular <i class="ion-ios-add ml-1"></i></span></a> -->
									
								
                            	
								<div class="text-center">
		    						<div class="prd-link"><a href="<?php echo  base_url().'home/detail/'.'{url}'?>">{name}</a></div>
								</div>

								<div style="background:white; text-align:center;">
								<a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;"  data-toggle="modal" data-target="#exampleModal">NEZÁVAZNÝ VÝPOČET CENY<span><i class="ion-ios-cart ml-1"></i></span></a>
					
								</div>
						
								<div style="background:white; text-align:center; margin-top:10px;">
								<a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;">OBJEDNÁVKOVÝ FORMULÁR<span><i class="ion-ios-cart ml-1"></i></span></a>
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
            <div class="modal-body">
                <form>
					<label for="inputEmail4">NEZÁVAZNÝ VÝPOčET CENY</label>
                    <div class="form-row">
					
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">jméno a příjmení</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">e-mail nebo telefon:
						</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
					</div>
					<label for="inputEmail4">TYP PRSTENU</label>
					<div class="form-row">
					
						<div class="form-group col-md-6">
						<label for="inputEmail4">dámský:</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="">
						</div>
						<div class="form-group col-md-6">
						<label for="inputPassword4">pánský:
						</label>
						<input type="password" class="form-control" id="inputPassword4" placeholder="">
						</div>
					  </div>
					  <label for="inputEmail4">VELIKOST PRSTENU</label>
					<div class="form-row">
					
						<div class="form-group col-md-6">
						<label for="inputEmail4">dámský:</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="">
						</div>
						<div class="form-group col-md-6">
						<label for="inputPassword4">pánský:
						</label>
						<input type="password" class="form-control" id="inputPassword4" placeholder="">
						</div>
					  </div>

					<label for="inputEmail4">TYP KAMENE</label>  
					<div class="form-check">
						<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">zirkon

						</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">briliant
							</label>
					</div>

					<br/>
					<label for="inputEmail4">MATERIÁL</label>  
					<div class="form-check">
						<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">zlato 14kt

						</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">stříbro
							</label>
					</div>
					
					<br/>
					<label for="inputEmail4"> ZLATO, BARVA</label>  
					<div class="form-check">
						<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">bílé


						</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">žluté
							</label>
					</div>
					<div class="form-check">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio">červené
							</label>
					</div>
					<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>