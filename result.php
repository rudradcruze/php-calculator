<?php
    require_once 'header.php';

    $numberOne = $_POST['numberOne'];
    $numberTwo = $_POST['numberTwo'];
    $operator = $_POST['operator'];
?>

        <div class="card mx-auto mt-5" style="width: 45%;">
        <div class="card-header text-center">
            <h2>Calculator</h2>
        </div>
        <div class="card-body">

            <h2>Result:

                <?php
                
                    echo "<span style='color: blue;'> $numberOne </span>" . $operator . "<span style='color: blue;'> $numberTwo </span> = ";

                    if ($operator == '+') {
                        $operation = $numberOne + $numberTwo;
                        echo "<span style='color: red; font-weight: bold;'>". $operation ."</span>";
                    }elseif ($operator == '-') {
                        $operation = $numberOne - $numberTwo;
                        echo "<span style='color: red; font-weight: bold;'>". $operation ."</span>";
                    }elseif ($operator == '/') {
                        $operation = $numberOne / $numberTwo;
                        echo "<span style='color: red; font-weight: bold;'>". $operation ."</span>";
                    }elseif ($operator == '*') {
                        $operation = $numberOne * $numberTwo;
                        echo "<span style='color: red; font-weight: bold;'>". $operation ."</span>";
                    }elseif ($operator == '%') {
                        $operation = $numberOne % $numberTwo;
                        echo "<span style='color: red; font-weight: bold;'>". $operation ."</span>";
                    }

                ?>
               
            </h2>

            <a href="index.php" class="btn btn-dark mt-3">Home Page</a>

        </div>
    </div>

<?php
    require_once 'footer.php';
?>