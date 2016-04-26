
<?php
function pageController() {
    $nouns = ['Boxer', 'Pitbull', 'Lab', 'Golden retriever', 'Poodle', 'Pug', 'Great Dane', 'shih Tzu', 'Chow Chow', 'Basset Hound'];
    $adjectives = ['big', 'small', 'brown', 'gold', 'sad', 'gordo', 'tiny', 'long', 'angry', 'baked'];
   
    function random ($array1) {
        $random_element = array_rand($array1);
        return $array1[$random_element];
    }
    $data = array();
    $data['adjectives'] = random($adjectives);
    $data['nouns'] = random($nouns);
    return $data;
}
extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
    <link rel="stylesheet" href="/css/server-name-generator.css">
</head>
<body>
    <h1><?= "$adjectives" . " " . "$nouns\n" . PHP_EOL; ?></h1>
</body>
</html>