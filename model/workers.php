<?php 

class Workers {
    public $nameworkers;
    public $imagenworkers;
    public $perfilworkers;
    public $nacionalityworkers;
    public function __construct($nameworkers,$imagenworkers,$perfilworkers,$nacionalityworkers){
        $this->nameworkers = $nameworkers;
        $this->imagenworkers = $imagenworkers;
        $this->perfilworkers = $perfilworkers;
        $this->nacionalityworkers = $nacionalityworkers;
    }
    public function __get($atributo){
        return $this -> $atributo;
    }
}

?>