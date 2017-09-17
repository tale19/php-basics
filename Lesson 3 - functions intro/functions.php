<?php

function checkIfAllowedInTheClub($age) {
	if ($age >= 21) {
		echo "You are allowed to come in. Welcome!";
	} else {
		echo "You are not allowed. Go home, kid.";
	}
}