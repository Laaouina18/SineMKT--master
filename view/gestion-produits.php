
<?php include_once("header.php");
include_once("../controller/productController.php")
 ?>
<section class="section-member-management">
  <div class="container">
    <form class="member-form" action="/gestion-produits" method="POST" enctype="multipart/form-data">

      <!-- <div class="form-group">
        <label for="Photo" >Photo</label>
        <br>
        <input type="file" class="form-control-file" id="Photo" name="image" required>
      </div> -->
      <div class="form-group">
        <label for="phot">Photo</label>
        <input type="file"  class="form-control"
          placeholder="..." id="full-name" name="photo" required>
      </div>
      <div class="form-group">
        <label for="name">name</label>
        <input type="text"  class="form-control"
          placeholder="nouha" id="full-name" name="name" required>
      </div>
      <div class="form-group">
        <label for="class">Class</label>
        <select required class="form-control" id="class" name="classe">
          <option value="">Choice a class</option>
          <option >home</option>
          <option>feautred</option>
          <option >blog</option>
          <option >new</option>
       
        </select>
      </div>
      
      <div class="form-group">
        <label for="class">Catégorie</label>
        <select required class="form-control" id="class" name="categorie">
          <option value="">Choice a Catégorie</option>
          <option value="chaise">table</option>
          <option value="table">chaise</option>
          <option value="table">none</option>
       
        </select>
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control"
          placeholder="description" id="full-name" name="description" required>
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
          placeholder="" id="prix" name="prix" required>
      </div>
      </div>


      <button type="submit" name="save"class="btn btn-primary">Save</button>
    </form>
  </div>
</section>
<?php include_once("footer.php");?>
