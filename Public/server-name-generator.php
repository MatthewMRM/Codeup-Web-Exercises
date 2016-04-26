<?php 
    $nouns = ['Boxer', 'Pitbull', 'Lab', 'Golden retriever', 'Poodle', 'Pug', 'Great Dane', 'shih Tzu', 'Chow Chow', 'Basset Hound'];
    $adjectives = ['big', 'small', 'brown', 'gold', 'sad', 'gordo', 'tiny', 'long', 'angry', 'baked'];
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Server Generator</title>
    </head>
    <body>
        <div class="col s12 m4 l2"></div>
        <div class="container col s12 m4 l8">
            <?php  
                $randomNoun = mt_rand(0, count($nouns) - 1);
                $randomAdjective = mt_rand(0, count($adjectives) - 1);
            ?>
            <h1><?php echo $adjectives[$randomAdjective].' '.$nouns[$randomNoun] ?></h1>
        </div>
        
    </body>
</html>