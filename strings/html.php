<?php



$nome = 'cam " /> <script>alert("teste")</scrpt>'



    ?>

<input type="text" name="<?php echo addslashes($nome) ?>" />
<input type="text" name="<?php echo htmlentities($nome) ?>" />
<input type="text" name="<?php echo htmlspecialchars($nome) ?>" />