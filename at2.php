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
    <title>ATIVIDADE PARCIAL I EX 2</title>
</head>
<body>
        <form>
            Digite o numero do mes: <input name="nunMes" /> <br />
            Digite o mes: <input name="mes" /> <br />
            <input type="hidden" name="form_cadastro" />
            <input type="submit" />
        </form>

        <?php
            $nunMes = $_GET['nunMes'];
            $mes = strtolower ($_GET['mes']);
            

            if(isset($_GET['form_cadastro'])) {
                switch($mes) {
                case 'janeiro':
                    if ($nunMes == 1){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }
                    break;
                case 'fevereiro':
                    if ($nunMes == 2){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }
                    break;
                case 'março':
                    if ($nunMes == 3){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }
                    break;
                case 'abril':
                    if ($nunMes == 4){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'maio':
                    if ($nunMes == 5){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'junho':
                    if ($nunMes == 6){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'julho':
                    if ($nunMes == 7){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'agosto':
                    if ($nunMes == 8){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'setembro':
                    if ($nunMes == 9){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'outubro':
                    if ($nunMes == 10){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                case 'novembro':
                    if ($nunMes == 11){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                        
                    break;
                case 'dezembro':
                    if ($nunMes == 12){
                        echo "Mês Válido";
                    } else {
                        echo "Referência Invalida";
                    }                    
                    break;
                default:
                    echo 'Mês ou Número Inválido';
                }
            }
        ?>     
</body>
</html>
