
<?php 
    class Movie{
      public $name;        
      public $language;
      public $movieMaker;

      public function __construct($nome,$lingua,$regista){
            $this->name = $nome;
            $this->language = $lingua;
            $this->movieMaker = $regista;
      }
      
      public function cliper (){
          $frase =  $this->name . ", " . $this->language . "," . $this->movieMaker ;
          return $frase; 
        }
    }