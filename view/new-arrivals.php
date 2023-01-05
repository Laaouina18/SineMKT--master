
<?php include_once("header.php");
include_once("../controller/productController.php")?>

    
		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>new arrivals</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
					<?php foreach ($produit as $i => $produit) {
						if ($produit["classe"] == "new") { ?>
					<?php ?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="<?= $produit["photo"] ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">wooden chair</a></h4>
								<p class="arrival-product-price"><?php $produit["prix"] ?></p>
							
									<a href="/new?a=supprimer&id=<?php echo $produit["id"] ?>"><button name="supprimer"class="subscribe" style="margin-bottom:2px;color:red;background-color:white;" >Supprimer
									  </button></a>
									   <a href="/update?b=modifier&id=<?php echo $produit["id"] ?>"><button name="modifier" class="subscribe" style="margin:2px;color:#e99c2e;background-color:white;">Modifier  </button></a>
		
							</div>
						</div>
						

						<?php }
					}; ?>
					
						
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->
<!--feature start -->
