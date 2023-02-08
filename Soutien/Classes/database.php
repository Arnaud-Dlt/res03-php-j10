<?php 
    
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
    $allUsers=$getAllUsers;
    return $allUsers;
}
// var_dump(findAllAuthors());

function findAuthorByFirstAndLastName(string $firstName, string $lastName) : Author
{
    // se connecter à la base de données

    // récupérer un auteur qui a ce firstName et lastName

    // remplir un Author avec

    // retourner l'Author
}

function findAuthorById(int $id) : Author
{
    // se connecter à la base de données

    // récupérer un auteur qui a cet id

    // remplir un Author avec

    // retourner l'Author
}

function updateAuthor(Author $author) : void
{
    // se connecter à la base de données

    // sauvegarder l'author dans la base de données

    // remplir un Author avec

    // ne rien retourner (la fonction retourne void)
}

function createAuthor(Author $author) : Author
{
    // se connecter à la base de données

    // insérer l'author dans la base de données

    // utiliser findAuthorByFirstAndLastName pour le récupérer

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
    $getAllCategories=$query->fetchAll(PDO::FETCH_ASSOC);
    $allCategories=$getAllCategories;
    return $allCategories;
}
// var_dump(findAllCategories());

function findCategoryByName(string $name) : Category
{
    // se connecter à la base de données

    // récupérer une catégorie qui a ce name

    // remplir une Category avec

    // retourner la Category
}

function findCategoryById(int $id) : Category
{
    // se connecter à la base de données

    // récupérer une catégorie qui a cet id

    // remplir une Category avec

    // retourner la Category
}

function createCategory(Category $category) : Category
{
    // se connecter à la base de données

    // insérer la category dans la base de données

    // utiliser findCategoryByName pour la récupérer

    // la retourner
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
    $query=$db->prepare("SELECT * FROM categories");
    $query->execute();
    $getAllBooks=$query->fetchAll(PDO::FETCH_ASSOC);
    $allBook=$getAllBooks;
    return $allBooks;
}

function findBookByTitle(string $title) : Book
{
    // se connecter à la base de données

    // récupérer un livre qui a ce title

    // remplir un Book avec

    // retourner le Book
}

function findBookById(int $id) : Book
{
    // se connecter à la base de données

    // récupérer un livre qui a cet id

    // remplir un Book avec

    // retourner le Book
}

function createBook(Book $book) : Book
{
    // se connecter à la base de données

    // insérer le livre dans la base de données

    // utiliser findBookByTitle pour le récupérer

    // le retourner
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