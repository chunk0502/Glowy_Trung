<div class="main-content">
    <h2>San pham</h2>
    <form action="admin.php?act=productAdd" method="post" enctype="multipart/form-data">
        <select name="id_category" id="">
            <option value="0">Chon danh muc</option>
            <?php
                if(isset($listCategory)){
                    foreach($listCategory as $category){
                        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                    }
                }
            ?>
        </select>
        <input type="text" name="name" id="">
        <input type="file" name="img" id="">
        <input type="text" name="price" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
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