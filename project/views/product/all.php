
<h1>Продукты</h1>
<ul>
    <?php foreach ($arrs as $arr): ?>
    <h1>Продукт "<?php echo $arr['name'] ?>"  из категории "<?php echo $arr['category'] ?>"</h1>
        <p>
            Цена <?php echo $arr['price'] ?> количество <?php echo $arr['quantity'] ?>
        </p>
        <p>
            Стоимость <?php echo $arr['price']* $arr['quantity'] ?>
        </p>
    <?php endforeach; ?>
</ul>
