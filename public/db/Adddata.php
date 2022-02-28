<?php

require_once("Connection.php");
require_once("../Available.php");
class Adddata extends Connection{
    
    function mempty($array)
    {
        foreach($array as $value)
            if(!empty($value))
                continue;
            else
                return false;
        return true;
    }

    public function insertar(){
        $sql = 'INSERT INTO form (name,lastname,email,phone,typedoc,numdoc,program)
        values (?,?,?,?,?,?,?)';

        $query = $this->connect();
        $query->begin_Transaction();

        try{
            
            $name=$_POST['name'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $typedoc=$_POST['typedoc'];
            $numdoc=$_POST['numdoc'];
            $program=$_POST['program'];

            $result = $query->prepare($sql);
            $result -> bind_param('sssisis', $name,$lastname,$email,$phone,$typedoc,$numdoc,$program);
            $result->execute();

            $query->commit();

            return "";
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
    
}

$test = new Adddata();
echo $test->insertar();