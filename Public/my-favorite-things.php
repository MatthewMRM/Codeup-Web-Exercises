<?php 
    $favoriteThings = ['Movies', 'Music', 'Traveling', 'Staying Active', 'Dancing'];  
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
                <?php foreach ($favoriteThings as $thing) { ?>
                    <tr>
                        <td class="flow-text"> 
                         <?php echo $thing; ?>
                    
                        </td>
                    </tr>
                <?php }  ?>
        </table>   
    </div>
    <div class="col s12 m4 l2"></div>
    
</body>
</html>