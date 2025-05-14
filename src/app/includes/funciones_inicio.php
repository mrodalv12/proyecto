<?php
//------------------------------------------------------------------------
//buenos dias/tardes/noches
function buenas(){
    if ((integer)date("H")<12){
        return "Buenos dias";
    }
    if ((integer)date("H")<18){
        return "Buenas tardes";
    }
    return "Buenas noches";
}
//------------------------------------------------------------------------
?>