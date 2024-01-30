<?php 

class Movie {
    public $nome;
    public $genere;
    public $software_house;
    public $data;
    public $candidato_goty;
    public $prezzo_medio;

    function __construct($_nome, $_genere, $_software_house, $_data, $_candidato_goty){
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->software_house = $_software_house;
        $this->data = $_data;
        $this->candidato_goty = $_candidato_goty;
        $this->prezzo_medio = $this->setPrezzo();
    }

    private function setPrezzo(){
            if(2024 - $this->data > 5){
                return 10;
            }
            elseif(2024 - $this->data > 3){
                return 30;
            }
            elseif(2024 - $this->data > 1){
                return 60;
            }
            else{
                return 80;
            }
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>