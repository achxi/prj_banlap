<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';

    echo "<div id='product'>";
    echo "<div>Your search with the keyword: \"$keyword\"</div>";
    if($data== 0){
        echo "Your search returns no result";
    }else{
        foreach($data as $item){
            $gia= mysql_real_escape_string($item['gia']);
            $giatien= number_format($gia,0,'','.');
            $giatien= $giatien." VNĐ";
            $id= $item['id'];
            echo "<div class='sp'><a href='".$base_url."product/pro_details/$id.html'>"
                 . "<div class='hinh'><img src='".$base_url."library/img/sanpham/small/$item[hinh]'/></div>"
                 . "<div class='ten'>$item[tensp]</div>"
                 . "<div class='gia'>$giatien</div>"
                 . "</a></div>";
             }
         }
     echo "</div>";
    
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>

