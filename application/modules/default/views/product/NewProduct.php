
    
            <ul style="clear:both;float:left">
                <?php
                    if(isset($products) && $products != null ) {
                        foreach($products as $list){
                            $id = $list['pro_id'];
                            $name = $list['pro_name'];
                            $description = $list['pro_desc'];
                            $price = $list['pro_price'];

                ?>

                <li style="margin-left:10px;">
                    <a href="/phpmock/default/product/detailproduct/<?php echo $list['pro_id']; ?>">
                    <h3><?php echo $list['pro_name']; ?></h3>
                    <img src="/phpmock/uploads/product/<?php echo $list['pro_images']; ?>" class="product" height="100" />
                    </a>

                    <p class = 'price' >
                    Giá tiền: <span style="font-weight:bold;color:blue" ><?php echo $list['pro_price']; ?></span>  VNĐ
                    </p>

                    <p><?php echo $list['pro_desc']; ?></p>

                    <p class="cart">
                    <?php
                        echo form_open('default/cart/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        echo form_submit('action', 'Add to Cart');
                        echo form_close();
                    ?>
                    
                    </p>

                </li>
                                
                <?php }} ?>
            </ul>

   
    