<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php 
            // Beveilig de POST variabelen voordat ze worden weergegeven
            $naam = htmlspecialchars($_POST["naam"]);
            $straat = htmlspecialchars($_POST["straat"]);
            $postcode = htmlspecialchars($_POST["postcode"]);
            $gemeente = htmlspecialchars($_POST["gemeente"]);
            $telefoon = htmlspecialchars($_POST["telefoon"]);
            $email = htmlspecialchars($_POST["email"]);
            $geboortedatum = htmlspecialchars($_POST["geboortedatum"]);
            $fotoTitel = htmlspecialchars($_POST["fotoTitel"]);
            $camera = htmlspecialchars($_POST["camera"]);
            $lens = htmlspecialchars($_POST["lens"]);
            $beschrijving = htmlspecialchars($_POST["beschrijving"]);

            echo "<p>Naam: $naam</p>";
            echo "<p>Straat: $straat</p>";
            echo "<p>Postcode: $postcode</p>";
            echo "<p>Gemeente: $gemeente</p>";
            echo "<p>Telefoonnummer: $telefoon</p>";
            echo "<p>E-mailadres: $email</p>";
            echo "<p>Geboortedatum: $geboortedatum</p>";
            echo "<p>Titel foto: $fotoTitel</p>";
            echo "<p>Camera: $camera</p>";
            echo "<p>Lens: $lens</p>";
            echo "<p>Beschrijving foto: $beschrijving</p>";
        ?>
    </div>
</div>

<?php
// E-mail instellen
$to = "test@localhost";
$subject = "Inzending formulier";

$bericht = "
Naam: $naam
Straat: $straat
Gemeente: $gemeente
Postcode: $postcode
Telefoonnummer: $telefoon
E-mail adres: $email
Geboortedatum: $geboortedatum

Lens: $lens
Beschrijving: $beschrijving
";

// Headers instellen
$headers = "From: Test User <test@localhost>";

// E-mail verzenden
if(mail($to, $subject, $bericht, $headers)) {
    echo "E-mail verzonden";
} else {
    echo "E-mail niet verzonden";
}

// Verbinding maken met database
$servername = "hostname";
$username = "database_username";
$password = "database_password";
$dbname = "database_name";

// Functie om gegevens op te slaan in de database
function saveToDB($naam, $straat, $postcode, $gemeente, $telefoon, $email, $geboortedatum, $lens, $beschrijving) {
    global $servername, $username, $password, $dbname;

    // Maak een nieuwe verbinding met MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controleer verbinding
    if ($conn->connect_error) {
        die("Verbinding mislukt: " . $conn->connect_error);
    }

    // Prepared statement gebruiken om SQL injecties te voorkomen
    $stmt = $conn->prepare("INSERT INTO wedstrijd (Naam, Straat, Postcode, Gemeente, Telefoonnummer, Email, Geboortedatum, Lens, Beschrijving) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $naam, $straat, $postcode, $gemeente, $telefoon, $email, $geboortedatum, $lens, $beschrijving);

    // Controleer of het toevoegen succesvol was
    if ($stmt->execute()) {
        echo "Gegevens succesvol opgeslagen";
    } else {
        echo "Fout bij opslaan van gegevens: " . $conn->error;
    }

    // Sluit de statement en de verbinding
    $stmt->close();
    $conn->close();
}

// Roep de functie aan om gegevens op te slaan
saveToDB($naam, $straat, $postcode, $gemeente, $telefoon, $email, $geboortedatum, $lens, $beschrijving);
?>
