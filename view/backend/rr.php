<div class="all ct">
    <h3>預告片清單</h3>
    <form action="./api/poster_edit.php" method="post">
    <table>
        <tr>
        <th>預告片海報</th>
        <th>預告片片名</th>
        <th>預告片排序</th>
        <th>預告片特效</th>
        <th>操作</th>
        </tr>
        <?php
        $rows=$Poster->all(" order by `rank` desc");
        foreach($rows as $idx=>$row){
            $prev=(isset($rows[$idx-1]['id']))?($rows[$idx-1]['id']):($rows[$idx]['id']);
            $next=(isset($rows[$idx+1]['id']))?($rows[$idx+1]['id']):($rows[$idx]['id']);
        ?>
        <tr>
            <td><img src="./upload/<?=$row['img'];?>" alt="" width="100px"></td>
        
            <td ><input type="text" name="name[<?=$row['id'];?>]" style="color:white"value="<?=$row['name'];?>"></td>
            <td>
                <input type="button" value="往上" data-id="<?=$row['id'].'-'.$prev;?>" >
                <input type="button" value="往下" data-id="<?=$row['id'].'-'.$next;?>" >
            </td>
        
            <td>
                <select name="sp[<?=$row['id'];?>]" id="sp">
                    <option value="1" <?=($row['sp']==1)?'selected':'';?>>淡入淡出</option>
                    <option value="2" <?=($row['sp']==2)?'selected':'';?>>放大縮小</option>
                    <option value="3" <?=($row['sp']==3)?'selected':'';?>>滑入滑出</option>
                </select>
            </td>
       
            <td><input type="checkbox" name="sh[<?=$row['id'];?>]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>顯示</td>
            <td><input type="checkbox" name="del[<?=$row['id'];?>]" value="<?=$row['id'];?>">刪除</td>
        </tr>
        <?php
        }
    ?>
        <tr>
            <td><input type="submit" value="編輯"><input type="reset" value="清除"></td>
        </tr>
    </table>
    </form>
</div>
<script>
    $("input[type=button]").click(function(){
        let id=$(this).data('id');
        console.log(id);
        $.post("./api/rank.php",{id},()=>{
             location.reload();
        })
    })
</script>
<div class="all ct">
    <form action="./api/poster_add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>預告片海報:</td>
                <td><input type="file" name="img" id=""></td>
                <td>預告片片名:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><span style="color:red;">檔案請使用英文檔名</span></td>
            </tr>
            <tr>

                <td><input type="submit" value="新增">
                    <input type="reset" value="重置">
                    </td>
                
            </tr>
        </table>
    </form>
</div>