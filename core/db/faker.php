<?php
function url(){
    $websiteList = ['google.com', 'facebook.com'];
    return sprintf("%s://%s", "https", $websiteList[rand(0, sizeof($websiteList) - 1)]);
}

function name(){
    $nameList = [
        'ao ba lo',
        'ao ko lo',
        'quan lung lo',
        'quan ko day',
        'quan ko day',
        'quan ko day',
        'quan ko day',
        'quan ko day',
        'quan ko day',
    ];
    return $nameList[rand(0, sizeof($nameList) - 1)];
}
function role(){
    $role =[
        'admin',
        'users',
    ];
    return $role[rand(0, sizeof($role) -1)];
}
function password(){
    $length = 6;
    $number = '123456789';
    $password = '';
    for ($i=0; $i <$length ; $i++) { 
        $random = rand(0,strlen($number)-1);
        $password .= $number[$random];
    }
    return $password;
}
function email(){
    $email = ['quang@gmail.com', 'gao@gmail.com'];
    return $email[rand(0, sizeof($email) - 1)];
}
?>
