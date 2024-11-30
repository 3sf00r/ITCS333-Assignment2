<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assign_2 Stat Table</title>
    <link rel="stylesheet" href="https://unpkg.com/pico.css">
</head>
<body>
    <main>
        <?php
            $url = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            ?>

        <header>UOB Nationality Table</header>

        <table>
            <tr><th>Year</th><th>Semester</th><th>Program</th><th>Nationality</th><th>Number of Students</th></tr>
        </table>
    </main>
    
</body>
</html>
