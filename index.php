<?php 

$calendar = [

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
]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <p>
            <?php var_dump($matches_calendar)?>
        </p>
</body>
</html>