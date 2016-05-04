
<?php
//class code
require_once 'GEN.php';
//objects are state and behavior
function pageController() {
    $nouns = new NameGen();
    $adejctives = new NameGen();
    $nouns->setupGen('Boxer', 'Pitbull', 'Lab', 'Golden retriever', 'Poodle', 'Pug', 'Great Dane', 'shih Tzu', 'Chow Chow', 'Basset Hound');
    $adjectives->setupGen('big', 'small', 'brown', 'gold', 'sad', 'gordo', 'tiny', 'long', 'angry', 'baked');
   
    function random ($array1) {
        $random_element = array_rand($array1);
        return $array1[$random_element];
    }
    $this->data = array();
    $this->data['adjectives'] = random($adjectives);
    $this->data['nouns'] = random($nouns);
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