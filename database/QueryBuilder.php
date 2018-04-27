<?php
// QueryBuilder is responsible for building up sql queries
class QueryBuilder
{
    protected $pdo;
// when building a class say to your self...
//      what other things does my class need to do its job...collaborators --> dependencies
//      we define these collaborators (dependencies) in the constructor method
    public function __construct($pdo)// Type Hint pdo object so nothing else can be passed to this method
    {
        // the place for the class to declare what its dependencies are...what collaborators it requires to do its job
        // __construct(i need a ?, I need a ?) 
        // we delegate functionality to multiple dependencies...
        //      if one dependency is doing everything this class is going to get muddy quick 
        //          & not going to want to work with it
        //          & its going to take too long to figure out what is even going on
        //      QueryBuilder degates to pdo object to connect to database
        //          in order for the QueryBuilder to do its job it needs access to a pdo object
        $this->pdo = $pdo;
    }

    // 
    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}" );  // we prepare a statement, but we haven't executed yet

        $statement->execute();  // execute the statement

        // var_dump($statement->fetchAll());  // fetch all results

        //$tasks = $statement->fetchAll(); // index=row & return the values as both array forms... associative array & indexed array
        // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);  // instance of a generic class
        return $statement->fetchAll(PDO::FETCH_CLASS,$intoClass);  // instance of a generic class
    }
}