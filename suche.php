<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

include("db_connect.php");

if (isset($_GET['query'])) {
    $search = "%" . $_GET['query'] . "%";

    $stmt = $conn->prepare("SELECT gegenstand, notizen, regal_id, Aufbewarung FROM Bestand WHERE gegenstand LIKE ? OR notizen LIKE ?");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();

    $output = "";
    while ($row = $result->fetch_assoc()) {
        $output .= "<tr><td>" . htmlspecialchars($row['gegenstand']) . "</td><td>" . htmlspecialchars($row['regal_id']) . "</td><td>" . htmlspecialchars($row['Aufbewarung']) . "</td><td>" . htmlspecialchars($row['notizen']) . "</td></tr>";
    }

    echo $output ?: "<tr><td colspan='4'>Keine Ergebnisse gefunden.</td></tr>";

    $stmt->close();
    $conn->close();
    exit; // Stop script execution here
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suche</title>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="../src/css/e_search.css">
</head>
<body>

    <!-- H E A D E R -->
    <?php include("snippets/header.html"); ?>

    <!-- H E A D L I N E -->
    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <h1>Suche</h1>
        </div>
    </div>

    <!-- G A P -->
    <?php include("snippets/gap.html"); ?>

    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Suche..." onkeyup="searchData()">
            </div>

            <div id="search-results" style="display: none;">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Gegenstand</th>
                            <th>ID</th>
                            <th>Fach</th>
                            <th>Notizen</th>
                        </tr>
                    </thead>
                    <tbody id="results-body">
                        <!-- Results will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
</body>
</html>
