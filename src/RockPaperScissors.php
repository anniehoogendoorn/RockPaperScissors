<?php
    class RockPaperScissors
    {
        function playGame($user1, $user2)
        {
            $player1 = strtolower($user1);
            $player2 = strtolower($user2);

            // Both players enter the same input
            if ($player1 == $player2) {
                return "You have a tie!";

            // Player1 chooses rock
            } elseif ($player1 = "rock") {
                if ($player2 = "paper") {
                    Something happens
                }
                else {
                    // scissors
                }

            // Player1 chooses paper
            } elseif ($player1 = "paper") {
                Something
            // Player1 chooses scissors
            } else {
                Something

            }
            var_dump($user1);
        }
    }
 ?>
