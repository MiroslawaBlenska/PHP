<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $wyn = 0;
    $mecz = 0;
        class RankingTable{
            public $imie;
            public $wynik;
            public $mecz;
            public function recordResult($imie,$wynik){
                $wyn+=$wynik;
                $mecz+=1;
                return array($imie,$wyn,$mecz);
            }
            
        }
        $table = new RankingTable(array("Jan","Maks","Monika"));
        var_dump($table);
    ?>
</body>
</html>