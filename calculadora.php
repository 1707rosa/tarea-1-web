<?php require_once 'partes/head.php'; ?>
    <style>
        .inputx {
            margin: 10px 0;
        }
        .inputx label {
            display: block;
            margin-bottom: 5px;
        }
        .inputx input, .inputx select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color:rgb(138, 179, 223);
            color: white;
            border: none;
            cursor: pointer;
             border-radius: 4px;
        }
        button:hover {
            background-color: #0056b3;
           
        }
    </style>
    <h2>Calculadora</h2>
    <form method="post" action="">
      <div class="inputx">
       <label>Numero 1: </label> <input type="number" name="num1" placeholder="Numero 1" required>
       </div>
    <div class="inputx">
        <label>Numero 2: </label>  <input type="number" name="num2" placeholder="Numero 2" required>
    </div>
    <div class="inputx">
        <select name="operacion">
            <option value="">Seleccione una operacion</option>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
        </select>
    </div>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: Division por cero";
                }
                break;
            default:
                $resultado = "Operacion no valida";
        }
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</div>
<?php require_once 'partes/foot.php'; ?>