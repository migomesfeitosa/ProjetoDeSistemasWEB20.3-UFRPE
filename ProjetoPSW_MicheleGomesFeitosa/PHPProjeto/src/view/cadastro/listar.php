
    <br>
    <a href="/discipline?create">Nova disciplina</a>
<table>
    <thead>
    <tr>
        <td>Nome</td>
        <td>Prof</td>
        <td>CH</td>
        <td>Ações</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dados as $dado){ ?>
    <tr>
        <td><?php echo $dado->getName() ?></td>
        <td><?php echo $dado->getTeacher() ?></td>
        <td><?php echo $dado->getCh() ?></td>
        <td>
            <a href="/discipline?view&id=<?php echo $dado->getId() ?>">Detalhes</a>
            <a href="/discipline?edit&id=<?php echo $dado->getId() ?>">Editar</a>
            <form action="/discipline?delete&id=<?php echo $dado->getId() ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">Excluir</button>
            </form>
    </tr>
    <?php } ?>
    </tbody>
</table>

