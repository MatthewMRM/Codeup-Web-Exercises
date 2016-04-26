<?php 
    $nouns = ['Boxer', 'Pitbull', 'Lab', 'Golden retriever', 'Poodle', 'Pug', 'Great Dane', 'shih Tzu', 'Chow Chow', 'Basset Hound'];
    $adjectives = ['big', 'small', 'brown', 'gold', 'sad', 'gordo', 'tiny', 'long', 'angry', 'baked'];
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Server Generator</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <!-- Customized CSS -->
        <link rel="stylesheet" href="css/server-name-generator.css">
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
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    </body>
</html>