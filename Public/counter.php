<?php 
function pagecontroller() {
   
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Count</title>
 
</head>
<body>
    <div class="col s12 m4 l2"></div>
    <div class="container col s12 m4 l8">
        <h1>Favorite Things Assignment</h1>
        <?= $count ?>
        <a href= "?">Up</a>
        <a href= "?">Down</a>
        
    </div>
    <div class="col s12 m4 l2"></div>
    
</body>
</html>