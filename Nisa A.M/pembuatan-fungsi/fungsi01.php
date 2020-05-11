<?php
function genap(){
    for($i=1;$i<=200;$i++){
        if($i%2 == 0){
            echo "$i ";
        }
    }
}
genap();