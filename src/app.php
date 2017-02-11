<?php

require_once 'Dictionary.php';
$dictionary = new MidoriKocak\Dictionary("Nesne Yönelimli Programlama Sözlüğü");
echo $dictionary->getTitle();
$dictionary->addEntry("nesne", "Nesne yönelimli programlamada bir sınıf örneği. Bir nesne, verilere etki eden verileri ve yöntemleri içerir ve ayrı bir varlık olarak değerlendirilir.");
$dictionary->addEntry("şey", "Düşünen bilincin konusu olabilen, gerçekte var olmayıp da yalnızca düşünülmüş olan her şey.");
print_r($dictionary->getEntries());
echo $dictionary->getEntry('şey');
