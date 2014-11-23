<?php
$user= $_POST['user'];
$pass= $_POST['pass'];
$maantoan= $_POST['maantoan'];
$loi= "";

if($user== ""){
    echo json_encode(array('st' => 1, 'msg' => "Chưa nhập username<br/>"));
}
if($pass== ""){
    echo json_encode(array('st' => 1, 'msg' => "Chưa nhập password<br/>"));
}
if($user && $pass){
    $member= new member;
    $member->set_user($user);
    $member->set_pass(md5(md5($pass)));
    if($member->check_login()== FALSE){
        echo json_encode(array('st' => 1, 'msg' => "Wrong username or password<br/>"));       
    }else{
        echo json_encode(array('st' => 0, 'redirect' => "index.html?user=$user"));         
    }

}
