<?php
namespace ProjetoWeb\src\model\DAO;

require "connect_database.php";

use ProjetoWeb\src\model\VO\UsuarioVO;

class UsuarioDAO {
    
    
        static function create($dado)
        {
            // TODO: Implement create() method.
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $senha = md5($senha);
            $link = getConnection();
            $query = "insert into usuario (email, nome,senha) values ('{$email}','{$nome}','{$senha}')";
            $result = $link->query($query);
            $link->close();
            if (!$result){
                echo mysqli_error();
                exit(0);
            }
    
    
        }
        static function findById($id)
        {
            // TODO: Implement findById() method.
            $link = getConnection();
            $query = "select * from login where id=$id and user_id={$_SESSION['user_id']}";
            if ($result = $link->query($query)){
                while ($row = $result->fetch_row()){
                    return new UsuarioVO($row[0], $row[1], $row[2],$row[3]);
                }
            }
            $link->close();
            return null;
        }
    
        static function update($id, $dado)
        {
            
            $email = $dado->getEmail();
            $nome = $dado->getNome();
            $senha = $dado->getSenha();
        
            $link = getConnection();
            $query = "update usuario set email='{$email}', nome='{$nome}',senha='{$senha}', where id=$id";
            $link->query($query);
            $link->close();
    
        }

        function verifyUserAndPassword($email, $password)
        {
            // TODO: Implement verifyUserAndPassword() method.
            $link = getConnection();
            $query = "select id, nome, email from usuario where email='{$email}' and senha ='{$password}'";
            if($result = $link->query($query)){
                while ($row = $result->fetch_row()){
                    $link->close();
                   return new UsuarioVO($row[0], $row[1], $row[2], null);
                }
            }
            $link->close();
            return null;
    
        }
    
    
    }
    
