<?php
// Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente: 

// +-|Continent  
// +-----------|Country 
// +--------------------|Region 
// +---------------------------|Province 
// +------------------------------------|City 
// +------------------------------------------|Street

// Ogni classe avra' un attributo public del tipo: 

// $nameContinent: 
// $nameCountry; 
// $nameRegion; 
// $nameProvince; 
// $nameCity; 
// $nameStreet; 

// La prima classe genitore avra' la seguente struttura: 


// class Continent { 
//   public $nameContinent; 
//   public function __construct($continent) { 
//     $this->nameContinent = $continent; 
//   }
// }

// Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“ 



class Continent { 
  public $nameContinent; 

  public function __construct($namecontinent) { 
    $this->nameContinent = $namecontinent; 
  }
};

class country extends Continent { 
  public $nameCountry; 

  public function __construct($nameContinent, $nameCountry) { 
    parent::__construct($nameContinent);
    $this->nameCountry = $nameCountry; 
  }
};

class region extends country { 
  public $nameRegion; 

  
  public function __construct($nameContinent, $nameCountry, $nameRegion) { 
    parent::__construct($nameContinent, $nameCountry);
    $this->nameRegion = $nameRegion; 
  }
};

class province extends region { 
  public $nameProvince; 

  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince) { 
    parent::__construct($nameContinent, $nameCountry, $nameRegion);
    $this->nameProvince = $nameProvince; 
  }
};

class city extends province { 
  public $nameCity; 

  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity) { 
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
    $this->nameCity = $nameCity; 
  }
};

class street extends city { 
  public $nameStreet; 

  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet) { 
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
    $this->nameStreet = $nameStreet; 
  }

  public function mostrar (){
    echo "mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet ";
  }
};



$casa = new street("europa", "italia", "piamonte", "cuneo", "san rocco", "via canubi");

$casa -> mostrar();


















?>