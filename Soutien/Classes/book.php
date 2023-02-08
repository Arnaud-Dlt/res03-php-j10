<?php 
class Book {
    private ? int $id;
    private string $title;
    private Author $author;
    private array $categories;
    
    public function __construct(? int $id, string $title, Author $author)
    {
        $this-> id = $id;
        $this-> title = $title;
        $this-> author = $author;
        $this-> categories = [];
    }
    
    /// GETTER
    
    public function getId() : ? int
    {
        return $this->id;
    }
    
    public function getTitle() : string
    {
        return $this->title;
    }
    
    public function getAuthor() : string
    {
        return $this->author;
    }
    
    public function getCategory() : string
    {
        return $this->categories;
    }
    
    /// SETTER
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    
    public function setAuthor(string $author) : void
    {
        $this->author = $author;
    }
    
    public function setCategory(string $email) : void
    {
        $this->categories = $categories;
    }
    
    function addCategory(Category $category) : array
    {
        $this->categories[] = $category;
        return $this->categories;;
    }
    
    function removeCategory(Category $category) : array
    {
        for ($i=0; $i<count($this->categories); $i++){
            if ($this->categories[$i]===$category){
                unset($this->categories[$i]);
                return $this->categories;
            }
        };
    }
}

?>