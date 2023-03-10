<?php
require_once ("../Model/ProductModel.php");
class ProductController {
    private $post;
    private $type;
    function addPic(){
        if(isset($_FILES['photo'])){
            $name_photo=$_FILES['photo']['name'];
            $picsize=$_FILES['photo']['size'];
            $pictmpname=$_FILES['photo']['tmp_name'];
        
            if($_FILES['photo']['error']===0){
                    $img_ex = pathinfo($name_photo, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs=array("jpg","jpeg","png");
        
                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='upload/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }
                    
            }     
        }
    }
    function addProduct(){
           $this->post=[
           'name'=> $_POST['name'],
           'prix'=> $_POST['prix'],
           'description'=> $_POST['description'],
           'classe'=> $_POST['classe'],
           'categorie'=> $_POST['categorie'],
           'photo'=> $this->addPic()
        ];
        $produit=new productModel;
        $produit->addProductToDb($this->post);
        
    }
    function select($element,$id){
        $select=new productModel;
        return $select->selectFromDb($element,$id);
    }
    function updateProduct(){
        
            if(isset($_FILES['photo'])&&$_FILES['photo']['error']===0){
                $this->   $this->post=[
                    'name'=> $_POST['name'],
                    'prix'=> $_POST['prix'],
                    'description'=> $_POST['description'],
                    'classe'=> $_POST['classe'],
                    'categorie'=> $_POST['categorie'],
                    'photo'=> $this->addPic()
                     ];
                $bool=true;
            }else{
                    $this->post=[
                        'name'=> $_POST['name'],
                        'prix'=> $_POST['prix'],
                        'description'=> $_POST['description'],
                        'classe'=> $_POST['classe'],
                        'categorie'=> $_POST['categorie']];
                $bool=false;
            }
         $update=new productModel;
         $update->updateProduitInDb($this->post,$_GET['id'],$bool);
        
    }
    function deleteProduct() {
            $delete=new productModel;
            $delete->deleteProductInDb($_GET['id']);
    }
    function getProducts() {
        $get = new productModel;
        return $get->getProductsFromDb();
    }
}
$test=new productController;
$produit=$test->getProducts();
if (isset($_POST["save"])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pro=new ProductController();
        $pro->addProduct();
    }
};    
// suprimer
if(isset($_GET["a"])=="supprimer"){
   
if (isset($_GET["id"])) {
    
    $p=new ProductController();
    $p->deleteProduct();
  
}
}
// modifier
if (isset($_GET["b"])=="modifier") {
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        if (isset($_GET["c"])=="update") {
            $produit = new ProductController();
            $produit->updateProduct();
           
        }
    }
}
            


