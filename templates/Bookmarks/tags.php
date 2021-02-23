<h1>
    Bookmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
<?php foreach ($bookmarks as $bookmark): ?>
    <article>
        <!-- リンクを作成するためにHtmlHelperを使用 -->
        <h4><?= $this->Html->link($bookmark->title, $bookmark->url) ?></h4>
        <small><?= h($bookmark->url) ?></small>

        <!-- テキストを整形するためにTextHelperを使用 -->
        <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
    </article>
<?php endforeach ?>
</section>