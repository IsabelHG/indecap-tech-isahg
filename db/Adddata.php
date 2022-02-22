<?php

require_once("Connection.php");
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
        $sql = 'INSERT INTO form (name,email,phone,typedoc,program)
        values (?,?,?,?,?)';

        $query = $this->connect();
        $query->begin_Transaction();

        try{
            
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $typedoc=$_POST['typedoc'];
            $program=$_POST['program'];

            $result = $query->prepare($sql);
            $result -> bind_param('ssiss', $name,$email,$phone,$typedoc,$program);
            $result->execute();

            $query->commit();

            return "Datos agregados";
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
    
    function getForm(){
       
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $typedoc=$_POST['typedoc'];
            $program=$_POST['program'];

            $datos = array('name'=>$name,'email'=>$email,'phone'=>$phone,'typedoc'=>$typedoc,'program'=>$program);

           return $datos;
}
}

$test = new Adddata();
echo $test->insertar();