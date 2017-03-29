<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function Calendar(){
        echo "<table>";
            for ($z = 1; $z <= 31; $z++) {
                
                echo "<td>".$z."</td>";
                if($z%7==0){
                    echo "</tr><tr>";
                }
            }
            echo "</tr></table>";
    }