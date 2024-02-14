<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Jump</title>
    <style>
        #rectangle {
            width: 50px;
            height: 30px;
            background-color: blue;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: transform 2s ease-in-out;
        }
    </style>
</head>
<body>
    <div id="rectangle"></div>

    <script>
        var rectangle = document.getElementById('rectangle');

        document.addEventListener('keydown', function (event) {
            switch (event.code) {
                case 'Space':
                    jumpRectangle();
                    break;
                case 'ArrowLeft':
                    moveRectangle('left');
                    break;
                case 'ArrowRight':
                    moveRectangle('right');
                    break;
            }
        });

        function jumpRectangle() {
            rectangle.style.transform = 'translateX(-50%) translateY(-100px)';

            setTimeout(function () {
                rectangle.style.transform = 'translateX(-50%) translateY(0)';
            }, 2000);
        }

        function moveRectangle(direction) {
            var currentPosition = parseFloat(getComputedStyle(rectangle).left);
            var newPosition;

            if (direction === 'left') {
                newPosition = currentPosition - 10;
            } else if (direction === 'right') {
                newPosition = currentPosition + 10;
            }

            rectangle.style.left = newPosition + 'px';
        }
    </script>
</body>
</html>
