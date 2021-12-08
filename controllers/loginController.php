<?php session_start();
class loginController
{
    function form()
    {
        $request=getRequest();
        if(!empty($request))
        {
            $errors=validation($request,
                [
                    'user'=>'required|numeric|userLength',
                    'password'=>'required|maxPassword'
                ],
                [
                    'user.required'=>'نام کاربری را وارد کنید.',
                    'user.numeric'=>'نام کاربری باید عددی باشد.',
                    'user.userLength'=>'طول نام کاربری مجاز نمی باشد.',
                    'password.maxPassword'=>'کلمه عبور باید از ۸ کارکتر بیشتر باشد.',
                    'password.required'=>'کلمه عبور را وارد کنید.'
                ]
            );

            $request['password']=encrypt($request['password']);
            loadModel('user');
            $result=current(checkUser($request));

            if(!empty($result))
            {
                $_SESSION['user-id']=$result['id'];
                redirect('admin');
            }else  redirect('login');

        }else {
            $loginStatus=checkLogin('user-id');
            if(!$loginStatus) view('panel/login');
            else redirect('admin');
        }
    }

    function logout()
    {
        echo $_SESSION['user-id'];
        session_destroy();
        $status=destroySessionByName('user-id');
        if($status) view('panel/login');
    }

}
