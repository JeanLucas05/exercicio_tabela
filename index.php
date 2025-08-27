<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
        <?php
            $pessoas = [
                "Nome"=>"Julia",
                "Idade"=>20,
                "Empresa"=>'Bolos LTDA',
                "Cor" => "Blue",
                "Profissao" => "Fazer Bolo"

            
            ];
            
            $arraykey = array_keys($pessoas);
            foreach ($arraykey as $key){
                
                echo '<th>'.$key.'</th>';
                
            }
            ?>
        </tr>
        <tr>
            <?php 
            $arrayvalue = array_values($pessoas);
                foreach($arrayvalue as $values){
                
                echo "<td>".$values . '</td>';
            }
        ?>
        </tr>
    </table>
</body>
</html>