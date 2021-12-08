<?php

/**
 *
 * checking user by user name and user password
 *
 * @param $request
 * @return array
 */
function checkUser($request) {

    $sql="select * from `users` ";
    $sql.="where name='$request[user]' and ";
    $sql.="`password`='$request[password]'";
    return pdoSelect($sql);
}

