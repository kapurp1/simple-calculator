<html>
<head>
    <script>
        //function that display value
        function dis(val)
        {
            document.getElementById("result").value+=val
        }

        //function that evaluates the digit and return result
        function solve()
        {
            let x = document.getElementById("result").value
            let y = eval(x)
            document.getElementById("result").value = y
            console.log(x);


            var xhttp = new XMLHttpRequest();
            /*xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                }
            };*/
            xhttp.open("POST", "save.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("expression='"+encodeURIComponent(x)+"'&value="+y);
        }

        //function that clear the display
        function clr()
        {
            document.getElementById("result").value = ""
        }
    </script>
    <!-- for styling -->
    <style>
        .title{
            margin-bottom: 10px;
            text-align:center;
            width: 210px;
            color:green;
            border: solid black 2px;
        }

        input[type="button"]
        {
            background-color:yellow;
            color: black;
            border: solid black 2px;
            width:100%
        }

        input[type="text"]
        {
            background-color:white;
            border: solid black 2px;
            width:100%
        }
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<!-- create table -->
<body>
<div class="content">
    <!-- Page content -->
    <div class = title >Calculator</div>
    <table border="1">
        <tr>
            <td colspan="3"><input type="text" id="result"/></td>
            <!-- clr() function will call clr to clear all value -->
            <td><input type="button" value="c" onclick="clr()"/> </td>
        </tr>
        <tr>
            <!-- create button and assign value to each button -->
            <!-- dis("1") will call function dis to display value -->
            <td><input type="button" value="1" onclick="dis('1')"/> </td>
            <td><input type="button" value="2" onclick="dis('2')"/> </td>
            <td><input type="button" value="3" onclick="dis('3')"/> </td>
            <td><input type="button" value="/" onclick="dis('/')"/> </td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="dis('4')"/> </td>
            <td><input type="button" value="5" onclick="dis('5')"/> </td>
            <td><input type="button" value="6" onclick="dis('6')"/> </td>
            <td><input type="button" value="-" onclick="dis('-')"/> </td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="dis('7')"/> </td>
            <td><input type="button" value="8" onclick="dis('8')"/> </td>
            <td><input type="button" value="9" onclick="dis('9')"/> </td>
            <td><input type="button" value="+" onclick="dis('+')"/> </td>
        </tr>
        <tr>
            <td><input type="button" value="." onclick="dis('.')"/> </td>
            <td><input type="button" value="0" onclick="dis('0')"/> </td>
            <!-- solve function call function solve to evaluate value -->
            <td><input type="button" value="=" onclick="solve()"/> </td>
            <td><input type="button" value="*" onclick="dis('+')"/> </td>
        </tr>
    </table>
</div>


</body>
</html>
