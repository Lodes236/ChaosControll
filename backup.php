<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wohnzimmer</title>
    <link rel="stylesheet" href="../src/css/main.css">
</head>
<body>
    <!-- D A T A B A S E   C O N N E C T I O N -->
    <?php include("../db_connect.php"); ?>

    <!-- H E A D E R -->
    <?php include("../snippets/header.html"); ?>
    

    <!-- H E A D L I N E -->
    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <h1>Abstellraum</h1>
        </div>
    </div>

    <!-- G A P -->
    <?php include("../snippets/gap.html"); ?>

    <?php
        $sql = "SELECT * FROM Regale WHERE zimmer_id = 4";
        $result = $conn->query($sql);
       
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Loop through each row and display data inside a div
            while($row = $result->fetch_assoc()) {
            echo "<div class='lodes lodes-row'>";
            echo "<div class='lodes-row100'>";
            echo "<div class='accordion'>" . $row["name"] . " <span>ID:" . $row["id"] . " </span></div>";
            echo "<div class='accordion-content'>";
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>ID</th>";
            echo "<th>Aufbewahrung</th>";
            echo "<th>Info</th>";
            echo "<th>Status</th>";
            echo "<th>Notizen</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // from here!
            echo "<tr>";
            echo "<td>Regal Item 1</td>";
            echo "<td>1</td>";
            echo "<td>Wohnzimmer</td>";
            echo "<td>Platz für Bücher</td>";
            echo "<td>Verfügbar</td>";
            echo "<td>Keine Notizen</td>";
            echo "</tr>";
            // to here!
            
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

    <script src="../src/js/script.js"></script>

    <style>
        .accordion span {
            font-size: 10px;
        }
    </style>
</body>
</html>
