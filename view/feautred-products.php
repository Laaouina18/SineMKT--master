<?php include_once("header.php");
include_once("../controller/productController.php")?>
<section id="feature" class="feature">
	<div class="container">
	
		<div class="section-header">
			<h2>featured products</h2>
		</div><!--/.section-header-->
		<div class="feature-content">
			<div class="row">
			<?php foreach ($produit as $i => $produit) {
				if ($produit["classe"] == "feautred") { ?>
				<div class="col-sm-3">
					<div class="single-feature">
					
						<img src="<?= $produit["photo"] ?>" alt="feature image">
						<div class="single-feature-txt text-center">
							<p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
								<span class="feature-review">(45 review)</span>
							</p>
							<h3><a href="#"><?= $produit['name'] ?></a></h3>
							<h5><?= $produit["prix"] ?>$</h5>
							
					
									<a href="/new?a=supprimer&id=<?php echo $produit["id"] ?>"><button name="supprimer"class="btn btn-danger"  >Supprimer
									  </button></a>
									   <a href="/update?b=modifier&id=<?php echo $produit["id"] ?>"><button name="modifier" class="btn btn-info">Modifier  </button></a>
	
						</div>
					
					</div>
				</div>
				<?php }
			}; ?>
				</div>
			</div>
		</div>
	
	</div><!--/.container-->

</section><!--/.feature-->
<!--feature end -->
        	<?php include_once("footer.php") ?>

    