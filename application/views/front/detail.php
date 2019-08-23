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

          <div style="background:white; text-align:center;">
            <a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;"  data-toggle="modal" data-target="#exampleModal">NEZÁVAZNÝ VÝPOČET CENY<span><i class="ion-ios-cart ml-1"></i></span></a>

          </div>

          <div style="background:white; text-align:center; margin-top:10px;">
            <a href="#" class="buy-now text-center py-2 btn btn-light btn-sm" style="margin-left: 4px;" data-toggle="modal" data-target="#orderModal">OBJEDNÁVKOVÝ FORMULÁR<span><i class="ion-ios-cart ml-1"></i></span></a>
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
