<?php 
class Product{
    public $imagenProduct;
    public $nameProduct;
    public $descriptionProduct;
    public $priceProduct;
    public $categoryProduct;
    public $idproducts;

    public function __construct($idproducts,$imagenProduct,$nameProduct,$descriptionProduct,$priceProduct,$categoryProduct) {
        $this->imagenProduct = $imagenProduct;
        $this->nameProduct = $nameProduct;
        $this->descriptionProduct = $descriptionProduct;
        $this->priceProduct = $priceProduct; 
        $this->categoryProduct = $categoryProduct;
        $this->idproducts= $idproducts;
     }
     
     public function __get($atributo){
        return $this->$atributo;
     }
}

?>