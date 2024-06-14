<form action="index.php?url=update" method="post">
    <?php foreach ($product as $item=>$value){ ?>
    <p>Id</p>
    <input name="id" value="<?php echo $value['id'] ?>" readonly >
    <p>Name</p>
    <input type="text" name="name" value="<?php echo $value['name'] ?>" >
    <p>Gia</p>
    <input type="number" name="price" value="<?php echo $value['price'] ?>" >
    <p></p>
    <input type="submit" value="Cap Nhat">
    <?php } ?>
</form>