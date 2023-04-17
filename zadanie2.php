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
        class TextInput{
            public $text;
            public function add($text){
                $this->text=$text;
            }
            public function getValue(){
                return $this->text;
            }
        }
        /*$nowy = new TextInput();
        $nowy -> add('coś');
        echo $nowy->getValue();*/
        class NumericInput extends TextInput{
            public $text;
                public function add($text){
                    if(is_numeric($text)){
                        $this->text=$text;
                    }
                    else{
                        $this->text='błąd';
                    }
                } 
        }
        /*$nowy = new NumericInput();
        $nowy -> add(7);
        echo $nowy->getValue();*/
    ?>
</body>
</html>