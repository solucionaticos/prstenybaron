

	<div class="work">
		
		<div class="container">


			<div class="row pt15 pb15">
				<div class="col-sm-12 text-center h1info">
					<h1>{page_title}</h1>
				</div>
			</div>
			<?php if ( trim($page_description) != '' ) { ?>
			<div class="row">
				<div class="col-sm-12 text-justify pr15 pl15 pt15 pb15">
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
		    				<div class="product" itemscope itemtype="http://schema.org/Product">
		    					<a href="{base_url}home/detail/{url}"><img class="img-fluid lazy" src="{base_url}assets/images/lazy.png" data-src="{base_url}assets/uploads/files/products/{image}" alt="{name}" itemprop="image"></a>
								<div class="text-center">
		    						<div class="prd-link"><a href="{base_url}home/detail/{url}" itemprop="name">{name}</a></div>
								</div>
								<span itemprop="sku" style="display:none;">{sku}</span>
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


 
<script type="text/javascript">

$(function () {
	var lazyLoadInstance = new LazyLoad({
	    elements_selector: ".lazy"
	});		
})

</script>