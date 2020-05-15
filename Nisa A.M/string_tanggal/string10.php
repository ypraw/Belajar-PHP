<form action="" method="post">
Input text di sini : <br>
<textarea name="input" id="" cols="40" rows="4"></textarea><br>
<input type="submit" name="submit" value="proses">
</form>

<?php
if(isset($_POST['submit'])){
    $txt = $_POST['input'];
    echo "Tanpa nl2br() : <br>$txt<br><br>";
    echo "Dengan nl2br() : <br>".nl2br($txt);
}

?>