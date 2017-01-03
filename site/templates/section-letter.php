<?php snippet('header') ?>

    <section class="n-letter">

      <header class="n-letter--title">
        <h1><?= $page->title()->html() ?></h1>
      </header>

      <div class="n-letter--description">
      <?= $page->text()->kt() ?>
      </div>

      <footer class="n-letter--subscribe">
      <!-- Subscription information goes here -->
      </footer>

    </section>

<?php snippet('footer') ?>
