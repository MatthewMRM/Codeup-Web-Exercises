
<?php
// On each page load, it should retrieve all records from the database and display them.
// Modify your query to load only four parks at a time.
// Use a parameter in $_GET to determine which page the user is on and load only the appropriate parks for that page.
// Modify your page to add links to go to the next or previous page(s).
// Add some logic to determine whether or not to show the next and/or previous page links.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db.');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');
require_once '../db_connect.php';
REQUIRE '../Input.php';
function pageController($dbc) {
    $data = [];
    $data['page'] = Input::has('page') ? Input::get('page') : 1;
    $offset = ($data['page'] - 1) * 4; 
    $stmt = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset);
    
    $data['parks'] = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $data;
}
    extract(pageController($dbc));
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>National Parks</title>

    <!-- font -->
    

</head>
<body>

<div>
    <p>You are on page <?=$page;?> </p>
    <h2>National Parks of the United States</h2>
    <div>
        <table class="shadow">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Acreage</th>
            </tr>

            <?php foreach($parks as $park) : ?>
                <tr><td><?= $park['name']; ?></td>
                <td><?= $park['location']; ?></td>
                <td><?= date_format(date_create($park['date_established']), 'm-d-Y' ); ?></td>
                <td><?= $park['area_in_acres']; ?></td></tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

<footer class="footer"> 
    <?php if($page>=2): ?> 
        <a href="?page=<?= $page - 1 ?>" class="btn btn-default">Previous</a>
    <?php endif; ?>

    <?php if($page < count($parks) ): ?>
        <a href="?page=<?= $page + 1 ?>" class="btn btn-default">Next</a>
    <?php endif; ?>
</footer>

</body>
</html>
