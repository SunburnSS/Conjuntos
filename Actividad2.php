
<html>
<head>
<title> Conjuntos en PHP </title>
<h2> Producto de matrices en PHP </h2>
</head>

<body>

<br>Ingrese el tamanio del conjunto A: </br>
<form action="actividad2.php" method="post">
<input type="number" name="conjuntoA">
<br>Ingrese el tamanio del conjunto B: </br>
<input type="number" name="conjuntoB">
<br></br>
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
        echo "Conjunto [".$this->id."]:";
        echo ('<pre>');
        print_r ($this->Arreglo);
        echo ('</pre>')."<br>";
    }
    public function Limpiar(){
        $Aux = array_unique($this->Arreglo);
        $this->Arreglo = "";
        for($i=0;$i<sizeof($Aux);$i++){
            $this->Arreglo[$i] = $Aux[$i];
        }
    }
    public function Union($Auxiliar){
         $Res = array_merge($this->Arreglo, $Auxiliar->Arreglo);
         $Resultante = array_unique($Res);
         return $Resultante;
    }
    public function Interseccion($Auxiliar){
        $Res = array_intersect($this->Arreglo, $Auxiliar->Arreglo);
        $Resultante = array_unique($Res);
        return $Resultante;
    }
    public function Diferencia($Auxiliar){
        $Res = array_diff($this->Arreglo, $Auxiliar->Arreglo);
        $Resultante = array_unique($Res);
        return $Resultante;
    }
}

$ConjuntoA = new Conjunto($A,'A');
$ConjuntoB = new Conjunto($B,'B');
$ConjuntoC = new Conjunto(0,'C');
$ConjuntoD = new Conjunto(0,'D');
$ConjuntoE = new COnjunto(0,'E');

$ConjuntoA->rellenarConjunto();
$ConjuntoA->ImprimirValores();

$ConjuntoB->rellenarConjunto();
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