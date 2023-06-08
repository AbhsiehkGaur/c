<?php include("session.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Survey Responses</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <a href="index.php">Back to Home</a>
    <h1>Survey Responses</h1>

    <?php
    
    // Fetch survey responses from the database
    
    $sql = $db->prepare("SELECT * FROM survey_responses");
    $sql->execute();
    // Get the result set
    $result = $sql->get_result();

    // Fetch all the survey responses as an associative array
    $responses = $result->fetch_all(MYSQLI_ASSOC);
    


    

    if (count($responses) > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Age</th>';
        echo '<th>Role</th>';
        echo '<th>Experience</th>';
        echo '<th>User Rating</th>';
        echo '<th>Materials Rating</th>';
        echo '<th>Recommendation</th>';
        echo '<th>Preferences</th>';
        echo '<th>Comments</th>';
        echo '</tr>';

        foreach ($responses as $response) {
            echo '<tr>';
            echo '<td>' . $response['name'] . '</td>';
            echo '<td>' . $response['email'] . '</td>';
            echo '<td>' . $response['age'] . '</td>';
            echo '<td>' . $response['role'] . '</td>';
            echo '<td>' . $response['experience'] . '</td>';
            echo '<td>' . $response['user_rate'] . '</td>';
            echo '<td>' . $response['materials_rate'] . '</td>';
            echo '<td>' . $response['user_recommend'] . '</td>';

            // Fetch preferences for the current response
            $stmt = $db->prepare("SELECT preference FROM survey_preferences WHERE response_id = ?");
            $stmt->bind_param("i", $response['id']); // Assuming 'id' is an integer, adjust the data type accordingly if needed
            $stmt->execute();

            // Bind the result to a variable
            $stmt->bind_result($preference);

            // Fetch all the survey preferences as an array of values
            $preferences = array();
            while ($stmt->fetch()) {
                $preferences[] = $preference;
                
            }
            echo '<td>' . implode(', ', $preferences) . '</td>';
            echo '<td>' . $response['comment'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No survey responses found.</p>';
    }
    ?>

</body>

</html>
