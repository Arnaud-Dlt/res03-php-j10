<?php 
class Author {
    private ? int $id;
    private string $firstName;
    private string $lastName;
    private string $biography;
    
    public function __construct(? int $id, string $firstName, string $lastName, string $biography)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
    }
    
    /// GETTER
    
    public function getId() : ? int
    {
        return $this->id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    
    public function getLastName() : string
    {
        return $this->lastName;
    }
    
    public function getBio() : string
    {
        return $this->biography;
    }
    
    /// SETTER
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    public function setBio(string $email) : void
    {
        $this->biography = $biography;
    }
}

?>