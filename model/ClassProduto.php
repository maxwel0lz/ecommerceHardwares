<?php
class Produto {
    // Atributos da classe
    private $id_prod;
    private $marca_prod;
    private $titulo_prod;
    private $imagem_prod;
    private $descricao_prod;
    private $valor_prod;

    // Construtor para inicializar os atributos
    public function __construct($id_prod, $marca_prod, $titulo_prod, $imagem_prod, $descricao_prod, $valor_prod) {
        $this->id_prod = $id_prod;
        $this->marca_prod = $marca_prod;
        $this->titulo_prod = $titulo_prod;
        $this->imagem_prod = $imagem_prod;
        $this->descricao_prod = $descricao_prod;
        $this->valor_prod = $valor_prod;
    }

    // Métodos getters
    public function getIdProd() {
        return $this->id_prod;
    }

    public function getMarcaProd() {
        return $this->marca_prod;
    }

    public function getTituloProd() {
        return $this->titulo_prod;
    }

    public function getImagemProd() {
        return $this->imagem_prod;
    }

    public function getDescricaoProd() {
        return $this->descricao_prod;
    }

    public function getValorProd() {
        return $this->valor_prod;
    }

    // Métodos setters
    public function setIdProd($id_prod) {
        $this->id_prod = $id_prod;
    }

    public function setMarcaProd($marca_prod) {
        $this->marca_prod = $marca_prod;
    }

    public function setTituloProd($titulo_prod) {
        $this->titulo_prod = $titulo_prod;
    }

    public function setImagemProd($imagem_prod) {
        $this->imagem_prod = $imagem_prod;
    }

    public function setDescricaoProd($descricao_prod) {
        $this->descricao_prod = $descricao_prod;
    }

    public function setValorProd($valor_prod) {
        $this->valor_prod = $valor_prod;
    }
}
?>
