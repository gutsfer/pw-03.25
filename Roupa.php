<?php

include "Conexao.php";

class Roupa{
    private int $id;
    private string $tipo;
    private string $marca;
    private string $tamanho;
    private float $preco;

    public function __construct(string $tipo, string $marca, string $tamanho, $preco){
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->tamanho = $tamanho;
        $this->preco = $preco;
    }
    public function Cadastrar(){
        $conexao = new Conexao();
        $sql = "INSERT INTO
        Roupa(tipo, marca, tamanho, preco)
        VALUES (:tipo, :marca, :tamanho, :preco)";
        $pdo = $conexao->Conectar();
        $preparo = $pdo->prepare($sql);
        $preparo->bindParam(':tipo', $this->tipo);
        $preparo->bindParam(':marca', $this->marca);
        $preparo->bindParam(':tamanho', $this->tamanho);
        $preparo->bindParam(':preco', $this->preco);
        $preparo->execute();
    }

    public static function ListarTodos(){
        $conexao = new Conexao();
        $sql = "SELECT * FROM Roupa";
        $dados = $conexao->Consultar($sql);
        return $dados;
    }
}