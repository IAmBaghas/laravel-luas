<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Game</title>
    <style>
        #game-container {
            position: relative;
            height: 92vh;
            overflow: hidden;
        }
        #rectangle {
            width: 50px;
            height: 30px;
            background-color: blue;
            position: absolute;
            bottom: 5vh;
            left: 50%;
            transform: translate(-50%, 0);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="game-container">
        <div id="rectangle"></div>
    </div>

    <script>
        var rectangle = document.getElementById('rectangle');

        document.addEventListener('keydown', function (event) {
            var currentPositionX = parseFloat(getComputedStyle(rectangle).left);
            var currentPositionY = parseFloat(getComputedStyle(rectangle).bottom);

            switch (event.code) {
                case 'ArrowLeft':
                    moveRectangle('left');
                    break;
                case 'ArrowRight':
                    moveRectangle('right');
                    break;
                case 'ArrowUp':
                    moveRectangle('up');
                    break;
                case 'ArrowDown':
                    moveRectangle('down');
                    break;
            }
        });

        function moveRectangle(direction) {
            var currentPositionX = parseFloat(getComputedStyle(rectangle).left);
            var currentPositionY = parseFloat(getComputedStyle(rectangle).bottom);
            var newPositionX = currentPositionX;
            var newPositionY = currentPositionY;

            switch (direction) {
                case 'left':
                    newPositionX -= 10;
                    break;
                case 'right':
                    newPositionX += 10;
                    break;
                case 'up':
                    newPositionY += 10;
                    break;
                case 'down':
                    newPositionY -= 10;
                    break;
            }

            rectangle.style.left = newPositionX + 'px';
            rectangle.style.bottom = newPositionY + 'px';
        }
    </script>
</body>
</html>
