
<?php 
    class Movie{
      public $name;        
      public $language;
      public $movieMaker;
      
      public function cliper (){
          $frase =  $this->name . ", " . $this->language . "," . $this->movieMaker ;
          return $frase; 
        }
    }