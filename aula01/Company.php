<?php 

class Company{
    
    private $id;
    private $nome;
    private $cnpj;
    private $endereco;
    private $cidade;

    public function __construct()
    {

    }


    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }


    public function cadastrar()
    {

    }

    public function editar()
    {
        
    }

    public function listar()
    {
        
    }

    public function excluir()
    {
        
    }
}
