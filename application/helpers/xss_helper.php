<?php
    function output($str){
        echo htmlentities($str, ENT_QUOTES, 'UTF-8');
    }
?>