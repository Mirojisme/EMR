<?php
    require "connect.php";

    if(!empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_POST['patientID'])){
        try {
            // Prepare the SQL statement with named placeholders
            $stmt = $db->prepare("SELECT ID, firstName, lastName FROM Users WHERE firstName LIKE :firstName and lastName LIKE :lastName and ID LIKE :ID");
        
            // Prepare the search terms with wildcard characters
            $fName = isset($_POST['firstName']) ? "%" . $_POST['firstName'] . "%" : "%";
            $lName = isset($_POST['lastName']) ? "%" . $_POST['lastName'] . "%" : "%";
            $pID = isset($_POST['patientID']) ? "%" . $_POST['patientID'] . "%" : "%";

            //if(!empty($fname))
        
            // Bind the parameters to the statement
            $stmt->bindParam(':firstName', $fName, PDO::PARAM_STR);
            $stmt->bindParam(':lastName', $lName, PDO::PARAM_STR);
            $stmt->bindParam(':ID', $pID, PDO::PARAM_STR);
        
            // Execute the statement
            $stmt->execute();
        
            // Fetch all results
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if ($results) {
                echo "<br>";
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "</tr>";
                foreach ($results as $r) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($r['ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($r['firstName']) . "</td>";
                    echo "<td>" . htmlspecialchars($r['lastName']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<br>";
                echo "No results found.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }else{
        echo "<br>";
        echo "No search criteria entered.";
    }
    
?>