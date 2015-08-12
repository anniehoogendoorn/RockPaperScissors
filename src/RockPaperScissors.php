<?php
    class RockPaperScissors
    {
        function playGame($user1, $user2)
        {
            if (strtolower($user1) == strtolower($user2)) {
                return "You have a tie!";
            }
            var_dump($user1);
        }
    }
 ?>
