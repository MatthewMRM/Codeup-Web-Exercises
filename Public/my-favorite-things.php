<?php 
function pagecontroller() {
    $favoriteThings = ['Movies', 'Music', 'Traveling', 'Staying Active', 'Dancing'];  
    $data = array();
    $data['favThings'] = $favoriteThings;
    return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Favorite Things</title>
 
</head>
<body>
    <div class="col s12 m4 l2"></div>
    <div class="container col s12 m4 l8">
        <h1>Favorite Things Assignment</h1>
        <table class="highlight z-depth-5 col s12 m4 l8">
            <tr>
                <th class="flow-text">My Favorite Things</th>
            </tr>
                <?php foreach ($favThings as $thing): ?>
                    <tr>
                        <td class="flow-text"> 
                         <?= $thing; ?>
                    
                        </td>
                    </tr>
                <?php endforeach;  ?>
        </table>   
    </div>
    <div class="col s12 m4 l2"></div>
    
</body>
</html>

