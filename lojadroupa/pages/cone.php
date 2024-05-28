<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'loja');
define('PORT', '3306'); 
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST .';port='.PORT.';dbname=' . DB_NAME.';charset=utf8', DB_USER, DB_PASS);
   
    return $PDO;
}

 $conecta = db_connect();
 //$stmt = $conecta->query("SELECT * FROM tbpessoa");
 // while ($row = $stmt->fetch()) {	
  //  echo $row['id']." | ".$row['nome'];
  //  echo " | ".$row['cpf']." | ".$row['log']."<br>";
  //}

// Função para inserir cliente
  function setCliente($cep, $telefone, $nome, $cpf, $sexo)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_cliente (cep, telefone, nome, cpf, sexo) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$cep, $telefone, $nome, $cpf, $sexo]);
        echo 'Cliente inserido com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir cliente: ' . $e->getMessage());
    }
}

// Função para obter todos os clientes
function getCliente()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_cliente');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter clientes: ' . $e->getMessage());
    }
}



function setFuncionario($nome, $cargo, $cpf, $sexo)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_funcionario (cargo, nome, cpf, sexo) VALUES (?, ?, ?, ?)');
        $stmt->execute([$nome, $cargo, $cpf, $sexo]);
        echo 'Funcionario inserido com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir funcionario: ' . $e->getMessage());
    }
}

// Função para obter todos os funcionarios
function getFuncionario()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_funcionario');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter funcionarios: ' . $e->getMessage());
    }
}

function setProduto($valor, $quantidade, $marca, $fornece, $nome)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_produto (nome, valor, quantidade, marca, fornece) VALUES (?, ?, ?, ?)');
        $stmt->execute([$valor, $quantidade, $marca, $fornece, $nome]);
        echo 'Produto inserido com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir produtos: ' . $e->getMessage());
    }
}

// Função para obter todos os produtos
function getProduto()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_produto');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter produtos: ' . $e->getMessage());
    }
}

function setVenda($data, $total, $cliente, $funcionario, $quantidade, $produto, $cpf)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_venda (data, total, cliente, funcionario, quantidade, produto, cpf) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$data, $total, $cliente, $funcionario, $quantidade, $produto, $cpf]);
        echo 'Venda inserida com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir vendas: ' . $e->getMessage());
    }
}

// Função para obter todas as vendas
function getVenda()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_venda');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter vendas: ' . $e->getMessage());
    }
}

function setFornecedor($nome_fornecedor, $cnpj)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_fornecedor (nome_fornecedor, cnpj) VALUES (?, ?)');
        $stmt->execute([$nome_fornecedor, $cnpj]);
        echo 'Fornecedor inserido com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir fornecedor: ' . $e->getMessage());
    }
}

// Função para obter todas as vendas
function getFornecedor()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_fornecedor');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter fornecedor ' . $e->getMessage());
    }
}

function setItemvenda($produto, $venda)
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->prepare('INSERT INTO tb_itemvenda (produto, venda) VALUES (?, ?)');
        $stmt->execute([$venda, $produto]);
        echo 'Itemvenda inserido com sucesso!';
    } catch (PDOException $e) {
        die('Erro ao inserir itemvenda: ' . $e->getMessage());
    }
}

// Função para obter todas as vendas
function getItemvenda()
{
    $conecta = db_connect();
    try {
        $stmt = $conecta->query('SELECT * FROM tb_itemvenda');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao obter itemvenda ' . $e->getMessage());
    }
}



?>