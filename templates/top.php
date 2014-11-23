<?php
ob_start();
session_start();
$base_url= "http://localhost/projects/prj_banlap/";
//    require 'models/csdl.php';
//    require 'models/product.php';
//    require 'models/member.php';
    $product= new product;

//    $data1= $_SESSION['cart'];'
    
    if(isset($_GET['pid'])){
        $id= $_GET['pid'];
    }else{
        $id=0;
    }

    if(!isset($_SESSION['name'])){
        if(isset($_GET['user'])){
            $_SESSION['name']= $_GET['user'];
            redirect($base_url.'index.html');
        }
    }    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="<?php echo $base_url;?>templates/style/style.css" rel="stylesheet" type="text/css">
        <script src="<?php echo $base_url;?>templates/js/jquery-1.11.1.js"></script>
        <script src="<?php echo $base_url;?>templates/js/kiemtra_dangnhap.js"></script>
        <script src="<?php echo $base_url;?>templates/js/kiemtra_dangky.js"></script>
        <script src="<?php echo $base_url;?>templates/js/capnhat_giohang.js"></script>
        <script src="<?php echo $base_url;?>templates/js/hieuung.js"></script>
        <!--       <script>
            $(document).ready(function(){
                $('div#banner img:gt(0)').hide();
                setInterval(function(){
                    $('div#banner :first-child').fadeOut()
                    .next('img').fadeIn()
                    .end().appendTo('div#banner');},
                    5000);
            });
        </script>-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="top">
            <div id="thethanhvien"><label>Thẻ thành viên</label><input type="text" size="14"/></div>
            <div id="lienket">
                <div id="top_link"><a href="<?php echo $base_url;?>user/hotro.html">Hỗ trợ</a><a href="<?php echo $base_url;?>user/tuyendung.html">Tuyển dụng</a><a href="<?php echo $base_url;?>user/lienhe.html">Liên hệ</a></div>
                <div id="top_hinh">    
                    <div id="gach">&nbsp;</div>
                    <img src="<?php echo $base_url;?>library/img/youtube.png" alt="youtube"/>
                    <img src="<?php echo $base_url;?>library/img/facebook.png" alt="fb"/>
                    <img src="<?php echo $base_url;?>library/img/twitter.png" alt="twitter"/>
                    <img src="<?php echo $base_url;?>library/img/google-plus.png" alt="google"/>
                    <img src="<?php echo $base_url;?>library/img/zing.png" width="19" height="16" alt="zing"/>
                </div>
            </div>
        </div>
        <div id="top_info">
            <div id="logo"><img src="<?php echo $base_url;?>library/img/logo.jpg" alt="logo"/></div>
            <div id="welcome">
                <?php
                    if(isset($_SESSION['name'])){
                        echo "Welcome $_SESSION[name] <a href='".$base_url."user/logout.html'>(Logout)</a>";
                    }else{
                        echo "&nbsp;";
                    }
                ?>
            </div>
            <div id="another">
                <div id="sdt_search">
                    <div id="sdt"><img src="<?php echo $base_url;?>library/img/phone.svg" alt="hotline"/>&nbsp;+&nbsp; 0122&nbsp; 6300&nbsp; 265</div>
                    <div id="search">
                        <form action="<?php echo $base_url;?>product/search.html" method="post">
                            <input type="text" size="30" name="keyword" placeholder="Enter product name here"/>
                            <input type="submit" id="btn_search" value="SEARCH" />
                        </form>
                    </div>
                </div>
                <div id="tk_giohang">
                    <div id="taikhoan">
                        <div class="tk">
                            <div class="main"><img src="<?php echo $base_url;?>library/img/up.png" alt="tk" width="25" height="25"/>Tài khoản<img src="<?php echo $base_url;?>library/img/up.png" alt="tk" width="25" height="25"/></div>
                            <div id="showtk">
                                <div class="tk_del"><a href="#">Đơn hàng</a></div>
                                <div class="tk_del"><a href="#">So sánh</a></div>
                                <div class="tk_del"><a href="#">Yêu thích</a></div>
                                <div id="theodoidonhang">
                                    <p>Theo dõi đơn hàng</p>
                                    <input type="text" size="25"/>
                                </div>
                                <div id="dangnhap_dangky">
                                    <div id="form_dangnhap">
                                        <div id="tit_dn">ĐĂNG NHẬP</div>
                                        <div id="frm_dn">
                                            <div class="tieude_dn">Username<span class="hoathi">*</span></div><br/>
                                            <input type="text" size="35" id="txtuserdn"/><br/>
                                            <div class="tieude_dn">Password<span class="hoathi">*</span></div><br/> 
                                            <input type="password" size="35" id="txtpassdn"/><br/>
                                            <div class="tieude_dn">Mã an toàn<span class="hoathi">*</span></div><br/>
                                            <input type="text" size="15" id="txtmaantoandn"/><br/>
                                            Nhập mã an toàng giống hình bên
                                        </div>
                                        <div id="btm_dn">
                                            <div id="btm_dn1"><input type="checkbox" />
                                            Ghi nhớ tài khoản</div>
                                            <div id="btm_dn2"><button id="okdn">ĐĂNG NHẬP</button></div>
                                        </div>
                                    </div>
                                    <div id="loidn"></div>  
                                    <?php
                                        if(isset($_SESSION['name'])){
                                            echo "&nbsp";
                                        }else{
                                            echo "<a href='#' id='dangnhap' class='main'>Đăng nhập</a>";
                                            echo "<a href='".$base_url."user/dangky.html'>Đăng ký</a>";
                                        }
                                    ?>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="giohang">
                        <a href="<?php echo $base_url;?>product/cart.html"><div id="tk_giohang1"><img src="<?php echo $base_url;?>library/img/up.png" alt="tk" width="25" height="25"/>Giỏ hàng<img src="<?php echo $base_url;?>library/img/up.png" alt="tk" width="25" height="25"/></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="top_menu">
            <ul>
                <li><a href="index.html"><img src="<?php echo $base_url;?>library/img/home_on.png" alt="home"/></a></li>
                <li><a href="#">LAPTOP</a>
                    <ul>
                        <?php
                        $sp= $product->listsp(1);
                        foreach ($sp as $item){
                            echo "<li><a href='".$base_url."product/listtheotenloai/$id/$item[id_loai].html'>$item[tenloaisp]</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">PHỤ KIỆN</a>
                     <ul>
                         <?php
                         $pk= $product->listsp(2);
                         foreach($pk as $item){
                             echo "<li><a href='".$base_url."product/listtheotenloai/$id/$item[id_loai].html'>$item[tenloaisp]</a></li>";
                         }
                         ?>
                    </ul>
                </li>
                <li><a href="#">KHUYẾN MÃI</a>
                    <ul>
                        <li><a href="#">Some</a></li>
                        <li><a href="#">Useful</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Sale off</a></li>
                    </ul>
                </li>
                <li><a href="#">TIN TỨC</a>
                    <ul>
                        <li><a href="#">Some</a></li>
                        <li><a href="#">Useful</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </li>
            </ul>
        </div>