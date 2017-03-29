<p class="entry">
    <h3><?= $entry->getKey() ?></h3>
    <ol class="values">

        <?php foreach ($entry->getValues() as $value): ?>

        <li><?= $value ?></li>

        <?php endforeach; ?>

    </ol>
</p>
