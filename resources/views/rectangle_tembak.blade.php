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
            bottom: 5vh; /* Adjusted position */
            left: 50%;
            transform: translateX(-50%);
            transition: transform 0.3s ease-in-out;
            border-radius: 5px;
        }
        .bullet {
            width: 5px;
            height: 5px;
            background-color: red;
            position: absolute;
        }
    </style>
</head>
<body>
    <div id="game-container">
        <div id="rectangle"></div>
    </div>

    <script>
        var rectangle = document.getElementById('rectangle');
        var gameContainer = document.getElementById('game-container');
        var facingRight = true;
        var bullets = []; // Array to store bullet objects
        // var isJumping = false; // Flag to track if the rectangle is jumping

        document.addEventListener('keydown', function (event) {
            switch (event.code) {
                // case 'Space':
                //     if (!isJumping) jumpRectangle(); // Check if not already jumping
                //     break;
                case 'ArrowLeft':
                    moveRectangle('left');
                    break;
                case 'ArrowRight':
                    moveRectangle('right');
                    break;
                case 'KeyA':
                    shootBullet('left');
                    break;
                case 'KeyD':
                    shootBullet('right');
                    break;
            }
        });

        // function jumpRectangle() {
        //     isJumping = true; // Set jumping flag
        //     rectangle.style.transform = 'translateX(-50%) translateY(calc(-100px - 5vh))'; /* Adjusted position */

        //     setTimeout(function () {
        //         rectangle.style.transform = 'translateX(-50%) translateY(calc(0 - 5vh))'; /* Adjusted position */
        //         setTimeout(function () {
        //             rectangle.style.transition = 'none'; // Reset transition
        //             rectangle.style.transform = 'translateX(-50%) translateY(calc(0 - 5vh))'; // Return to original position
        //             isJumping = false; // Reset jumping flag after jump animation and position reset
        //         }, 300); // Adjusted time for transition reset
        //     }, 2000);
        // }

        function moveRectangle(direction) {
            var currentPosition = parseFloat(getComputedStyle(rectangle).left);
            var newPosition;

            if (direction === 'left') {
                newPosition = currentPosition - 10;
                facingRight = false;
            } else if (direction === 'right') {
                newPosition = currentPosition + 10;
                facingRight = true;
            }

            rectangle.style.left = newPosition + 'px';
        }

        function shootBullet(direction) {
            var bullet = document.createElement('div');
            bullet.classList.add('bullet');

            var rectangleRect = rectangle.getBoundingClientRect();
            var bulletPosition = rectangleRect.left + rectangle.offsetWidth / 2;
            bullet.style.left = bulletPosition + 'px';
            bullet.style.bottom = (gameContainer.clientHeight - rectangleRect.bottom + 68) + 'px'; // Adjusted position

            document.body.appendChild(bullet);

            var bulletDirection = direction === 'right' ? 1 : -1;

            bullets.push({element: bullet, direction: bulletDirection}); // Store bullet object in the array

            // Update bullet positions
            setInterval(function () {
                bullets.forEach(function (bulletObj) {
                    var bullet = bulletObj.element;
                    var bulletPosition = parseFloat(bullet.style.left);
                    var bulletDirection = bulletObj.direction;
                    bulletPosition += bulletDirection * 0.75; // Adjusted speed
                    bullet.style.left = bulletPosition + 'px';

                    // Remove the bullet if it goes out of the screen
                    if (bulletPosition < 0 || bulletPosition > window.innerWidth) {
                        bullet.remove();
                        bullets.splice(bullets.indexOf(bulletObj), 1); // Remove bullet object from the array
                    }
                });
            }, 10);
        }
    </script>
</body>
</html>
