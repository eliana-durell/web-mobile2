<div class="question hidden">
    <h2>
        <?php 
            echo $question; 
            if ($questionType === 'checkbox') echo ' (select all that applies)';
        ?>
    </h2>
    <?php
        if ($questionType === 'text') {
            for ($i = 0, $l = count($textLabels); $i < $l; $i++) {
                require($path . 'src/assets/inc/text.inc.php');
            }
        } else {
            for ($i = 0, $l = count($options); $i < $l; $i++) {
                require($path . 'src/assets/inc/option.inc.php');
            }
        }
    ?>
    <button class="check" onclick="checkAnswer('<?php echo $questionType; ?>')">Check</button>
</div>