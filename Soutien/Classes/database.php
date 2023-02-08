<?php 
require "author.php";
require "book.php";

/// AUTHOR 

function findAllAuthors() : array
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("SELECT * FROM authors");
    $query->execute();
    $getAllUsers=$query->fetchAll(PDO::FETCH_ASSOC);
    
    $tabusers=[];
    foreach($getAllUsers as $user){
        $object=new Author($user['id'], $user['first_name'],$user['last_name'],$user['biography']);
        array_push($tabusers, $object);
    }
    return $tabusers;
}

function findAuthorByFirstAndLastName(string $firstName, string $lastName) : Author
{
    // se connecter à la base de données
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM authors WHERE first_name= :first_name AND last_name= :last_name");
    $parameters= [
        'first_name' => $firstName,
        'last_name'=> $lastName
        ];
    $query->execute($parameters);
    $getUserByName=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newAuthor=new Author($getUserByName['id'], $getUserByName['firstName'],$getUserByName['lastName'],$getUserByName['biography']);
    
    return $newAuthor;
}

function findAuthorById(int $id) : Author
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM authors WHERE id= :id");
    $parameters= [
        'id' => $id,
        ];
    $query->execute($parameters);
    $getUserById=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newAuthor=new Author($getUserById['id'], $getUserById['first_name'],$getUserById['last_name'],$getUserById['biography']);
    
    return $newAuthor;
}

function updateAuthor(Author $author) : void
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("UPDATE authors SET first_name = :first_name, last_name=:last_name, biography=:biography WHERE authors.id=:id");
    $parameters= [
        'id' => $author->getId(),
        'first_name'=> $author->getFirstName(),
        'last_name' =>$author->getLastName(),
        'biography' => $author->getBio()
        ];
    $query->execute($parameters);
    $allUsers=$query->fetch(PDO::FETCH_ASSOC);
}

function createAuthor(Author $author) : Author
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("INSERT INTO authors VALUES (null, :first_name, :last_name,:biography)");
    $parameters= [
        'first_name'=> $author->getFirstName(),
        'last_name' =>$author->getLastName(),
        'biography' => $author->getBio()
        ];
    $query->execute($parameters);
    
    $getAuthor=$query->fetch(PDO::FETCH_ASSOC);
    
    // utiliser findAuthorByFirstAndLastName pour le récupérer
    return $author;
    
    // le retourner
}


function deleteAuthor(Author $author) : void
{
    // se connecter à la base de données

    // supprimer l'author dans la base de données

    // ne rien retourner (la fonction retourne void)
}


/// CATEGORY

function findAllCategories() : array
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("SELECT * FROM categories");
    $query->execute();
    $getAllCat=$query->fetchAll(PDO::FETCH_ASSOC);
    
    $tabCat=[];
    foreach($getAllCat as $cat){
        $object=new Category($cat['id'], $cat['first_name'],$cat['last_name'],$cat['biography']);
        array_push($tabCat, $cat);
    }
    return $tabCat;
}

function findCategoryByName(string $name) : Category
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM categories WHERE name= :name");
    $parameters= [
        'name' => $name,
        ];
    $query->execute($parameters);
    $getCatByName=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newCat=new Category($getCatByName['id'], $getCatByName['name'],$getCatByName['description']);
    
    return $newCat;
}

function findCategoryById(int $id) : Category
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM categories WHERE id= :id");
    $parameters= [
        'id' => $id,
        ];
    $query->execute($parameters);
    $getCatById=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newCat=new Category($getCatById['id'], $getCatById['name'],$getCatById['description'],$getUserById['biography']);
    
    return $newCat;
}

function createCategory(Category $category) : Category
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("INSERT INTO categories VALUES (null, :name, :description)");
    $parameters= [
        'name'=> $category->getName(),
        'description' =>$category->getDescription(),
        ];
    $query->execute($parameters);
    
    $getCat=$query->fetch(PDO::FETCH_ASSOC);
    
    // utiliser findAuthorByFirstAndLastName pour le récupérer
    return $category;
    
    // le retourner
}

function updateCategory(Category $category) : void
{
    // se connecter à la base de données

    // sauvegarder la catégorie dans la base de données

    // remplir une Category avec

    // ne rien retourner (la fonction retourne void)
}

function deleteCategory(Category $category) : void
{
    // se connecter à la base de données

    // supprimer la catégorie dans la base de données

    // ne rien retourner (la fonction retourne void)
}


/// BOOK

function findAllBooks() : array
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("SELECT * FROM books");
    $query->execute();
    $getAllBooks=$query->fetchAll(PDO::FETCH_ASSOC);
    
    $tabbooks=[];
    foreach($getAllBooks as $book){
        $object=new Book($book['id'], $book['title'],$book['author'],$book['categories']);
        array_push($tabBooks, $object);
    }
    return $tabBooks;
}

function findBookByTitle(string $title) : Book
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM books WHERE title= :title");
    $parameters= [
        'title' => $title,
        ];
    $query->execute($parameters);
    $getBookByTitle=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newBook=new Book($getBookByTitle['id'], $getBookByTitle['title'],$getBookByTitle['author']);
    
    return $newBook;
}

function findBookById(int $id) : Book
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    // récupérer un auteur qui a ce firstName et lastName
    $query=$db->prepare("SELECT * FROM books WHERE id= :id");
    $parameters= [
        'id' => $id,
        ];
    $query->execute($parameters);
    $getBookById=$query->fetch(PDO::FETCH_ASSOC);
    // remplir un Author avec
    $newBook=new Book($getBookById['id'], $getBookById['title'],$getBookById['author'],$getBookById['categories']);
    
    return $newBook;
}

function createBook(Book $book) : Book
{
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj10",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    $query=$db->prepare("INSERT INTO books VALUES (null, :title, :author,:categories)");
    $parameters= [
        'title'=> $book->getTitle(),
        'author' =>$book->getAuthor(),
        'categories' => $book->getCategory()
        ];
    $query->execute($parameters);
    
    $getBook=$query->fetch(PDO::FETCH_ASSOC);
    
    // utiliser findAuthorByFirstAndLastName pour le récupérer
    return $book;
}

function updateBook(Book $book) : void
{
    // se connecter à la base de données

    // sauvegarder le livre dans la base de données

    // remplir un Book avec

    // ne rien retourner (la fonction retourne void)
}

function deleteBook(Book $book) : void
{
    // se connecter à la base de données

    // supprimer le livre dans la base de données

    // ne rien retourner (la fonction retourne void)
}


/// RELATIONS

function findBooksByCategory(Category $category) : array
{
    // se connecter à la base de données

    // récupérer tous les livres qui ont la catégorie

    // remplir un tableau de Books avec

    // retourner le tableau
}

function findCategoriesByBook(Book $book) : array
{
    // se connecter à la base de données

    // récupérer toutes les catégories qui ont ce liivre

    // remplir un tableau de Category

    // retourner le tableau
}
?>