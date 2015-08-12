<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_playGame_sameInput()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $user1 = "rock";
            $user2 = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($user1, $user2);

            //Assert
            $this->assertEquals("You have a tie!", $result);
        }

        function test_playGame_sameInputCaps()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $user1 = "Rock";
            $user2 = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($user1, $user2);

            //Assert
            $this->assertEquals("You have a tie!", $result);

        }

        function test_playGame_differentInputCap()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $user1 = "rock";
            $user2 = "Paper";

            //Act
            $result = $test_RockPaperScissors->playGame($user1, $user2);

            //Assert
            $this->assertEquals("Player two wins!", $result);
        }

        function test_playGame_differentInput()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $user1 = "sciSSors";
            $user2 = "PAPER";

            //Act
            $result = $test_RockPaperScissors->playGame($user1, $user2);

            //Assert
            $this->assertEquals("Player one wins!", $result);
        }

        function test_playGame_invalidInput()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $user1 = "rock";
            $user2 = "cat";

            //Act
            $result = $test_RockPaperScissors->playGame($user1, $user2);

            //Assert
            $this->assertEquals("Invalid input! Try again!", $result);
        }
    }
 ?>
