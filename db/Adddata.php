<?php

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

    public function insertar($datos){
        $sql = 'INSERT INTO form (name,email,phone,typedoc,numdoc,program)
        values (:name,:email,:phone,:typedoc,:numdoc,:program)';

        $query = $this->connect();
        $query->beginTransaction();

        try{
            $result = $query->prepare($sql);
            $result->execute(['name'=>$datos['name'],
                              'email'=>$datos['email'],
                              'phone'=>$datos['phone'],
                              'typedoc'=>$datos['typedoc'],
                              'numdoc'=>$datos['numdoc'],
                              'program'=>$datos['program']]);

            $query->commit();

            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
    
    function getForm()
    {
        if (isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['typedoc'],$_POST['numdoc'],$_POST['program'])) {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $typedoc=$_POST['typedoc'];
            $numdoc=$_POST['numdoc'];
            $program=$_POST['program'];

            $datos = array('name'=>$name,'email'=>$email,'phone'=>$phone,'typedoc'=>$typedoc,'numdoc'=>$numdoc,'program'=>$program);

            if ($this->mempty($datos)) {
                $this->insertar($datos);
            
            }else {
                echo '<div class="alert alert-danger" role="alert">Ocurrió un error, por favor intenta otra vez</div>';
            }
            
        }
    }

}

$test = new Adddata;
$test->getForm();