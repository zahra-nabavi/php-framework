<?php session_start();

//namespace \App\Controllers;

class adminController
{
    function admin()
    {

       /* $loginStatus=checkLogin('user-id');
        if(!$loginStatus) redirect('index.php/login');*/

        $footerSettings=current(pdoSelect("select * from settings where `name`='footer-buttons'"));

     view('panel/admin',['footerSettings'=>$footerSettings]);
    }

    function login($user=null,$id=null)
    {
        header('Content-Type: application/json');
        $user=['user'=>$user,'id'=>$id];
        echo json_encode($user);
    }
    function test(){
        $loginStatus=checkLogin('user-id');
        if(!$loginStatus){
            view('panel/login'); exit();
        }
    }
}
