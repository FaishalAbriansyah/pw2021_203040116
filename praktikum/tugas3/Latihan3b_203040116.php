<!-- Ahfaz Gafara -->

<?php 
$pemain_bola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>lat3b_203040083</title>
</head>
<body>
    <h3>Daftar Pemain Bola Terkenal</h3>
    <ol>
        <?php foreach($pemain_bola as $pb) {
            echo "<li>$pb</li>";
        }
        ?>
    </ol>

    <?php 
    array_push($pemain_bola, "Luca Modric", "Sadio Mane");
    sort($pemain_bola);
    ?>
    <h3>Daftar Pemain Bola Terkenal Baru</h3>
    <ol>
        <?php foreach($pemain_bola as $pb) {
            echo "<li>$pb</li>";
        }
        ?>
    </ol>
</body>
</html>