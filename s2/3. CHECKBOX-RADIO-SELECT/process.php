<?php include("../3. CHECKBOX-RADIO-SELECT/templates/header.php"); ?>
<?php
// YOUR CODE HERE
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php if(isset($_POST["province"])) echo $_POST["province"]; // province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
        <?php if (isset($_POST["gender"])) {
                if ($_POST["gender"] == "Male") {
                    echo '<img src="../3. CHECKBOX-RADIO-SELECT/images/male.png">';
                } else {
                    echo '<img src="../3. CHECKBOX-RADIO-SELECT/images/female.png">';
                }
            }
            
                        
            ?>
            <!-- YOUR CODE HERE [gender] -->
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                if (isset($_POST["subject"]))
                    $subjects =$_POST["subject"];
                if (isset($_POST["subject"])){
                    if (count($subjects) == 1){
                        echo $subjects[0];
                    } else {
                        echo implode(" ", $subjects);
                    }
                    
                }
                // YOUR CODE HERE [subject]
            ?>
        </div>
    </div>

<?php include("../3. CHECKBOX-RADIO-SELECT/templates/footer.php"); ?>