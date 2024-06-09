<div class="main-content">
    <h2>Update San pham</h2>
    <form action="admin.php?act=product_update" method="post" enctype="multipart/form-data">
        <select name="id_category">
            <option value="0">Chon danh muc</option>
            <?php
                $idCategoryCurrent=$productDetail[0]['id_category'];
                if(isset($listCategory)){
                    foreach($listCategory as $category){
                        if($category['id']==$idCategoryCurrent)
                            echo '<option value="'.$category['id'].'" selected >'.$category['name'].'</option>';
                        else 
                            echo '<option value="'.$category['id'].'" >'.$category['name'].'</option>';
                    }
                }
            ?>  
        </select>
        <input type="text" name="name" value="<?=$productDetail[0]['name']?>">
        <input type="file" name="img" >
        <img src="<?=$productDetail[0]['img']?>" width="80px">
        <input type="text" name="price" value="<?=$productDetail[0]['price']?>">
        <input type="hidden" name="id" value="<?=$productDetail[0]['id']?>">
        <input type="submit" name="update" value="update">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Hinh</th>
            <th>Gia</th>
            <th>Hanh dong</th>
        </tr>
        <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach($kq as $product){
                    echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$product['name'].'</td>
                                <td><img src="'.$product['img'].'"width="80px"></td>
                                <td>'.$product['price'].'</td>
                                <td><a href="admin.php?act=updateProductForm&id='.$product['id'].'">Sua</a> |  <a href="admin.php?act=deleteProduct&id='.$product['id'].'">Xoa</a></td>
                         </tr>';
                         $i++;
                }
            }
        ?>
       
    </table>
</div>