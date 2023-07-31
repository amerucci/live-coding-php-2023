<?php

/**
 * fraisDePort
 *
 * @param  mixed $poindDuColis
 * @return void
 */
function fraisDePort($poindDuColis){
    if($poindDuColis>10){
        return 100;
    }
    else{
        return 5;
    }
}
