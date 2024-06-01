<?php
    require "connect.php";


    try {
        // Prepare the SQL statement with named placeholders
        $stmt = $db->prepare("SELECT ID, firstName, lastName FROM Users WHERE firstName LIKE :firstName OR lastName LIKE :lastName OR ID LIKE :ID");
    
        // Prepare the search terms with wildcard characters
        $fName = isset($_POST['firstName']) ? "%" . $_POST['firstName'] . "%" : "%";
        $lName = isset($_POST['lastName']) ? "%" . $_POST['lastName'] . "%" : "%";
        $pID = isset($_POST['patientID']) ? "%" . $_POST['patientID'] . "%" : "%";
    
        // Bind the parameters to the statement
        $stmt->bindParam(':firstName', $fName, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lName, PDO::PARAM_STR);
        $stmt->bindParam(':ID', $pID, PDO::PARAM_STR);
    
        // Execute the statement
        $stmt->execute();
    
        // Fetch all results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>