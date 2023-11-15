
<?php 

class Services {
    public $nameService;
    public $imagesServices;
    public $descriptionServices;
    public $priceServices;
    public $categoryServices;

    public function __construct($nameService,$imagesServices,$descriptionServices,$priceServices,$categoryServices){
        $this->nameService = $nameService;
        $this->imagesServices = $imagesServices;   
        $this->descriptionServices = $descriptionServices;  
        $this->priceServices = $priceServices;
            $this->categoryServices = $categoryServices;

    }
    public function __get($atributo){
        return $this -> $atributo;
    }
}

?>