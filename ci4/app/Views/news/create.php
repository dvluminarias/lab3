<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

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
</a> ==== 
<a style=
	"color: red; 
	font-size: 30px; 
	font-weight: 700; 
	font-family: Century Gothic;
	margin-left: 10px;
	border-bottom: 5px solid black;
	margin-bottom: 10px;" 
	href="/lab3/ci4/public/news">
	Go to Guest Log
</a>
<p></p><br>
<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="email">Email:</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="comment">Comment:</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>