<form method="POST">
    <div>
        <label for="Facebook">Facebook</label>
        <input type="checkbox" name="socialNetworks" id="Facebook">
        <label for="Twitter">Twitter</label>
        <input type="checkbox" name="socialNetworks" id="Twitter">
        <label for="Badoo">Badoo</label>
        <input type="checkbox" name="socialNetworks" id="Badoo">
        <label for="Google+">Google+</label>
        <input type="checkbox" name="socialNetworks" id="Google+">
    </div>
    <input type="submit" value="Valider">
</form>
<?php
if(isset($_POST['socialNetworks'])){
    echo ($_SESSION['socialNetworks']);
}
