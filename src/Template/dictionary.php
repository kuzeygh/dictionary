<p class="dictionary">
    <h2><?= $dictionary->getTitle() ?></h2>

    <?php foreach ($dictionary->getEntries() as $entry): ?>

    <p class="entry">
        <h3><?= $entry->getKey() ?></h3>
        <ol class="values">

            <?php foreach ($entry->getValues() as $value): ?>

            <li><?= $value ?></li>

            <?php endforeach; ?>

        </ol>
    </p>

    <?php endforeach; ?>

</p>

