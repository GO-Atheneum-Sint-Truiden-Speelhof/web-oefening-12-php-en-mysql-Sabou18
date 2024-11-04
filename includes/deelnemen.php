<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>

<form method="post" action="index.php?=confirm">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam" required><br>

    <br><label for="phone">Telefoon:</label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br>

    <br><label for="gemeente">Gemeente:</label><br>
    <input type="text" id="gemeente" name="gemeente" required><br>

    <br><label for="postcode">Postcode:</label><br>
    <input type="number" id="postcode" name="postcode" min="1000" max="9999" required><br>

    <br><label for="straat">Straat en nr:</label><br>
    <input type="text" id="straat" name="straat" required><br>

    <br><label for="datum">Geboorte datum:</label><br>
    <input type="date" id="datum" name="datum" required><br>

    <br><label for="mail">E-mail:</label><br>
    <input type="email" id="mail" name="mail" required><br>

    <br><label for="titelfoto">Titel van je foto:</label><br>
    <input type="text" id="titelfoto" name="titelfoto" required><br>

    <br><label for="camera">Camera:</label><br>
    <input type="text" id="camera" name="camera"><br>

    <br><label for="lens">Lens:</label><br>
    <input type="text" id="lens" name="lens"><br>

    <br><label for="beschrijffoto">Beschrijf je foto:</label><br>
    <textarea id="beschrijffoto" name="beschrijffoto" rows="4" cols="50" required></textarea><br>

    <br><input type="submit" value="Deelnemen">
</form>
