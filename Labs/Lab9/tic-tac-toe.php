<?php

session_start();

if(!isset($_SESSION["game"]) || $_SESSION["game"] == null)
    $_SESSION["game"] = new Logic();
$game = $_SESSION["game"];

$message = "";

if(isset($_POST["action"])){
    switch($_POST["action"]){
        case "set":
            if($game->getState() != 0){
                if($game->getState() == 3)
                  $message = 'Draw! Press "Restart" for a new game.';
                else
                    $message = 'Player "' .
                        ($game->getState() == 1 ? "X" : "O") .
                        '" win! Click "Restart" for a new game.';
                break;
            }
            if(!$game->set($_POST["x"], $_POST["y"]))
                $message = 'This cell is already taken!';
            if($game->getState() != 0)
                $message = 'Player "' .
                    ($game->getState() == 1 ? "X" : "O") .
                    '" win! Click "Restart" for a new game.';
            if($game->getState() == 3)
                $message = 'Draw! Press "Restart" for a new game.';
            break;
        case "restart":
            $game->restart();
            break;
    }
}

class Display{
    public static function statusBar(Logic $game){
        echo "Current player: " . ($game->getPlayer() == 1 ? "X" : "O");
    }
    public static function gameGrid(Logic $game){
        echo '<table border = "1" cellspacing="0" cellpadding="0">';
        foreach($game->getField() as $y => $row){
            echo '<tr>';
            foreach($row as $x => $column){
                echo '<td>';
                echo '<form method="post" style="margin: 0;">';
                echo '<input type="hidden" name="action" value="set">';
                echo '<input type="hidden" name="x" value="'.$x.'">';
                echo '<input type="hidden" name="y" value="'.$y.'">';
                echo '<input type="submit" value="' .
                    ($column == 1 ? "X" : ($column == 2 ? "O" : " ")).
                    '" style="width: 50px;height:50px;margin:0px;"/>';
                echo '</form>';
                echo '</td>';
            }
            echo '</tr>';
        }
    }
    public static function restart(){
        echo '<form method="post" style="margin: 0;">';
        echo '<input type="hidden" name="action" value="restart">';
        echo '<input type="submit" value="Restart"/>';
        echo '<br><br>';
        echo '</form>';
    }
}

class Logic{
    private $field;
    private $player;

    public function __construct(){
        $this->restart();
    }

    public function restart(){
        $this->field = [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]
        ];
        $this->player = 1;
    }

    public function set(int $x, int $y): bool{
        if($x < 0 || $x > 2 || $y < 0 || $y > 2)
            return false;
        if($this->field[$y][$x] != 0)
            return false;
        $this->field[$y][$x] = $this->player;
        $this->player = $this->player == 1 ? 2 : 1;
        return true;
    }

    public function getField(): array{
        return $this->field;
    }

    public function getState(): int{
        if($this->isWinner(1))
            return 1;
        if($this->isWinner(2))
            return 2;
        if($this->getFreeCells() == 0)
            return 3;
        return 0;
    }

    public function getPlayer(): int{
        return $this->player;
    }

    private function getFreeCells(): int{
        $count = 0;
        foreach($this->field as $row)
            foreach($row as $column)
                if($column == 0)
                    $count++;
        return $count;
    }

    private function isWinner(int $player): bool{
        return
            (($this->field[0][0] == $player && $this->field[0][1] == $player && $this->field[0][2] == $player)
                ||
                ($this->field[1][0] == $player && $this->field[1][1] == $player && $this->field[1][2] == $player)
                ||
                ($this->field[2][0] == $player && $this->field[2][1] == $player && $this->field[2][2] == $player))
            ||
            (($this->field[0][0] == $player && $this->field[1][0] == $player && $this->field[2][0] == $player)
                ||
                ($this->field[0][1] == $player && $this->field[1][1] == $player && $this->field[2][1] == $player)
                ||
                ($this->field[0][2] == $player && $this->field[1][2] == $player && $this->field[2][2] == $player))
            ||
            (($this->field[0][0] == $player && $this->field[1][1] == $player && $this->field[2][2] == $player)
                ||
                ($this->field[0][2] == $player && $this->field[1][1] == $player && $this->field[2][0] == $player));
    }
}

if($message != "")
    echo "Message: " . $message . "<br>";
Display::statusBar($game);
Display::restart();
Display::gameGrid($game);