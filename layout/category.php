<div class="main-content">
    <h2>danh muc</h2>
    <form action="admin.php?act=addCategory" method="post">
        <input type="text" name="name" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Uu tien</th>
            <th>Hien thi</th>
            <th>Hanh dong</th>
        </tr>
        <?php 
        ?>
        <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach($kq as $category){
                    echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$category['name'].'</td>
                                <td>'.$category['prior'].'</td>
                                <td>'.$category['display'].'</td>
                                <td><a href="admin.php?act=updateCategoryForm&id='.$category['id'].'">Sua</a> |  <a href="admin.php?act=deleteCategory&id='.$category['id'].'">Xoa</a></td>
                         </tr>';
                         $i++;
                }
            }
        ?>
       
    </table>
</div>