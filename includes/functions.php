<?php if(file_exists('./configs/config.php'))  include './configs/config.php';
include './configs/database.php';

    function view($viewName=null,$variables=[])
    {
        foreach ($variables as $var=>$value)   $$var=$value;
        include './views/'.$viewName.'.php';
    }

    function loadController($controllerName,$controllerFunction)
    {
        include './controllers/'.$controllerName.'Controller.php';
        if(function_exists($controllerFunction)) $controllerFunction(); else echo 'function does not exit';
    }

    function baseURL($dir=null,$status=false)
    {
        if(file_exists('./configs/config.php'))
        {
            include './configs/config.php';
            if(!$status) echo $baseURL.$dir; else return $baseURL.$dir;
        }
        else exit('Config does not exist');
    }

    function route($route)
    {
        include './routers.php';
        if(!isset($routes[$route])) exit('route does not exist');
        $route=baseURL($routes[$route],true);
        header("Location: $route");
    }

    function getRequest($index=null)
    {
        if(isset($_GET['c'])) unset($_GET['c']);
        if(isset($_GET['f'])) unset($_GET['f']);

        if(!empty($_POST)) if(!empty($index)) return $_POST[$index]; else return $_POST;
        if(!empty($_GET)) if(!empty($index)) return $_GET[$index]; else return $_GET;
    }

    function pdoOpen()
    {
        try {
            $connection = new PDO("mysql:host=".SERVER_NAME.";dbname=".DB_NAME, DB_USER_NAME, DB_USER_PASSWORD);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $connection;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    /*
     * CRUD Create-Read-Update-Delete
     */
    function pdoSelect($sql)
    {
        $connection=pdoOpen();
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

function pdoInsert($table,$data=[])
{
    //INSERT INTO `doctors` (`id`, `name`) VALUES (NULL, 'zahra');

    $values=$fields=null;
    $sql="INSERT INTO `$table` ";

    foreach ($data as $field => $value)
    {
        $fields.="`$field`," ;
        $values.="'$value',";
    }
    $fields=substr($fields,0,-1);
    $values=substr($values,0,-1);
    $sql= $sql."($fields) VALUES ($values)";
    $connection=pdoOpen();
    $stmt = $connection->prepare($sql);
    $stmt->execute();
}

function pdoUpdate($table,$data=[],$condition=1)
{
  /*  UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;*/
    $fields=null;
    $sql="UPDATE $table SET  ";
    foreach($data as $field => $value)
    {
      $fields.="$field = '$value'," ;
    }
    $fields=substr($fields,0,-1);
    $sql.=$fields. " where $condition";
    $connection=pdoOpen();
    $stmt = $connection->prepare($sql);
    $stmt->execute();
}

//DELETE FROM table_name WHERE condition;
function pdoDelete( $table , $condition=null)
{
    $sql = "delete from $table ";
    $sql.="where $condition ";
    $connection=pdoOpen();
    $stmt = $connection->prepare($sql);
    $stmt->execute();
}

function loadModel($modelName=null)
{
    if(file_exists('./models/'.$modelName.'Model.php')) {
        include './models/'.$modelName.'Model.php';
    }else die('./models/'.$modelName.'Model.php does not exist');
}

function encrypt($string=null)
{
    if(file_exists('./configs/config.php')) include './configs/config.php';
    return sha1(md5($string)).$saltCode;
}

function redirect($path) {
    header('Location:'.baseURL($path,true));
}

function checkLogin($name=null) {
        if(isset($_SESSION[$name])) return true;
        return false;
}

function destroySessionByName($name)
{
    if(isset($_SESSION[$name]))
    {
        unset($_SESSION[$name]);
        return true;
    }else return false;
}

 function validation($request=[],$rules=[],$messages=[]) {
        $errors=[];
        foreach($rules as $element=>$rule) {
            $filters=explode('|',$rule);
            foreach ($filters as $filter) {
                 $status=$filter($request[$element]);
                 if($status) $errors[$element][]=$messages["$element.$filter"];
            }
        }

       return $errors;
}

function required($value) {

        if(empty($value)) return true; else false;
}

function maxPassword($value) {
       if(strlen($value) < 8) return true; else return false;
}

function numeric($value) {
        if(!is_numeric($value)) return true; else return false;
}

function userLength($value) {
    if(strlen($value) < 10) return true; else return false;
}
