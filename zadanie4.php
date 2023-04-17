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
    
        $thesaurus= array("market","small");
        $n=count($thesaurus);
        $synonyms= array("trade",array ("little","compact"));
        function getSynonyms($slowo){
            for($i=0;$i<=$n;$i++)
            if ($slowo==$thesaurus[$i]){
                echo("{word :"+$slowo+", synonyms: ["+$synonyms[$i]+"]}");
            }
            else{
                echo("{word :"+$slowo+", synonyms:"+"[]}");
            }
        }
        getSynonyms("market");
    ?>
</body>
</html>