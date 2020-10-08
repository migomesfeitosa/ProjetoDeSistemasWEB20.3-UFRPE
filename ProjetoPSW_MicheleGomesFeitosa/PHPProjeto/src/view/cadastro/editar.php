
    <br>
    <form action="/discipline?update&id=<?php echo $dado->getId() ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="<?php echo $dado->getName() ?>">
        <input type="text" name="teacher" value="<?php echo $dado->getTeacher() ?>">
        <input type="text" name="ch" value="<?php echo $dado->getCh() ?>">
        <button>Alterar</button>
    </form>

