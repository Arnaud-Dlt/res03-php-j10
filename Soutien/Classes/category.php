<?php 

class Category {
    private ? int $id;
    private string $name;
    private string $description;
    private array $books;
    
    public function __construct(? int $id, string $name, string $description)
    {
        $this-> id = $id;
        $this-> name = $name;
        $this-> description = $description;
        $this-> books = [];
    }
    
    /// GETTER
    
    public function getId() : ? int
    {
        return $this->id;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function getDescription() : string
    {
        return $this->description;
    }
    
    public function getBooks() : string
    {
        return $this->books;
    }
    
    /// SETTER
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
    
    public function setBooks(string $email) : void
    {
        $this->books = $books;
    }
    
    function addBook(Book $book) : array
    {
        $this->books[] = $book;
        return $this->books;;
    }
    
    function removeBook(Book $book) : array
    {
        for ($i=0; $i<count($this->books); $i++){
            if ($this->books[$i]===$book){
                unset($this->books[$i]);
                return $this->books;
            }
        };
    }
}
?>