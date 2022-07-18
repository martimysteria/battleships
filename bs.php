<?php

echo 'Battleships'. "\n";

$human_board = array();
$dimension1 = array('a','b','c','d','e','f','g','h','j','k');
$dimension2 = 10;

//create and display gameboard for human player
for($i=1;$i < 10;$i++){
	echo $i . '	';
	foreach($dimension1 as $field){
		$key = $i . $field;
		
		$human_board[$key] = '0';
		echo $human_board[$key]. ' ';	
	}

	echo "\n";

}

$computer_board = $human_board;

//var_dump($computer_board);


//create computer ships 

//first 4blocks ship
$computer_board['b3']='X';
$computer_board['b4']='X';
$computer_board['b5']='X';
$computer_board['b6']='X';

printMatrix($dimension1,$computer_board);




echo 'display gameboard' . "\n";

//var_dump($computer);

// while(readline('uesite novi polozaj') !== 'q'){
// 	echo " \n unesite novi znak \n";
// }
// echo 'poydrav';

function printMatrix($dimension1,$human_board){
		foreach($human_board as $key => $value){
			echo $value;	
		}

		for($i=1;$i<10;$i++){
			foreach($human_board as $key => $value){
				echo $value[$I];	
			}
	




		}
	
		echo "\n";
	
	}
	
?>
