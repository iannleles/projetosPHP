<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            align-content: center;
            border-radius: 5px;
            background-color: aqua;
            padding: 5px;
            width: 50%;
        }
    </style>
    <body>

    <center>
        <h3>Exemplo de Função</h3>
        <div >
            <form action="form3_resp.php">
                <label for="fnumero">Número:</label>
                <input type="number" id="fnumero" name="numero" min="0" max="1000"  >
                <input type="submit" value="Submit">
            </form>
        </div>
    </center>
</body>
</html>


