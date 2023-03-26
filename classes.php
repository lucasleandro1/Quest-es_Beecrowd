<?php
//requiere_once "abcde.php"; chamar outro arquivo php
class veiculo{
  private $nome;
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getNome(){
    return $this->nome;
  }
}
$a = new veiculo ();
$a->setNome(readline());
echo $a->getNome();