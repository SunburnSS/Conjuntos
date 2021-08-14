
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
    private $tam;
    private $Arreglo = array();

    public function __construct($tam){
        $this->tam = $tam;
    } 

    public function rellenarConjunto(){
        for($i=0; $i<$this->tam; $i++){
            $Arreglo[$i] = rand(0,20);
            echo $Arreglo[$i];
        }
    }
}

$conjuntin = new Conjunto($A);
$conjuntin->rellenarConjunto();

?>
</body>
</html>