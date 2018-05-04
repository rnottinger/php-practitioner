<?php
namespace App\Core\Database;
use PDO;
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
        $intoClass = "App\\Models\\{$intoClass}";
        $statement = $this->pdo->prepare("select * from {$table}" );  // we prepare a statement, but we haven't executed yet

        $statement->execute();  // execute the statement

        // var_dump($statement->fetchAll());  // fetch all results

        //$tasks = $statement->fetchAll(); // index=row & return the values as both array forms... associative array & indexed array
        // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);  // instance of a generic class
        return $statement->fetchAll(PDO::FETCH_CLASS,$intoClass);  // instance of a generic class
    }

    public function insert($table,$parameters)
    {
        $columnNames    = implode(', ', array_keys($parameters));
        // $columnValues   = ':' . implode(', :', array_keys($parameters));

        $columnValues = array_map(function ($param){
            return ":{$param}";
        }, array_keys($parameters));
        $columnValues = implode(', ',$columnValues);

        // dd($columnValues);

        // sprintf - allows you to declare a string with placeholders which you can attach variables or values to
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,$columnNames,$columnValues
        );

        // $parameters = the key represents the column name
        // dd(implode(', ', array_keys($parameters)));

        // dd($sql);
        // insert into %s (%s) values (%s)  <-- says insert into some table name ...some column names ... some column values
        // $statement = $this->pdo->prepare("insert into {table} (%s) values( :first_name, :last_name ");

        try{
            $statement = $this->pdo->prepare($sql);
            //so at what point does it bind to the values...you can do this in a couple different ways
            // $statement->bindParam(':name','Joe');// says bind the :placeholder parameter to value
            
            // alternatively you can just pass an array to the execute method
            $statement->execute($parameters);

        // } catch (Exception $e)
        } catch (PDOException $e){
            // could redirect or display a 404 page
            die('Whoops, something went wrong.');
            // in real live you will have something more sophisticated where you will let this bubble up 
            // or local development you will spit out the message itself
            // die($e->getMessage());  // but for production you would want to show this information to the user 
            // but would just show a generic message or a 404 page
        }


        // so now if we pass a parameter that does not exist then it should fail but we instead get a warning
        //      but really I want an exception...this is an important thing...
        //          the query could not be performed...so lets make sure an exception is thrown
        //              in config.php we setup our PDO options...update to PDO::ERRMODE_EXCEPTION


        // :placeholder
        
    }
}