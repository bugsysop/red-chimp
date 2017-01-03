<?php snippet('letter-header') ?>

  <?php foreach($page->builder()->toStructure() as $section): ?>
    <?php snippet('builder/' . $section->_fieldset(), array('data' => $section)) ?>
  <?php endforeach ?>

<?php snippet('letter-footer') ?>
