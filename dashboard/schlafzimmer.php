<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schlafzimmer</title>
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/css/e_accordion.css">
</head>
<body>
    <!-- D A T A B A S E   C O N N E C T I O N -->
    <?php include("../db_connect.php"); ?>

    <!-- H E A D E R -->
    <?php include("../snippets/header.html"); ?>

    <!-- G A P -->
    <?php include("../snippets/gap.html"); ?>

    <!-- H E A D L I N E -->
    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <h1>Schlafzimmer</h1>
        </div>
    </div>

    <!-- G A P -->
    <?php include("../snippets/gap.html"); ?>

    <!-- D A T A B A S E _ F E T C H -->
    <?php
        $sql = "SELECT * FROM Regale WHERE zimmer_id = 6 ORDER BY name";
        $result = $conn->query($sql);
       
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Loop through each row and display data inside a div
            while($row = $result->fetch_assoc()) {
            echo "<div class='lodes lodes-row'>";
            echo "<div class='lodes-row100'>";
            echo "<div class='accordion'>" . $row["name"] . " <span>ID " . $row["id"] . " </span></div>";
            echo "<div class='accordion-content'>";
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Aufbewahrung</th>";
            echo "<th>Status</th>";
            echo "<th>Notizen</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Second query to get related items based on the first query's id
            $id = $row["id"];
            $sql_inner = "SELECT * FROM Bestand WHERE regal_id = $id";
            $result_inner = $conn->query($sql_inner);
            
            if ($result_inner->num_rows > 0) {
                while ($inner_row = $result_inner->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $inner_row["id"] . "</td>";
                    echo "<td>" . $inner_row["gegenstand"] . "</td>";
                    echo "<td>" . $inner_row["Aufbewarung"] . "</td>";
                    echo "<td>" . $inner_row["status"] . "</td>";
                    echo "<td>" . $inner_row["notizen"] . "</td>";
                    echo "</tr>";
                }
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            }
        } else {
            echo "No records found.";
        }
    ?>
    
    </div>

    <!-- G A P -->
    <?php include("../snippets/gap.html"); ?>

    <!-- S C R I P T -->
    <script src="../src/js/script.js"></script>

</body>
</html>
