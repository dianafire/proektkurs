<?php

    class Basket{

        public function addInBasket(){

            $idAdd=Validate::post('Product_id','number',0);

            if ($idAdd>0){
                $key=array_search($idAdd, $_SESSION['basket']);
                if ($key===false){
                    $_SESSION['basket'][]=$idAdd;
                }
            }


        }

        public function removeFromBasket(){

            $idRem=Validate::post('Product_id','number',0);

            if ($idRem>0){
                $key=array_search($idRem, $_SESSION['basket']);

                if (isset($key)){
                    unset($_SESSION['basket'][$key]);
                }
            }

        }


        public function basketView()
        {

            html_header();


            if (empty($_SESSION['basket'])) {
                echo "Вашата кошница е празна! Моля, изберете продукти!<br />";
            } else {

                ?>
                <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Снимка</th>
                    <th>Име</th>
                </tr>


                <?php

                foreach ($_SESSION['basket'] as $productID) {

                    $list = DataBase::getDB()->select("SELECT *
				                                    FROM new_shop.product
				                                    where Product_id=$productID;");

                    foreach ($list as $product) {
                        $host = './images/';
                        ?>
                        <tr>
                            <td><?= $product['Product_id'] ?></td>
                            <td><img src="<?php echo $host . $product['Path']; ?>" alt="..." width="100" height="100"
                                     class="img-responsive img-thumbnail"></td>
                            <td><?= $product['Name'] ?></td>

                        </tr>

                    <?php
                    }

                }


            }

            ?>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <form action="?controller=Basket&action=basketOrder" method="post">
                        <button type="submit" name="submitOrder" class="btn btn-default">Поръчай</button>
                        <input type="hidden" name="check" value="1">
                    </form>
                </td>
            </tr>


        <?php
            html_footer();
        }

        public function basketOrder(){

            html_header();

            if(isset($_POST['submitOrder']) && isset($_POST['check']) && $_POST['check']=="1") {

                if ($_SESSION['userID'] === null) {

                    ?>
                    <script type="text/javascript">
                            alert("За поръчка влезте в системата или се регистрирайте!");
                    </script>


                <?php
                }
                else {

                    if (empty($_SESSION['basket'])) {
                        echo "Вашата кошница е празна! Моля, изберете продукти!<br />";
                    }
                    else {

                        $session = session_id();
                        $usID = $_SESSION['userID'];

                        $insertOrder = DataBase::getDB()->queryInsert("INSERT INTO new_shop.basket (Order_completed,Basket_session_hash,userID)
                                                                      VALUES (1,'$session',$usID);");

                        if ($insertOrder) {


                            foreach ($_SESSION['basket'] as $productID) {

                                $insertProduct = DataBase::getDB()->queryInsert("INSERT INTO new_shop.basket_products (Basket_id,Product_id)
						                                                        VALUES ( $insertOrder,$productID);");
                            }

                            if ($insertProduct) {
                                echo "<h4>Вашата поръчка с ID $insertOrder е приета! </h4>";
                                return $_SESSION['basket'] = array();
                            }
                            else {
                                echo "<h4>Възникна грешка при поръчката.";
                                echo "Моля, опитайте пак!</h4>";

                            }


                        }
                        else {
                            echo "<h4>Възникна грешка при поръчката.";
                            echo "Моля, опитайте пак!</h4>";
                        }
                    }

                }
            }

            html_footer();

        }



    }



?>