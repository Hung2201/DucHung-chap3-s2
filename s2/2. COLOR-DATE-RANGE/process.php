<?php 
include("../2. COLOR-DATE-RANGE/templates/header.php");
?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php if (isset($_POST["color"])) echo $_POST["color"]; //color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php if (isset($_POST["range"])) echo $_POST["range"]; //range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php if (isset($_POST["date"])) echo $_POST["date"];//date; ?></span>
    </div>

<?php include("../2. COLOR-DATE-RANGE/templates/footer.php"); ?>