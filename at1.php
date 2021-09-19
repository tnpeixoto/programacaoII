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
    <title>ATIVIDADE PARCIAL I EX 1</title>
</head>
<body>
        <form>
            AV1: <input name="av1" /> <br />
            AV2: <input name="av2" /> <br />
            AV3: <input name="av3" /> <br />
            <input type="hidden" name="form_cadastro" />
            <input type="submit" />
        </form>

        <?php
            $av1 = $_GET['av1'];
            $av2 = $_GET['av2'];
            $av3 = $_GET['av3'];
            
            $media = ($av1 + $av2 + $av3)/3;

            if(isset($_GET['form_cadastro'])) {
            if ($media < 4) {
                echo "Você foi conservado !";
            } else if ($media >= 4 && $media < 7) {
                echo "Você está na recuperação !";
            } else{
                echo "Parabéns, você foi aprovado !";
            }
        }
        ?>
      
</body>
</html>
