<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$subjects = isset($_POST['subject']) ? $_POST['subject'] : [];
?>

<div class="card">
    <div class="card-body">
        <?php
        
        foreach ($subjects as $value) {
            $color = $colors[array_rand($colors)];
            echo '<button class="btn btn-' . $color . ' me-3">' . $value . '</button>';
        }
        ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>
