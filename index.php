<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="sahafront/index.php"><button>Main Page</button></a>
    <a href="seller/dashboard.php"><button>Become a seller</button></a>
    <?php
    class Solution
    {

        function twoSum($nums, $target)
        {
            $res = array();
            $i = 0;
            $j = 0;
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    $a = $nums[$j];
                    $b = $nums[$j + 1];
                    if ($a + $b === $target) {
                        array_push($res, $a);
                        array_push($res, $b);
                        echo $a;
                        echo $b;
                        break;
                    }

                }
            }
        }
    }
    $sol = new Solution();
    $n = [2, 7, 11, 15];
    $in = 18;
    $sol->twoSum($n, $in);

    ?>


</body>

</html>