
<html>
<head>
<title> Conjuntos en PHP </title>
</head>

<body>

<br>Ingrese el tamanio del conjunto A: </br>
<form action="actividad2.php" method="post">
<input type="number" name="conjuntoA">
<br></br>
<br>Ingrese el tamanio del conjunto B: </br>
<input type="number" name="conjuntoB">
<input type="submit" value="Enviar">
</form> 

<?php

$A=$_POST['conjuntoA'];
$B=$_POST['conjuntoB'];

class Conjunto{
    public $tam;
    public $Arreglo = array();

    public function __construct($tam){
        $this->tam = $tam;
    } 

    public function rellenarConjunto(){
        for($i=0; $i<$this->tam; $i++){
            $this->Arreglo[$i] = rand(0,20);
        }
    }
    public function ImprimirValores(){
        for($i=0; $i<sizeof($this->Arreglo); $i++){
            echo $this->Arreglo[$i]." ";
        }
    }
    public function Limpiar(){
        $Aux = array_unique($this->Arreglo);
        $this->Arreglo = $Aux;
    }
}

$conjuntin = new Conjunto($A);
$conjuntin->rellenarConjunto();
$conjuntin->ImprimirValores();
echo 'Soy una línea.\n';
$conjuntin->Limpiar($conjuntin);
$conjuntin->ImprimirValores();

?>
</body>
</html>