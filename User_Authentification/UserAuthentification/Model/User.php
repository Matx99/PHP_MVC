<?php
class User {
    private  $id;
    private  $email;
    private  $password;
    private  $firstName;
    private  $lastName;
    private  $address;
    private  $postalCode;
    private  $city;

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate (array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    
    public function setId($id1) {
        $this->id=$id1;
    }

    public function getId() {
        return $this->id;
    }

    public function setEmail($email1) {
        $this->email=$email1;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password1) {
        $this->password=$password1;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setFirstName($firstName1) {
        if (is_string($firstName1)) { // on vérifie qu'il s'agit bien d'une chaine de caractères
            $this->firstName=$firstName1;
        }      
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName1) {
        if (is_string($lastName1)) { // on vérifie qu'il s'agit bien d'une chaine de caractères
            $this->lastName=$lastName1;
        }
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setAddress($address1) {
        $this->address=$address1;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setPostalCode($postalCode1) {
        $this->postalCode=$postalCode1;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setCity($city1) {
        $this->city=$city1;
    }

    public function getCity() {
        return $this->city;
    }
 
}

?>