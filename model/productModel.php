<?php
require_once 'connection.php';
class productModel {
    private $posts;
    public function addProductToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO produit (photo,name,categorie,classe,description,prix) VALUES ('".$post['photo']."','".$post['name']."','".$post['categorie']."',
        '".$post['classe']."','".$post['description']."','".$post['prix']."')");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from produit where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getProductsFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from produit ;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getPro($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from produit where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function deleteProductInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from produit where id= $id;");
    }
    public function updateProduitInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE produit SET photo='".$post['photo']."',name='".$post['name']."',categorie='".$post['categorie']."',
             classe='".$post['classe']."',prix='".$post['prix']."',
             description='".$post['description']."'
              where id=$id;");
        }else{
            $stmt=$conn->query("UPDATE produit SET name='".$post['name']."',categorie='".$post['categorie']."',
            classe='".$post['classe']."',prix='".$post['prix']."',
            description='".$post['description']."'
             where id=$id;");
        }  
    }
}