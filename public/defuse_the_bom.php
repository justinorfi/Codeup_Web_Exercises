<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;
        var interval = 1000;

        var updateTimer = setInterval( function() {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!'); // boom
                document.body.innerHTML = '<img src="https://s-media-cache-ak0.pinimg.com/236x/28/d0/97/28d09745e167e4845484539f7d7555d4.jpg"/>';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }
            detonationTimer--;
        }, interval);

        function defuseTheBOM()
        {
            clearInterval(updateTimer);
            alert('BOM Defused');
            document.body.innerHTML = ''; // Clears Page
        }
        var defuser = document.getElementById('defuser');       // Listener for
        defuser.addEventListener('click', defuseTheBOM, false); // button click
    </script>
</body>
</html>
