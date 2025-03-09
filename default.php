<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wohnräume</title>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="../src/css/e_card.css">
</head>
<body>

    <!-- H E A D E R -->
    <?php include("snippets/header.html"); ?>
    

    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <h1>Dashboard</h1>
        </div>
    </div>

    <?php include("snippets/gap.html"); ?>
    
    <div class="lodes lodes-row">
        <div class="lodes-row100">
            <div class="cards">
                
                <div class="card" onclick="window.location='dashboard/abstellraum.php';">
                    <h2>Abstellraum</h2>
                    <div class="card-image" style="background-image: url('src/images/abstellraum.jpg');"></div>
                </div>

                <div class="card" onclick="window.location='dashboard/auto.php';">
                    <h2>Auto</h2>
                    <div class="card-image" style="background-image: url('src/images/auto.jpg');"></div>
                </div>

                <div class="card" onclick="window.location='dashboard/buero.php';">
                    <h2>Büro</h2>
                    <div class="card-image" style="background-image: url('src/images/buero.jpg');"></div>
                </div>

                <div class="card" onclick="window.location='dashboard/flur.php';">
                    <h2>Flur</h2>
                    <div class="card-image" style="background-image: url('src/images/flur.jpg');"></div>
                </div>

            </div>
        </div>
    </div>

    <?php include("snippets/gap.html"); ?>
    
    <div class="cards">
        
        <div class="card" onclick="window.location='dashboard/keller.php';">
            <h2>Keller</h2>
            <div class="card-image" style="background-image: url('src/images/keller.jpg');"></div>
        </div>

        <div class="card" onclick="window.location='dashboard/schlafzimmer.php';">
            <h2>Schlafzimmer</h2>
            <div class="card-image" style="background-image: url('src/images/schlafzimmer.jpg');"></div>
        </div>

        <div class="card" onclick="window.location='dashboard/wohnzimmer.php';">
            <h2>Wohnzimmer</h2>
            <div class="card-image" style="background-image: url('src/images/wohnzimmer.jpg');"></div>
        </div>
        
    </div>

    <script src="script.js"></script>
</body>
</html>
