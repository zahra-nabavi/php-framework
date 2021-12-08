<?php
class homeController
{
    function mainPage()
    {

         view('front/index');
    }

    function contact_us()
    {
        view('front/contact_us');
    }

    function about_us()
    {
        echo 'about us';
    }

    function profile2()
    {
        echo 'profile';
    }
}
