<?php

    
    class DataBase {

        
        protected $db;
        protected $connection;


        public function __construct(){

            $servername='localhost';
            $userName='dragan';
            $password='SomeHardPassword123';
            $dbname='new_shop';


            $this->connection=mysqli_connect($servername,$userName,$password,$dbname);

            if (!$this->connection){
                die ("Connect error (".mysqli_connect_errno().")".mysqli_connect_error());
            }


            mysqli_set_charset($this->connection,'utf8');

            //echo "CONNECTED";
            //return $this->connection=$connection;


        }


        public static function getDB(){

            static $db=null;

            if ($db===null){

                $db=new DataBase();
                

            }

            return $db;


        }


        public function select($query){

            $returnList=array();


            $result=mysqli_query($this->connection,$query);

            if (mysqli_affected_rows($this->connection)>0){

                while ($row=mysqli_fetch_assoc($result)){

                    $returnList[]=$row;


                }
                return $returnList;
            }

            else{
                return $returnList;
            }



        }



        public function queryOne($query){


            $result=mysqli_query($this->connection,$query);

            if (mysqli_affected_rows($this->connection)===1){

                $row=mysqli_fetch_assoc($result);

                return $row;
            }

            else{
                return false;
            }


        }


        public function queryInsert($query){

            $result=mysqli_query($this->connection,$query);

            if ($result===TRUE){

                $insID=mysqli_insert_id($this->connection);

                return $insID;

            }

            else {
                return false;
            }

        }



    }

      /*  public function queryRegister(){

            $user=$this->postName();
            $pass=$this->postPassword();
            $repass=$this->postRePassword();
            $email=$this->postEmail();

            //echo "$user,$pass,$email <br />";

            $sql1="SELECT usName
				FROM new_shop.user;";

            $this->sql1=$sql1;

            //$connect=DataBase::getDB();

            $result1=mysqli_query($this->connection,$sql1);
            //$result1=mysqli_query($connect,$sql1);

            if (mysqli_affected_rows($this->connection)>0) {
            //if (mysqli_affected_rows(DataBase::getDB())>0) {

                while ($row = mysqli_fetch_assoc($result1)) {
                    $usName = $row['usName'];

                    if ($usName === $user) {
                        echo "Потребителското име вече съществува!<br />";
                        echo "Моля, въведете друго!<br />";
                        $f = 0;
                        die();

                    }

                    else {
                        $f = 1;
                    }

                }
            }

            if ($f===1){

                if ($pass===$repass) {

                    $passHash=password_hash($pass,PASSWORD_DEFAULT);

                    $sql = "INSERT INTO `new_shop`.`user` (`usName`, `password`, `email`)
                              VALUES ('$user', '$passHash', '$email');";

                    $this->sql = $sql;


                    // $connection=self::getDB();
                    $result = mysqli_query($this->connection, $sql);


                    if ($result === TRUE) {
                        return $user=$this->user;
                        //echo "Успешна регистрация";
                        //$insIDUser = mysqli_insert_id($connection);
                        // echo "<form action='submitOrder.php' method='post'> <input type='submit' value='Поръчай продуктите' name='order' />
                        //<input type='hidden' name='idUser' value='$insIDUser' /> </form> ";

                    }

                    else {
                        // echo "Възникна грешка! " ."<br>"; //$connection->error;
                        echo "Моля, опитайте пак!"; die();
                    }
                }

                else{
                    echo "Паролата и повторението не съвпадат.<br />";
                    echo "Моля, опитайте пак!<br />";die();
                    //die ();
                }

            }




        }


        */





    

?>