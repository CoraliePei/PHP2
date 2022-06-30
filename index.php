<?php

include('includes/header.php');
include('includes/fonctions.php');
?>

<main>
    <?php
    // $tableau = array();
    $tableau = [];
    $tableau = [true, 45, 'Terre', [45, 46, 48]];

    debug($tableau);

    $tableau[] = 'Janvier';
    array_push($tableau, 'Voiture', 'Tortue');

    debug($tableau[2]);

    $notes = [15, 5, 16, 7];

    $nbElementNotes = count($notes);
    $sommesNotes = $notes[0] + $notes[1];
    $moyenneNotes = $sommesNotes / $nbElementNotes;
    echo $moyenneNotes;
    echo "<hr>";

    $tab2 = array_merge($tableau, $notes);
    // Permet de fusionner deux tableaux

    function moyenne($data)
    {
        $counter = 0;
        for ($k = 0; $k < count($data); $k++) {
            $counter += $data[$k];
        }
        $counter /= count($data);
        echo $counter;
    }

    moyenne($notes);

    $ages = [
        'Michel' => 34,
        'Mich' => 34,
        'Mic' => 34,
    ];

    $chaine = implode('-', $ages);
    echo $chaine;
    // affiche le tableau à la ligne entre tirets

    $ages2 = explode('-', $chaine);
    debug($ages2);
    // affiche sous forme tab avec index

    $ages['Mic'] = 33;
    $ages['Mic'] = 20;
    $ages['Mic'] = 13;
    debug($ages);

    foreach ($ages as $key => $value) {
        echo $key . ' a ' . $value . ' ans.<br>';
    }

    $html = '<ul>';
    foreach ($ages as $clef => $valeur) {
        $html .= '<li>' . $clef . ' a ' . $valeur . ' ans</li>';
    }
    $html .= '</ul>';
    echo $html;

    $planetes = ['Mars', 'Terre', 'Pluton', 'Venus', 'Jupiter'];
    debug($planetes);

    asort($planetes);
    // Par ordre croissant
    debug($planetes);

    asort($ages);
    debug($ages);

    $tab = [
        'voiture' => 'ford',
        'nombre' => [1, 2, 3],
        'plantete' => ['mars', 'terre'],
    ];
    debug($tab['nombre'][0]);

    $tab = [];
    $tab[] = ['A', 'B', 'C'];
    $tab[] = ['S', 'U', 'V'];
    $tab[] = ['O', 'U', 'E', 'I'];

    debug($tab);

    debug($tab[2][2]);
    debug($tab[1][0]);
    debug($tab[0][2]);
    debug($tab[0][2]);
    debug($tab[2][3]);


    ?>
</main>

<?php
include('includes/footer.php');
