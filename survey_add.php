<?php
include("session.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $experience = $_POST['experience'];
    $userRate = $_POST['user-rate'];
    $materialsRate = $_POST['materials-rate'];
    $userRecommend = $_POST['user-recommend'];
    // echo $_POST['prefer'];
    // $preferences = isset($_POST['prefer']) ? $_POST['prefer'] : array();
    // $preferences = is_array($preferences) ? $preferences : array();
    $preferences = $_POST['prefer'];
    $comment = $_POST['comment'];
    $sql="INSERT INTO survey_responses (name, email, age, role, experience, user_rate, materials_rate, user_recommend, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $query=$db->prepare($sql);
    $query->bind_param('sssssssss',$name,$email,$age,$role,$experience,$userRate,$materialsRate,$userRecommend,$comment);
    $exec= $query->execute();
    
    if($exec==true)
    {
        $last_id = $db->insert_id;
        echo "$last_id";
        // echo '<pre>';
        // print_r($preferences);
        // echo '</pre>';
        // foreach ($preferences as $preference) {
        //     echo $preference;
        //     $sql = "INSERT INTO survey_preferences (survey_id, preference) VALUES (?, ?)";
        //     $stmt = $db->prepare($sql);

        //     // Assuming the survey_id value is stored in a variable called $surveyId
        //     // You need to replace $surveyIdPlaceholder with the actual value or bind it as a parameter
        //     $surveyIdPlaceholder = $response['id'];

        //     // Execute the prepared statement with the corresponding values
        //     $stmt->execute([$surveyIdPlaceholder, $preference]);

        //     // Check for errors during execution
        //     if ($stmt->errno) {
        //         echo "Error executing query: " . $stmt->error;
        //         exit;
        //     }
        // }
        $sql = "INSERT INTO survey_preferences (response_id, preference) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("is", $last_id, $preferences); // Assuming 'id' is an integer, adjust the data type accordingly if needed
        $stmt->execute();
        if ($stmt->errno) {
            echo "Error executing query: " . $stmt->error;
            exit;
        }
        $_SESSION['message'] = "Survey submitted successfully";
        header("Location: survey_view.php");   
    }
    else
    {
        $_SESSION['message'] = "Error: " . $sql . "<br>" .$db->error;
        header("Location: survey.php");
    }
}
?>

