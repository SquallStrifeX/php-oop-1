<?php 

class Game {
    public $nome;
    public $genere;
    public $software_house;
    public $data;
    public $console;
    public $prezzo_medio;

    function __construct($_nome, $_genere, $_software_house, $_data, $_console){
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->software_house = $_software_house;
        $this->data = $_data;
        $this->console = $_console;
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
        public function getGeneriAsString(){
    return implode(", ", $this->genere);
}

}


$game_1 = new Game('Final Fantasy X', ['JRPG', "A Turni"], "Square-Soft", "2002", "Playstation 2", $prezzo_medio);
$game_2 = new Game('Final Fantasy XVI', ['JRPG', 'Action'], "Square-Enix", "2023", "Playstation 5", $prezzo_medio);
$game_3 = new Game('The Last of Us Parte II', ['Adventure', 'TPS', 'Stealth', 'Survivial/Horror'], "Naughty Dog", "2020", "Playstation 4", $prezzo_medio);
$game_4 = new Game('Marvels Spider-Man 2', ['Action', 'Open-World'], 'Insomniac', '2023', "Playstation 5", $prezzo_medio );
$game_5 = new Game('God of War', ['Action', 'RPG'], "Santa Monica Studios", "2018", "PLaystation 4", $prezzo_medio);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 m-5">
                <div class="my-2 border border-info p-2"><?php echo $game_1->nome. " è un videogioco ". $game_1->getGeneriAsString(). " sviluppato da ". $game_1->software_house. 
                " e pubblicato nel ". $game_1->data. " per console ". $game_1->console. 
                " al momento si trova in commercio ad un prezzo medio di ". $game_1->prezzo_medio. " euro. <br>"  ?>
                </div>
                <div class="my-2 border border-info p-2"><?php echo $game_2->nome. " è un videogioco ". $game_2->getGeneriAsString(). " sviluppato da ". $game_2->software_house. 
                " e pubblicato nel ". $game_2->data. " per console ". $game_2->console. 
                " al momento si trova in commercio ad un prezzo medio di ". $game_2->prezzo_medio. " euro. <br>"  ?>
                </div>
                <div class="my-2 border border-info p-2"><?php echo $game_3->nome. " è un videogioco ". $game_3->getGeneriAsString(). " sviluppato da ". $game_3->software_house. 
                " e pubblicato nel ". $game_3->data. " per console ". $game_3->console. 
                " al momento si trova in commercio ad un prezzo medio di ". $game_3->prezzo_medio. " euro. <br>"  ?>
                </div>
                <div class="my-2 border border-info p-2"><?php echo $game_4->nome. " è un videogioco ". $game_4->getGeneriAsString(). " sviluppato da ". $game_4->software_house. 
                " e pubblicato nel ". $game_4->data. " per console ". $game_4->console. 
                " al momento si trova in commercio ad un prezzo medio di ". $game_4->prezzo_medio. " euro. <br>"  ?>
                </div>
                <div class="my-2 border border-info p-2"><?php echo $game_5->nome. " è un videogioco ". $game_5->getGeneriAsString(). " sviluppato da ". $game_5->software_house. 
                " e pubblicato nel ". $game_5->data. " per console ". $game_5->console. 
                " al momento si trova in commercio ad un prezzo medio di ". $game_5->prezzo_medio. " euro. <br>"  ?>
                </div>
                
            </div>
        </div>
    </div>


</body>
</html>