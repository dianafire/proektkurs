<?php
class Products{

    public function index(){

        html_header();
        //echo $_SESSION['userID'];

        $list = DataBase::getDB()->select("SELECT * FROM new_shop.product;");
        ?>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Снимка</th>
                <th>Име</th>
                <th>Цена</th>
                <th>Кошница</th>
            </tr>


            <?php
            foreach($list as $product){
                $host='./images/';
                ?>
                <tr>
                    <td><?=$product['Product_id']?></td>
                    <td><img src="<?php echo $host.$product['Path']; ?>" alt="..." width="100" height="100" class="img-responsive img-thumbnail"></td>
                    <td><?=$product['Name']?></td>
                    <td><?php echo $product['Price'].'лв.';?></td>
                    <td>
                        <button type="button" data-item-id="<?=$product['Product_id']?>" class="add-to-basket btn btn-info btn-sm">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            Добави
                        </button>
                        <button type="button" data-item-id="<?=$product['Product_id']?>" class="remove-from-basket btn btn-danger btn-sm">
                            <i class="glyphicon glyphicon-remove"></i>
                            Изтрий
                        </button>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".add-to-basket").click(function(){
                    var product_id = $(this).attr('data-item-id');
                    $.post('?controller=Basket&action=addInBasket', {
                        Product_id: product_id
                    }, function(){
                        alert("Добавихте продукт ("+product_id+") в кошницата");
                    });
                });
                $(".remove-from-basket").click(function(){
                    var product_id = $(this).attr('data-item-id');
                    $.post('?controller=Basket&action=removeFromBasket', {
                        Product_id: product_id
                    }, function(){
                        alert("Изтрихте продукт ("+product_id+") от кошницата");
                    });
                });
            });
        </script>

        <?php
        if( count($list) == 0){
            echo "<div>Няма продукти!</div>";
        }

        html_footer();
    }
}