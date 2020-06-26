<?php

class SuperHeroi
{
	private $id;
	private $nome;
	private $poderEspecial;
	private $energia;
	private $forca;
	private $origem;

	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getPoderEspecial()
	{
		return $this->poderEspecial;
	}

	public function getEnergia()
	{
		return $this->energia;
	}

	public function getForca()
	{
		return $this->forca;
	}

	public function getOrigem()
	{
		return $this->origem;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setPoderEspecial($poderEspecial)
	{
		$this->poderEspecial = $poderEspecial;
	}

	public function setEnergia($energia)
	{
		$this->energia = $energia;
	}

	public function setForca($forca)
	{
		$this->forca = $forca;
	}

	public function setorigem($origem)
	{
		$this->origem = $origem;
	}

	public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->poderEspecial = $poderEspecial;
		$this->energia = $energia;
		$this->forca = $forca;
		$this->origem = $origem;
	}

	public function aumentarEnergia()
	{
		$this->energia = $this->energia * 119126109;
		return $this->energia;
	}

	public function calcularPoderMedio()
	{
		return ($this->energia + $this->forca) / 2;
	}

	public function __toString()
	{
		return "Oi, eu sou o {$this->nome} !!!";
	}
}

$goku = new SuperHeroi("001", "Goku", "Kamehame-haaaaaaa", 2000, 8001, "Dragon Ball Z");
$harryPotter = new SuperHeroi("002", "Harry Potter", "Expelliarmus", 200, 30, "Harry Potter");
$stark = new SuperHeroi("003", "Homem de Ferro", "Gênio, bilionário, playboy, filantropo", 500, 300, "Marvel");
$rick = new SuperHeroi("004", "Rick", "Inteligência", 5, 2000, "Rick and Morty");

echo ($goku);
