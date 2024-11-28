<?php

require_once "./models/ConexaoBanco.php";

class FilmeModel extends ConexaoBanco {

    function __construct() {
        parent::__construct();
    }

    function selectById($id_filme) {
        $sql = $this->conBD->prepare('SELECT * FROM filme WHERE id=:id');
        $sql->bindParam(':id', $id_filme);
        $sql->execute();
        return $sql->fetch();
    }

    function insert($data) {
        $sql = $this->conBD->prepare(" INSERT INTO filme (titulo_filme, especificidade_filme, elenco, img_filme, trailer, mini_sinopse, sinopse, img_banner, id_sessao) VALUES (:titulo_filme, :especificidade_filme, :elenco, :img_filme, :trailer, :mini_sinopse, :sinopse, :img_banner, :id_sessao)");
        $sql->bindParam(':titulo_filme', $data['titulo_filme']);
        $sql->bindParam(':especificidade_filme', $data['especificidade']);
        $sql->bindParam(':elenco', $data['elenco']);
        $sql->bindParam(':img_filme', $data['capa']);
        $sql->bindParam(':mini_sinopse', $data['mini_sinopse']);
        $sql->bindParam(':trailer', $data['trailer']);
        $sql->bindParam(':sinopse', $data['sinopse']);
        $sql->bindParam(':img_banner', $data['banner']);
        $sql->bindParam(':id_sessao', $data['id_sessao']);
        $sql->execute();
        return $sql->rowCount();
    }
    
    function update($data) {
        $sql = $this->conBD->prepare("UPDATE filme SET titulo_filme=:titulo_filme, especificidade_filme=:especificidade_filme, elenco=:elenco, img_filme=:img_filme, trailer=:trailer, mini_sinopse=:mini_sinopse, sinopse=:sinopse, img_banner=:img_banner, id_sessao=:id_sessao WHERE id=:id ");
        $sql->bindParam(':id', $data['id_filme']);
        $sql->bindParam(':titulo_filme', $data['titulo_filme']);
        $sql->bindParam(':especificidade_filme', $data['especificidade']);
        $sql->bindParam(':elenco', $data['elenco']);
        $sql->bindParam(':img_filme', $data['capa']);
        $sql->bindParam(':trailer', $data['trailer']);
        $sql->bindParam(':mini_sinopse', $data['mini_sinopse']);
        $sql->bindParam(':sinopse', $data['sinopse']);
        $sql->bindParam(':img_banner', $data['banner']);
        $sql->bindParam(':id_sessao', $data['id_sessao']);
        $sql->execute();
        return $sql->rowCount();
    }
    
    function buscarTodos() {
        $sql = $this->conBD->prepare('SELECT * FROM filme');
        $sql->execute();
        $filmes = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $filmes ? $filmes : [];
    }    

    function buscarSessoes() {
        $sql = $this->conBD->prepare("SELECT id, nome FROM sessao");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function buscarFilmesPorSessao($id_sessao) {
        $sql = $this->conBD->prepare('SELECT * FROM filme WHERE id_sessao = :id_sessao');
        $sql->bindParam(':id_sessao', $id_sessao);
        $sql->execute();
        return $sql->fetchAll();
    } 

    function delete($id_filme) {
        $sql = $this->conBD->prepare("DELETE FROM filme WHERE id = :id");
        $sql->bindParam(':id', $id_filme);
        $sql->execute();
        return $sql->rowCount();
    }
    
    function deletarFilmesPorSessao($sessao_id) {
        $sql = $this->conBD->prepare('DELETE FROM filme WHERE id_sessao = :sessao_id');
        $sql->bindParam(':sessao_id', $sessao_id);
        $sql->execute();
    }
    
}