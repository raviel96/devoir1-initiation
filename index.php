<?php
$travels = [
    ['departure' => 'Paris', 'arrival' => 'Nantes', 'departureTime' => '11:00', 'arrivalTime' => '12:34', 'driver' => 'Thomas'],
    ['departure' => 'Orléans', 'arrival' => 'Nantes', 'departureTime' => '05:15', 'arrivalTime' => '09:32', 'driver' => 'Mathieu'],
    ['departure' => 'Dublin', 'arrival' => 'Tours', 'departureTime' => '07:23', 'arrivalTime' => '08:50', 'driver' => 'Nathanaël'],
    ['departure' => 'Paris', 'arrival' => 'Orléans', 'departureTime' => '03:00', 'arrivalTime' => '05:26', 'driver' => 'Clément'],
    ['departure' => 'Paris', 'arrival' => 'Nice', 'departureTime' => '10:00', 'arrivalTime' => '12:09', 'driver' => 'Audrey'],
    ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '10:40', 'arrivalTime' => '13:00', 'driver' => 'Pollux'],
    ['departure' => 'Nice', 'arrival' => 'Tours', 'departureTime' => '11:00', 'arrivalTime' => '16:10', 'driver' => 'Edouard'],
    ['departure' => 'Tours', 'arrival' => 'Amboise', 'departureTime' => '16:00', 'arrivalTime' => '18:40', 'driver' => 'Priscilla'],
    ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '12:00', 'arrivalTime' => '16:00', 'driver' => 'Charlotte'],
];

$city = $_POST['city'];
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Devoir 1</title>
</head>
<body>
    <div class="container">
        <form class="form" action="#" method="post">
            <h1>Itinéraire</h1>
            <div class="form-content">
                <label for="name">Votre nom : </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-content">
                <label for="email">Votre email : </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-content">
                <label for="tel">Votre numéro : </label>
                <input type="tel" name="tel" id="tel">
            </div>
            <div class="form-content">
                <label for="city">Ville de départ : </label>
                <select name="city" id="city">
                        <option value="Paris">Paris</option>
                        <option value="Orléans">Orléans</option>
                        <option value="Dublin">Dublin</option>
                        <option value="Nice">Nice</option>
                        <option value="Tours">Tours</option>
                </select>
            </div>
            <div class="button-container">
                <input type="submit" name="submit" value="Rechercher">
            </div>
        </form>
        <section class="travel">
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['name']) or !empty($_POST['email']) or !empty($_POST['tel'])) {




                    foreach ($travels as $tab):
                        if ($tab['departure'] === $city) { ?>
                <div class="travel-info">
                    <h2><?php echo $city ?> - <?php echo $tab['arrival']; ?></h2>
                    <p>Heure de départ : <?php echo $tab['departureTime']; ?></p>
                    <p>Heure d'arrivée : <?php echo $tab['arrivalTime']; ?></p>
                    <p>Pilote : <?php echo $tab['driver']; ?></p>
                </div>
            <?php }endforeach;
                } else { ?>
                <p>Aucune destination trouvée.</p>
            <?php } }?>
        </section>
    </div>
</body>
</html>