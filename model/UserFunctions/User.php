<?php

/**
 * User class, let's create a user registration and login function, where the user can log into the system.
*/

class UserFunctions
{
    public function addUser($name, $email, $password)
    {
        try
        {
            $sql = "INSERT INTO tb_user (name, email, password) VALUES ('$name', '$email', '$password')";
            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $password);
            $stmt->execute();

            header('Location:../../view/login/login.php');
        }catch (Exception $ex){
            if($ex->errorInfo[1] == 1062){
                return '<script>alert("Usuário já existente!")</script>';
            }else{
                return '<script>alert("Erro ao cadastrar usuário!")</script>';
            }
        }
    }

    public function profile($id)
    {
        try
        {
            $personalInformation = array();
            $sql = "SELECT name, email, id FROM tb_user WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() != 1 or 2)
            {
                $personalInformation = $stmt->fetch();
            }

            return $personalInformation;

        }catch (Exception $ex) {
            printf('Error %s \n', $ex->getMessage());
            return false;
        }
    }

    public function login($name, $password)
    {
        try
        {
            $sql = "SELECT * FROM tb_user WHERE name = :name AND password = :password";
            $stmt = Connection::getConnection()->prepare($sql);
            
            $stmt->bindValue('name', $name);
            $stmt->bindValue('password', md5($password));
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $given_away = $stmt->fetch();

                $_SESSION['idUser'] = $given_away['id'];

                return true;
            }else{
                return false;
            }
            return $given_away;
        }catch (Exception $ex){
            print('Error:'.$ex->getMessage());
            exit;
        }
    }

    public function getAllMembers()
    {
        try
        {
            $sql = "SELECT * FROM tb_user";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
    
            if($stmt->rowCount() > 0)
            {
                $users = $stmt->fetchAll();
    
                
                foreach($users as $user){
                    echo "Nome:".$user['name']." ID:".$user["id"]."<br>";
                    echo "Email:".$user['email']."<br>";
                }
                
                return true;
            }else{
                return false;
            }
        }catch (Exception $ex){
            print('Error:'.$ex->getMessage());
            exit;
        }
    }
}