<div>
<?php
    if(isset($data)) {
        foreach($data as $d) {
            echo("<p>".$d->name."</p>");
        }
    }
?>
</div>

<h1>Hello, World!!</h1>

<form action="/sample_post" method="post">
    {{csrf_field()}}
    <input type="textarea" name="confirm" value="">
    <input type="submit" value="送信">
</form>