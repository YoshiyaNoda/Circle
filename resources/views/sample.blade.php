<p>
<?php
echo($data ?? 'nothing')
?>
</p>

<h1>Hello, World!!</h1>

<form action="/sample_post" method="post">
    {{csrf_field()}}
    <input type="textarea" name="confirm" value="">
    <input type="submit" value="送信">
</form>