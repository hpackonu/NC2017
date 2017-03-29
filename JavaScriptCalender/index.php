<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
        <select id="date">
            <option value=1>Monday</option>
            <option value=2>Tuesday</option>
            <option value=3>Wednesday</option>
            <option value=4>Thursday</option>
            <option value=5>Friday</option>
            <option value=6>Saturday</option>
            <option value=0>Sunday</option>
        </select> 
            <br>
        <select id="days">
            <option value=28>28</option>
            <option value=29>29</option>
            <option value=30>30</option>
            <option value=31>31</option>
        </select>
        <!-- Can't get radio buttons to work
        <input type="radio" name="days" value=28> 28<br>
        <input type="radio" name="days" value=29> 29<br>
        <input type="radio" name="days" value=30> 30<br>
        <input type="radio" name="days" value=31> 31<br>
        -->
        <input type="button" value="Make Calendar!" onclick="calender();">
        <div id="cal"></div>
    </form>
        <script>
        function calender(){
            var html="<table><tr>";
            var e = document.getElementById("date");
            var dateresult = e.options[e.selectedIndex].value;
            var x = document.getElementById("days");
            var daysresult = x.options[x.selectedIndex].value;
            /* For the radio buttons which are commented out
            for (var i = 0; i < x.length; i++) {
                if (x[i].checked) {
                    // do whatever you want with the checked radio
                    daysresult=x[i].value;
                    // only one radio can be logically checked, don't check the rest
                    break;
                }
            }
            */
            for(var a=0; a<dateresult; a++){
                html+="<td></td>";
            }
            for (var z = 1; z <= daysresult; z++) {
                
                html += "<td>"+z+"</td>";
                if((z*1+dateresult*1)%7===0)
                    html+="</tr><tr>";
            }
            html+="</tr></table>";
            document.getElementById("cal").innerHTML=html;
        }
        </script>
    </body>
</html>
