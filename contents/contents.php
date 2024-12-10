<?php
class contents{
    public function index_content(){
        ?>
        <h1>Hello World!</h1>
        <p><?php echo "Today is " . date("Y-m-d") . "<br>";
                echo "The time is " . date("h:i:sa");?></p>
        <?php
    }
}