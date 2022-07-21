<?php $contacts = ["Pepe", "Antonio", "Nate"]; ?>

<!-- Para imprimir valores dentro de un html que es del php -->
<!-- se abre el tag con ?= en lugar de ?php -->
<!-- Los condicionales en php muy parecidos a c++ -->

<?php foreach ($contacts as $contact) { ?>
  <div><?= $contact ?></div>
<?php } ?>
