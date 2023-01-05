
<?php include_once("header.php");
include_once("../controller/productController.php")
 ?>
<section class="section-member-management">
  <div class="container">
  <?php $produit = new ProductController;?>
    <form class="member-form" action="?a=modifier&c=update&id=<?= $produit->select('id', $id)["id"] ?>" method="POST" enctype="multipart/form-data">

      <!-- <div class="form-group">
        <label for="Photo" >Photo</label>
        <br>
        <input type="file" class="form-control-file" id="Photo" name="image" required>
      </div> -->
      <div class="form-group">
        <label for="phot" >Photo</label>
        <input type="file"  value="<?= $produit->select('*', $id)["photo"] ?>"class="form-control"
          placeholder="..." id="full-name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">name</label>
        <input type="text"  class="form-control"
          placeholder="nouha"value="<?= $produit->select('*', $id)["name"] ?>" id="full-name" name="name" required>
      </div>
      <div class="form-group">
        <label for="class">Class</label>
        <select required class="form-control" id="class" name="classe">
          <option value="<?= $produit->select('*', $id)["classe"] ?>">Choice a class</option>
          <option value="hjjhh">home</option>
          <option value="hhh">shop</option>
          <option value="hhh">blog</option>
       
        </select>
      </div>
      
      <div class="form-group">
        <label for="class">Catégorie</label>
        <select required class="form-control" id="class" name="categorie">
          <option value="<?= $produit->select('*', $id)["categorie"] ?>">Choice a Catégorie</option>
          <option value="chaise">table</option>
          <option value="table">chaise</option>
       
        </select>
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control"
          placeholder="Elgountari ayoub"value="<?= $produit->select('*', $id)["description"] ?>" id="full-name" name="description" required>
      </div>
      <!-- /////////////////////// -->


      <!-- <div class="form-group">
        <label for="class">Class</label>
        <select required class="form-control" id="class" name="selected_cat">
          <option value="">Choice a categorie</option>
          <option value="Ada Lovelace">chaise</option>
          <option value="Ada Lovelace">chaise</option>
       
        </select>
      </div> -->

      <!-- /////////////////////// -->
      <div class="role">
       
      <div class="form-group">
        <label for="full-name">prix</label>
        <input type=""  class="form-control"
          placeholder="" id="prix"value="<?= $produit->select('*', $id)["prix"] ?>" name="prix" required>
      </div>
      </div>


      <button type="submit" name="update"class="btn btn-primary">Save</button>
    </form>
  </div>
</section>
<?php include_once("footer.php");?>