<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guessing</title>
</head>
<body>
            <form action="nineRomaOne.php" method="get">
                <input type="number" placeholder="number" name="x" required>
                <input type="submit" value="guess" name="btnguess" required>

            </form>
                                            <?php
                                            if (isset($_GET['btnguess'])) {
                                                function tabiri($x)
                                                {
                                                    switch ($x) {
                                                        case 0:
                                                            echo "only number 1- 6 to bet";
                                                            break;
                                                        case 1;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 1;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 2;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 3;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 4;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 5;
                                                            echo "ops!! you lost";
                                                            break;
                                                        case 6;
                                                            echo "Bravo!!! you won";
                                                            break;
                                                        default;
                                                            echo "enter a valid number";
                                                    }
                                                }

                                                $number = $_GET['x'];
                                                tabiri($number);
                                            }
                                            ?>
</body>
</html>