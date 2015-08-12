<?php
    class RockPaperScissors
    {
        function playGame($user1, $user2)
        {
            $player1 = strtolower($user1);
            $player2 = strtolower($user2);
            $player_options = array("rock", "paper", "scissors");

            if ($user1 == '' && $user2 == '') {
                return "Invalid input! Try again!";
            } elseif ($user1 == '') {
                $player1 = $player_options[rand(0,2)];
            } elseif ($user2 == '') {
                $player2 = $player_options[rand(0,2)];
            } else {
                $player1 = strtolower($user1);
                $player2 = strtolower($user2);
                if ((in_array($player1, $player_options)) && (in_array($player2, $player_options))) {
                    $player1 = $player1;
                    $player2 = $player2;
                } else {
                    return "Invalid input! Try again!";
                }
            }







            //
            //
            // if ((in_array($player1, $player_options)) && (in_array($player2, $player_options))) {
            //

                // Both players enter the same input
                if ($player1 == $player2) {
                    return "You have a tie!";

                // Player1 chooses rock
                } elseif ($player1 == "rock") {
                    if ($player2 == "paper") {
                        return "Player two wins!";
                    }
                    else {
                        // scissors
                        return "Player one wins!";
                    }

                // Player1 chooses paper
                } elseif ($player1 == "paper") {
                    if ($player2 == "scissors") {
                        return "Player two wins!";
                    //$player2 == "rock"
                    } else {
                        return "Player two wins!";
                    }

                // Player1 chooses scissors
                } else {
                    if ($player2 == "rock") {
                        return "Player two wins!";
                    //$player2 chooses paper
                    } else {
                        return "Player one wins!";
                    }

                }

        }

        //     } else {
        //         return "Invalid input! Try again!";
        //     }
        // }
    }
 ?>
