

    <div class="work">

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image: url('../assets/images/contact.jpg');">
  {products}
           <h1 class="display-4 font-italic" style="text-align: center;">{name}</h1>
  {/products}
   </div>       
        <div class="container">
      

        <section class="ftco-section contact-section bg-light">
           
                <div class="row">
                  
                  <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                          <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1"></li>
                              <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                             
                             
                             {image}
                              <div class="carousel-item">
                                <img src="<?php echo base_url(); ?>assets/uploads/files/products/{image}"  >
                                 
                              </div>
                               {/image}
                            </div>
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                          </div>

                        </div>
                        <div class="col-lg-5">
                          {products}
                            <div class="shop-single-item">
                                <h2 class="shop-single-item-title">{name}</h2>
                                
                                <h2 class="shop-single-item-price">{price_size}</h2>
                                <h2 class="shop-single-item-price">{price_brillants}</h2>
                                <div class="shop-single-item-description">
                                    <p>{description}</p>
                                </div>
                                
                                <hr class="m-t-30 m-b-30">
                                
                            </div>
                            {/products}
                        </div>
                    </div>
                </div>
            </section>
                </div>
                
           <hr class="m-t-30 m-b-30"> 


       <div class="container">
            
           <div class="card-deck">
             {related_product}
              <div class="card">
                <img src="<?php echo base_url(); ?>assets/uploads/files/products/{image}" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="<?php echo  base_url().'home/detail/'.'{url}'?>"><h5 class="card-title" style="text-align: center;">{name}</h5></a>
                </div>
              </div>
              {/related_product}
          </div>

       </div>
       <br>
          </section> 
          

        </div>

    </div>
