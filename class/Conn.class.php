<?php



class Conn {

    //declaração dos atributos

     public static $host = HOST;

     public static $user = USER;

     public static $pass = PASS;

     public static $dbname = DBNAME;



     private static $connect = null;



    //método Conectar

    private static function Conectar(){

        //try e catch - tente e senão der certo faça o cacth

        try {

            //efetuar a conexão com o BD

            if(self::$connect == null):

                //PDO('HOST;dbanme',USER,PASS)

                self::$connect= new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbname, self::$user, self::$pass);



            endif;



        } catch (Exception $e) {

            //Caso a conexão falhe faça isto

            echo "Mensagem ".$e->getMessage();

            die();

        }

        return self::$connect;

    }



    //método que executa o metodo Conectar()

    function getConn(){

        return self::Conectar();

    }

}