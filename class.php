<?php
class filmes{
  private $nome;
  private $duracao;
  private $horario;
  private $sala;
  public function __construct($nome,$duracao,$horario,$sala){
    $this->nome = $nome;
    $this->duracao = $duracao;
    $this->horario = $horario;
    $this->sala = $sala;
  }
  public function getname(){
    return "Filme: ".$this->nome."\nDuração: ".$this->duracao."\nHorario: ".$this->horario."\nSala: ".$this->sala;
  }
}
$filme = new filmes("John wick","2:40","19:00","4");
echo $filme->getname();

class cliente{
  private $nome;
  private $cpf;
  private $email;
  private $ingreso;
  public function __construct($nome,$email){
    $this->nome=$nome;
    $this->email=$email;
  }
  public function getname(){
    return "\nNome: ".$this->nome."\nEmail: ".$this->email;
  }
}
$cliente = new cliente("Lucas Brito","italoliveira123@gmail.com");
echo $cliente->getname();

class ingresso{
  private $poltrona;
  private $preco;
  private $filme;
  private $sala;

  public function __construct($poltrona,$preco){
    $this->poltrona=$poltrona;
    $this->preco=$preco;
  }
  public function getname(){
    return "\nPoltrona: ".$this->poltrona."\nPreço: ".$this->preco;
  }
}
$ingresso = new ingresso("a2","R$10.00");
echo $ingresso->getname();
?>