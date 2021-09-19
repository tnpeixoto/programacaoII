<!-- /*
União Metropolitana de Educação e Cultura
Bacharelado em Sistemas de Informação
Programação para Web II
Prof. Pablo Ricardo Roxo Silva
Tiago Nogueira Peixoto
*/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATIVIDADE PARCIAL I EX 3</title>
</head>
<body>
        <form>
            Numero: <input name="numero" /> <br />
            Divisor: <input name="divisor" /> <br />
            <input type="hidden" name="form_cadastro" />
            <input type="submit" />
        </form>
        <?php
            
            $numero = $_GET['numero'];
            $divisor = $_GET['divisor'];

            if(isset($_GET['form_cadastro'])) {
            while ($divisor <= $numero) {
            $resto = ($numero % $divisor);
          
            if ($resto==0) {
                echo ('Os números divisveis por:  ' .$divisor .' são :'. $numero . '<br />');
            }
            $numero = $numero - 1;
           }
        }
        ?>     
</body>
</html>
