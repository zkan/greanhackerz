<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Grean Hackerz</title>
</head>
<body>

<div id='container'>
    <b>Grean Hackerz</b><br />
    <?=anchor('item', 'Add new item');?>
    <div id='body'>
        <? $count = 1; ?>
        <? foreach($query->result() as $row): ?>
            <div class='item'>
                <div class='numbering'><?=$count?></div>
                <div class='link'><a href='<?=$row->link?>'><?=$row->name?></a></div> 
                <div class='description'><?=$row->description?></div>
                <div class='taglist'>Tag1 Tag2 Tag3</div>
            </div>
        <? $count++; ?>
        <? endforeach; ?>
    </div>
</div>


<!--div id="container">
	<h1>Welcome to CodeIgniter! - ยินดีต้อนรับ</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div-->

</body>
</html>
