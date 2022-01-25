    
    <?php
        if (isset($_POST['operator'])) {
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];
            $operator = $_POST['operator'];

            if ($operator == '+') {
                $operation = $numberOne + $numberTwo;
            } elseif ($operator == '-') {
                $operation = $numberOne - $numberTwo;
            } elseif ($operator == '/') {
                $operation = $numberOne / $numberTwo;
            } elseif ($operator == '*') {
                $operation = $numberOne * $numberTwo;
            } elseif ($operator == '%') {
                $operation = $numberOne % $numberTwo;
            }
        }
    ?>
    
    <div class="card mx-auto mt-5" style="width: 45%;">
        <div class="card-header text-center">
            <h2>Calculator Single Page</h2>
        </div>
        <div class="card-body">

            <form action="index.php" method="post">
                <input type="number" name="numberOne" placeholder="Enter Number One" required class="form-control my-3">
                <input type="number" name="numberTwo" placeholder="Enter Number Two" required class="form-control my-3">
                <button class="btn-control btn px-5 mx-1 py-1 btn-primary my-3" value="+" name="operator">+</button>
                <button class="btn-control btn px-5 mx-1 py-1 btn-secondary my-3" value="-" name="operator">-</button>
                <button class="btn-control btn px-5 mx-1 py-1 btn-success my-3" value="*" name="operator">*</button>
                <button class="btn-control btn px-5 mx-1 py-1 btn-info my-3" value="/" name="operator">/</button>
                <button class="btn-control btn px-5 mx-1 py-1 btn-warning my-3" value="%" name="operator">%</button>
            </form>

            <h2 class="result">Result:
                <?php 
                    if (isset($_POST['operator'])) {
                        echo "<span style='color: blue;'> $numberOne </span>" . $operator . "<span style='color: blue;'> $numberTwo </span> = ";
                        
                        echo "<span style='color: red; font-weight: bold;'>" . $operation . "</span>";
                    }
                ?>
            </h2>

        </div>
    </div>