<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                    <form action="nineRoman2.php" method="get">
                        <input type="number" placeholder="weight" name="x" required>
                        <input type="text" placeholder="height" name="y" required>
                        <input type="submit" value="calaculate" name="z" required>
                    </form>
                                    <?php
                                    if (isset($_GET['x'])){
                                        function bmi($w,$h){
                                            $x=$w/($h*$h);
                                            if ($x < 24) {
                                                echo "light weight";
                                            }
                                            elseif ($x<34){
                                                echo "normal weight";
                                            }
                                        elseif ($x<44){
                                            echo "obese";
                                        }
                                        elseif ($x<54){
                                            echo "extreme obese";
                                        }
                                            else {
                                                echo "you are dead";
                                            }
                                        }
                                        $weight=$_GET['x'];
                                        $height=$_GET['y'];
                                        bmi($weight,$height);
                                    }
                                    ?>
</body>
</html>



