<?php
    require_once('Validation.php');

    $email = 'noesuncorreu';
    $username = 'admin';
    $password = 'test';
    $edat = 16;
    $opcio="";
    $data="  16/02/2019";
    
    
    $val = new Validation();
    $val->name('email')->value($email)->isEmail()->required();    
       
    $val->name('edat')->value($edat)->isInt()->min(18)->max(40);
    $val->name('username')->value($username)->isAlphanum()->required();
    $options = array("ESO","BAT","CFGM");
    $val->name('Estudis')->value($opcio)->isOption($options)->required();
    $val->name('data naixement')->value($data)->isDate()->required();
    
    echo $val->getErrorsHTML();
    
    print_r($val->getValues());
    
    

?>