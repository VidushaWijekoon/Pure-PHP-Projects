<?php

function x(){
    sleep(3);
    return 1;
}

$paymentStatus = 'declined';

switch($paymentStatus){
    case 'paid': echo 'paid'; break;

    case 'declined': 
    case 'rejected': 
        echo 'declined'; 
        break;
        
    case 'pending': echo 'pending'; break;

    default: echo 'unknown payment method';
}

if(x() === 1){
    echo 1;
}elseif(x() === 2){
    echo 2;
}elseif(x() === 3){
    echo 3;
}else{
    echo 4;
}

switch(x()){
    case 1: echo '1'; break;
    case 2: echo '2'; break;
    case 3: echo '3'; break;
    default: echo 'unknown payment method';
}