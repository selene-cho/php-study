- html

```php
<?php echo $num ?> = <?=$num?>
```

- index-3.php

```html
<form action="modify.php?num=<?=$num?>" method="post"></form>
```

- modify.php 파일

```php
$num = $_GET["num"];
```

> num를 직접 보내주는 것보다 hidden 으로 보내는게 더 안전!

- index-3.php

```html
<form action="modify.php" method="post">
  <input type="hidden" name="num" value="<?=$num?>" />
</form>
```

- modify.php 파일

```php
  $num = $_POST["num"];
```
