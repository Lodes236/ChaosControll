<?php
// Verbindung zur Datenbank herstellen
$conn = new mysqli("localhost", "u634617957_chaoscontrol", "tldrK4!?", "u634617957_chaoscontrol");

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Eingabedaten aus dem Formular abrufen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gegenstand = $conn->real_escape_string($_POST['gegenstand']);
    $regal_id = (int) $_POST['regal_id'];

    // SQL-Query zum Einfügen des neuen Gegenstands
    $sql = "INSERT INTO Bestand (gegenstand, regal_id) VALUES ('$gegenstand', '$regal_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>Gegenstand erfolgreich hinzugefügt.</p>";
        echo "<a href='default.php'>Zurück zur Eingabeseite</a>";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }
}

// Verbindung schließen
$conn->close();
?>
