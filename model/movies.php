
<?php
class movie{

    public $name;
    public $author;
    public $language;

     //Costruttore, viene richiamato dove scriviamo new movie(...)
    public function __construct($nome,$lingua,$regista){
        $this->$name=$nome;
        $this->$filmMaker=$regista;
        $this->$language=$lingua;
    }

}
/* class Address
{
    public $street;
    public $number;
    public $postalCode;
    public $city;
    public $country;

    //Costruttore, viene richiamato dove scriviamo new Address(...)
    public function __construct($strada, $civico, $cap, $citta, $nazione)
    {
        //Prendo gli argomenti passati e li assegno a QUESTA istanza che sto creando
        $this->street = $strada;
        $this->number = $civico;
        $this->postalCode = $cap;
        $this->city = $citta;
        $this->country = $nazione;
    }


} */