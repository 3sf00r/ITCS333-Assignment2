<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assign_2 Stat Table</title>
    <link rel="stylesheet" href="https://unpkg.com/pico.css">

<style>
    
* {
 margin: auto;
}
 header {
text-align: center;
font-size: 57px;
padding-top: 20px;
}
table { 
    text-align: center;
    width: 70%;
    border-collapse: inherit;
    margin-top: 20px; 
}
th, td { 
    border: 2px solid #ccc;
    padding: 8px;
    font-family: Arial, Helvetica, sans-serif;
}
    
th { background-color: beige; 
    font-family: Tahoma, Comic sans-serif; 
   }
    
@media (max-width: 1080px) { 
    table { width: 80%; } 
}
    
</style>
</head>
<body>
    <main>
        <?php
            $url = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            if ($data && isset($data['results'])) {
                echo '<header>UOB Nationality Table</header>';
                echo '<table>';
                echo '<tr><th>Year</th><th>Semester</th><th>Program</th><th>Nationality</th><th>Number of Students</th></tr>';
                
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
            else { 
                echo 'Error retrieving data'; 
            }
            ?>

        <header>UOB Nationality Table</header>

    </main>
    
</body>
</html>
