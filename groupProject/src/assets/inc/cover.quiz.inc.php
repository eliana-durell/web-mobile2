<main>
    <h1 class="hidden"><?php echo $h1; ?></h1>
    <p class="message"></p>
    <section class="cover">
        <picture>
            <source media="(min-width: 769px)" srcset="../assets/images/<?php echo $coverImg; ?>">
            <source media="(min-width: 319px)" srcset="../assets/images/mob_<?php echo $coverImg; ?>">
            <img src="../assets/images/<?php echo $coverImg; ?>" alt="<?php echo $coverAlt; ?>">
        </picture>
        <button class="start" onclick="startQuiz()">Start</button>
    </section>