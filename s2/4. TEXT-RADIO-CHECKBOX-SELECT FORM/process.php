<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php

    ?>
    <tr>
        <td><?php if (isset($_POST["name"])) echo $_POST["name"]; //name; 
            ?></td>
        <td><?php if (isset($_POST["email"])) echo $_POST["email"]; //email; 
            ?></td>
        <td><?php if (isset($_POST["password"])) echo $_POST["password"]; //password; 
            ?></td>
        <td><?php if (isset($_POST["number"])) echo $_POST["number"]; //number; 
            ?></td>
        <td><?php if (isset($_POST["message"])) echo $_POST["message"]; //message; 
            ?></td>
        <td><?php if (isset($_POST["province"])) echo $_POST["province"]; //province; 
            ?></td>
        <td>
            <?php
            if (isset($_POST["subject"]))
                $subjects = $_POST["subject"];
            if (isset($_POST["subject"])) {
                if (count($subjects) == 1) {
                    echo $subjects[0];
                } else {
                    echo implode(" ", $subjects);
                }
            }
            ?>
        </td>
        <td><?php 
                if (isset($_POST["gender"])) echo $_POST["gender"];// gender 
            ?></td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>