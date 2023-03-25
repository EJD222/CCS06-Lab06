<?php
// HTML Chess Symbols Unicode
// URL: https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode
// Verify if these Unicodes are correct, make the adjustments if necessary

$pieces = [
    'black' => [
        'king' => '&#9818',
        'queen' => '&#9819',
        'rook' => '&#9820',
        'bishop' => '&#9821',
        'knight' => '&#9822',
        'pawn' => '&#9823'
    ],
    'white' => [
        'king' => '&#9812',
        'queen' => '&#9813',
        'rook' => '&#9814',
        'bishop' => '&#9815',
        'knight' => '&#9816',
        'pawn' => '&#9817'
    ]
];
?>

<!DOCTYPE html>
<!-- INSERT THE CHESSBOARD HERE -->
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Chessboard</title>
        
    <style type="text/css">
        .parent {
            display: flex;
            align-items: center; /* Centers Vertically */
            height: 100vh; /* Sets the height of the container to the height of the viewport */
        }

        .child {
            margin: 0 auto;
        }

        table {
			border-collapse: collapse;
            width: 640px;
            height: 640px;
            border: 25px solid black;
		} 

        td {
            border: 2px solid black;
            width: 100px;
            height: 70px;
            text-align: center;
            font-size: 40px;
        } 

        .white {
			background-color: #FFFFFF;
		}

		.black {
			background-color: #808080;
		}
    </style>
</head>

<body>
    <div class ="parent">
        <div class ="child">
        <table>
            <?php
                //Create Rows
                for ($row = 1; $row <=8; $row++) {
                    echo '<tr>';

                    //Create Columns and Color
                    for ($col = 1; $col <=8; $col++) {
                        $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
                        /*? — if-else statement
                        Expression before the ? — condition being evaluated
                        True — Condition between the ? and the : is returned
                        False — Expression after the : is returned */
                        echo '<td class="' . $color . '">';
                        
                        //Adding Chess Pieces 

                        //Pawn
                        if ($row == 2 || $row == 7) {
                            echo $pieces[$row == 2 ? 'black' : 'white']['pawn'];
                        } elseif (($row == 1 || $row == 8) && ($col == 1 || $col == 8)) {
                            echo $pieces[$row == 1 ? 'black' : 'white']['rook'];
                        } elseif (($row == 1 || $row == 8) && ($col == 2 || $col == 7)) {
                            echo $pieces[$row == 1 ? 'black' : 'white']['knight'];
                        } elseif (($row == 1 || $row == 8) && ($col == 3 || $col == 6)) {
                            echo $pieces[$row == 1 ? 'black' : 'white']['bishop'];
                        } else if ($row == 1 && $col == 4) {
                            echo $pieces['black']['queen'];
                        } else if ($row == 1 && $col == 5) {
                            echo $pieces['black']['king'];
                        } else if ($row == 8 && $col == 4) {
                            echo $pieces['white']['queen'];
                        } else if ($row == 8 && $col == 5) {
                            echo $pieces['white']['king'];
                        }

                        echo '</td>';
                    }     
                }
            ?>
        </table>  
    </div>     
    </div>
</body>
</html>