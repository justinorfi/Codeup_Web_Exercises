<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
    <style>
#defuser {
    background-color: red;
    color: green;
    text-align: center;
    height: 3em;
    width: auto;
    position: relative;
    bottom:0em;
    left: 0em;
    cursor: pointer;
}
#greenwire {
    background-color: green;
    color: red;
    text-align: center;
    height: 3em;
    width: auto;
    position: relative;
    bottom:0em;
    left:0em;
    cursor: pointer;
}
    </style>
</head>
<body>
    <h2 id="message">This BOM will self destruct in<span id="timer">5</span></h2>

    <span id="defuser"><strong>Cut the Red Wire</strong></span>
    <span id="greenwire"><strong>Cut the Green Wire</strong></span>

    <script>
        var detonationTimer = 5;
        var interval = 1000;
        var clicks = 0;
        var redplace = document.getElementById('defuser');
        var greenplace = document.getElementById('greenwire');
        var updateTimer = setInterval( function() {
            if (detonationTimer == 0) {
             exterminate();
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }
            detonationTimer--;
        }, interval);

        function defuseTheBOM() {
            if (clicks < 5) {
                redplace.style['bottom']   = (Math.floor(Math.random() * (4 - 40)) + 40) + 'em';
                redplace.style['left']     = (Math.floor(Math.random() * (4 - 40)) + 40) + 'em';
                greenplace.style['bottom'] = (Math.floor(Math.random() * (4 - 40)) + 40) + 'em';
                greenplace.style['left']   = (Math.floor(Math.random() * (4 - 40)) + 40) + 'em';
            }
            else if (clicks == 5) {
                success();
            }
            clicks++
        }
        function success() {
            clearInterval(updateTimer);
            document.body.innerHTML = 'BOM Defused'; // Clears Page
        }
        function defuseFakeBOM() {
            exterminate();
        }
        function exterminate() {
           alert('EXTERMINATE!'); // boom
            document.body.innerHTML = '<img src="https://s-media-cache-ak0.pinimg.com/236x/28/d0/97/28d09745e167e4845484539f7d7555d4.jpg"/>';
        }
        document.getElementById('timer').style['font-size'] = '10em'
        var defuser = document.getElementById('defuser');       // Listener for
        defuser.addEventListener('click', defuseTheBOM, false); // button click
        var defuseFake = document.getElementById('greenwire');
        defuseFake.addEventListener('click', defuseFakeBOM, false);
    </script>
</body>
</html>
