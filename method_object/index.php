 <?php include"functions.php"?>
    <form action="" method = "post">
        <table>
            <tr>
                <td>Emter the first number:</td>
                <td> <input type="number" name = "num1"></td>
            </tr>

            <tr>
                <td>Emter the second number:</td>
                <td> <input type="number" name = "num2"></td>
            </tr>

            <tr>
                <td> <input type="submit" name = "calculation" value ="Calculate"></td>
            </tr>
        </table>
    </form>

    <?php 
        if (isset($_POST['calculation'])){
            $numOne = $_POST['num1'];
            $numtwo = $_POST['num2'];
        

        if (empty($numOne) or empty($numtwo)){
            echo "<span style = 'color:red'> Field must not be empty</span>";
        }else{
            echo "first number is:".$numOne. "And Second number is:".$numtwo;
            $call = new calculation;
            $call->add($numOne, $numtwo);
            $call->sub($numOne, $numtwo);
        }}
       
    ?>