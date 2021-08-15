
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

    private $id;
    private $tam;
    public $Arreglo = array();

    public function __construct($tam, $id){
        $this->tam = $tam;
        $this->id = $id;
    } 

    public function rellenarConjunto(){
        for($i=0; $i<$this->tam; $i++){
            $this->Arreglo[$i] = rand(0,20);
        }
    }
    public function ImprimirValores(){
        echo ('<pre>');
        print_r ($this->Arreglo);
        echo ('</pre>');
    }
    public function Limpiar(){
        $Aux = array_unique($this->Arreglo);
        $this->Arreglo = $Aux;
    }

    public function Union($Auxiliar){
         $Resultante = array_merge($this->Arreglo, $Auxiliar->Arreglo);
         return $Resultante;
    }
    public function Interseccion($Auxiliar){
        $Resultante = array_intersect($this->Arreglo, $Auxiliar->Arreglo);
        return $Resultante;
    }
    public function Diferencia($Auxiliar){
        $Resultante = array_diff($this->Arreglo, $Auxiliar->Arreglo);
        return $Resultante;
    }

}

$ConjuntoA = new Conjunto($A,'A');
$ConjuntoB = new Conjunto($B,'B');
$ConjuntoC = new Conjunto(0,'C');
$ConjuntoD = new Conjunto(0,'D');
$ConjuntoE = new COnjunto(0,'E');

$ConjuntoA->rellenarConjunto();
$ConjuntoB->rellenarConjunto();
$ConjuntoA->ImprimirValores();
$ConjuntoB->ImprimirValores();

$ConjuntoC->Arreglo = $ConjuntoA->Union($ConjuntoB);
$ConjuntoC->ImprimirValores();

$ConjuntoD->Arreglo = $ConjuntoA->Interseccion($ConjuntoB);
$ConjuntoD->ImprimirValores();

$ConjuntoE->Arreglo = $ConjuntoA->Diferencia($ConjuntoB);
$ConjuntoE->ImprimirValores();

?>
</body>
</html>