<h2><?= esc($title) ?> - Guest Log</h2>

<a style=
	"color: yellow; 
	font-size: 30px; 
	font-weight: 700; 
	font-family: Century Gothic;
	margin-left: 10px;
	border-bottom: 5px solid black;
	margin-bottom: 10px;" 
	href="/lab3/ci4/public/home">
	Back to Personal Profile Page
</a>==== 
<a style=
	"color: red; 
	font-size: 30px; 
	font-weight: 700; 
	font-family: Century Gothic;
	margin-left: 10px;
	border-bottom: 5px solid black;
	margin-bottom: 10px;" 
	href="/lab3/ci4/public/news/create">
	Go to Guest Form
</a>
<p></p><br>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['email']) ?></h3>

        <div class="main">
            <?= esc($news_item['comment']) ?>
        </div>
        <p><a style="color: turquoise;" href="/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p><br>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
