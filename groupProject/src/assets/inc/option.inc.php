<div>
    <input 
        type="<?php echo $questionType; ?>" 
        id="<?php echo $options[$i]['id'] ?>" 
        name="<?php echo $options[$i]['name'] ?>" 
        value="<?php echo $options[$i]['value'] ?>"
    >
    <label for="<?php echo $options[$i]['id'] ?>"><?php echo $options[$i]['label'] ?></label>
</div>