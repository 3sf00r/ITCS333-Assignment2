<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Assign_2 Stat Table</title>
    <link rel="stylesheet" href="https://unpkg.com/pico.css">
    <link rel="stylesheet" href="styless.css">
</head>
    
<body>
    <main>
        <?php 

            // Fetch data from the API
            $url = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            // Display the data in a table
            if ($data && isset($data['results'])) {
                echo '<header>UOB Nationality Table</header>';
                echo '<table>';
                echo '<tr><th>Year</th><th>Semester</th><th>Program</th><th>Nationality</th><th>Number of Students</th></tr>';
                //Display data from the API
                foreach ($data['results'] as $result) {
                    echo '<tr>';
                    echo '<td>' . $result['year'] . '</td>';
                    echo '<td>' . $result['semester'] . '</td>'; 
                    echo '<td>' . $result['the_programs'] . '</td>'; 
                    echo '<td>' . $result['nationality'] . '</td>'; 
                    echo '<td>' . $result['number_of_students'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                }

            // Display error message if data retrieval fails    
            else { 
                echo 'Error retrieving data'; 
            }
            ?>


    </main>
    
</body>
</html>
