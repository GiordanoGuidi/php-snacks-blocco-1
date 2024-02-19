<?php 

$matches = [

    [
        'home_team'=>[
            'name'=> 'roma',
            'points'=> 70,
        ],

        'away_team'=>[
            'name'=> 'lazio',
            'points'=> 63,
        ]

    ],
    [
        'home_team'=>[
            'name'=> 'monza',
            'points'=> 45,
        ],

        'away_team'=>[
            'name'=> 'milan',
            'points'=> 65,
        ]
    
    ],
    [
        'home_team'=>[
            'name'=> 'atalanta',
            'points'=> 60,
        ],

        'away_team'=>[
            'name'=> 'fiorentina',
            'points'=> 54,
        ]

    ],
    [
        'home_team'=>[
            'name'=> 'cagliari',
            'points'=> 40,
        ],

        'away_team'=>[
            'name'=> 'salernitana',
            'points'=> 45,
        ]
    
    ],
];

foreach ($matches as $match){
    var_dump($match['home_team']);
    var_dump($match['away_team']);
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach($matches as $match) {?>
                <li>
                    <?= $match['home_team']['name']. ' - ', $match['away_team']['name']. ' | ', 
                    $match['home_team']['points']. ' - ', $match['away_team']['points'] ?>
                </li>
            <?php }?>           
        </ul>
        
        
</body>
</html>