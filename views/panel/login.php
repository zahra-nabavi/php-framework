<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/vendors/bootstrap/dist/css/bootstrap.min.css')?> " rel="stylesheet">
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css')?> " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/vendors/font-awesome/css/font-awesome.min.css')?> " rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/vendors/nprogress/nprogress.css')?> " rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/vendors/animate.css/animate.min.css')?> " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl/build/css/custom.css')?> " rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="reset"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php baseURL('/login')?>">
              <h1>فرم ورود</h1>
              <div>
                <input name="user" type="text" class="form-control" placeholder="نام کاربری" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="رمز ورود" required="" />
              </div>
              <div>

                  <input type="submit" class="btn btn-default submit" value="ورود" />
                <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">جدید در سایت؟
                  <a href="#signup" class="to_register"> ایجاد حساب </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        
      </div>
    </div>
  </body>
</html>
