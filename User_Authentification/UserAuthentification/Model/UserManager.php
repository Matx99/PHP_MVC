<?php

class UserManager {

    private $db;

    public function __construct($db1){
        $this->db=$db1;
    }

    public function create(User $user){
        $req = $this->db->prepare(
            'INSERT INTO Users (id, lastName, firstName, email, address, postalCode, city, password, admin)
            VALUES (NULL, :lastName, :firstName, :email, :address, :cp, :city, :password, 0)'
            );
            $req->execute(
                array('lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'cp' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => sha1($user->getPassword())
                )
            );
    }

    public function login($email, $password){
        $password = sha1($password);
        $req = $this->db->prepare(
            'SELECT * FROM Users WHERE email = :email AND password = :password'
        );
        $req->execute(
                    array(
                        "email" => $email,
                        "password" => $password
                    )
                );

        return $req->fetch();
    }

    public function update(User $user){
        $req = $this->db->prepare(
            'UPDATE Users ( lastName, firstName, email, address, postalCode, city, password, admin )
            SET ( :lastName, :firstName, :email, :address, :cp, :city, :password, 0 )
            WHERE $user->getId = :id'
            );
            $req->execute(
                array('lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'cp' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => sha1($user->getPassword())
                )
            );
    }

    public function delete(User $user){
        $req = $this->db->prepare('DELETE * FROM Users WHERE $user->getId = :id');
        $req->execute();
        return $req->fetchAll();
    }

    public function findOne($id){
        $req = $this->db->prepare('SELECT * FROM Users WHERE id = :id');
        $req->execute(array("id" => $id));
        return $req->fetchAll();
    }

    public function findAll(){
        $req = $this->db->prepare('SELECT * FROM Users');
        $req->execute();
        return $req->fetchAll();
    }

    public function findByEmail($email){
        $req = $this->db->prepare("SELECT * FROM Users WHERE email = :email");
        $req->execute(array("email" => $email));
        $result =  $req->fetchAll();
        return $result;
    }

}

?>