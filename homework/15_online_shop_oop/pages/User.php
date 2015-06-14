<?php

    class User{

        public function login(){

            html_header();?>
            <form action="?controller=User&action=login" method="post">
                <div class="form-group">
                    <label for="username">Потребителско име: </label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Потебителско име..." required="">
                </div>
                <div class="form-group">
                    <label for="pass">Парола: </label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Парола..." required="">
                </div>

                <button type="submit" name="login" class="btn btn-default">Вход</button>
                <input type="hidden" name="check" value="1">
            </form>
            <?php
            html_footer();


            if(isset($_POST['login']) && isset($_POST['check']) && $_POST['check']=="1"){

                $user=Validate::post('username','string');
                $pass=Validate::post('pass','string');

                //echo "$user,$pass";

                $login=DataBase::getDB()->queryOne("SELECT userID,usName,`password`
				                                    FROM new_shop.user
                                                    WHERE usName='$user';");

                if ($login){
                    $userID=$login['userID'];
                    $userName=$login['usName'];
                    $passHash=$login['password'];

                    $passVerify=password_verify($pass,$passHash);

                    if ($passVerify===TRUE) {

                        echo "<h4>Здравейте, $userName!</h4>";
                        return $_SESSION['userID']=$userID;

                    }

                    else{
                        echo "<p>Грешно потребителско име или парола!";
                        echo "Моля, опитайте пак!</p>";
                        return $_SESSION['userID']=null;
                    }

                }
                else{
                    echo "<p>Грешно потребителско име или парола!";
                    echo "Моля, опитайте пак!</p>";
                    return $_SESSION['userID']=null;
                }
            }

        }

        public function register(){

            html_header();?>

            <form action="?controller=User&action=register" method="post">
                <div class="form-group">
                    <label for="username">Потребителско име: </label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Потебителско име..." required="">
                </div>
                <div class="form-group">
                    <label for="pass">Парола: </label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Парола..." required="">
                </div>
                <div class="form-group">
                    <label for="repass">Повторение на парола: </label>
                    <input type="password" name="repass" class="form-control" id="repass" placeholder="Повторение..." required="">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email..." required="">
                </div>

                <button type="submit" name="register" class="btn btn-default">Регистрация</button>
                <input type="hidden" name="check" value="1">
            </form>
            <?php

            html_footer();

            if(isset($_POST['register']) && isset($_POST['check']) && $_POST['check']=="1"){

                $user=Validate::post('username','string');
                $pass=Validate::post('pass','string');
                $repass=Validate::post('repass','string');
                $email=Validate::post('email','string');

                $returnList=DataBase::getDB()->select("SELECT usName
				                                      FROM new_shop.user
				                                      WHERE usName='$user';");

                if (empty($returnList)){

                    if ($pass===$repass){

                        $passHash=password_hash($pass, PASSWORD_DEFAULT);

                        $register=DataBase::getDB()->queryInsert("INSERT INTO `new_shop`.`user` (`usName`, `password`, `email`)
					                                              VALUES ('$user', '$passHash', '$email');");
                        if ($register){
                            echo "<h4>Успешна регистрация! ";
                            echo "Здравейте, $user!</h4>";
                            return $_SESSION['userID']=$register;

                        }
                        else{
                            echo "<p>Възникна грешка!";
                            echo "Моля, опитайте пак!</p>";
                            return $_SESSION['userID']=null;
                        }


                    }
                    else{
                        echo "<p>Паролата и повторението не съвпадат!";
                        echo "Моля, опитайте пак!</p>";
                        return $_SESSION['userID']=null;
                    }

                }

                else{

                    echo "<p>Потребителското име вече съществува!";
                    echo "Моля, въведете друго!</p>";
                    return $_SESSION['userID']=null;
                }




            }




        }




    }



?>