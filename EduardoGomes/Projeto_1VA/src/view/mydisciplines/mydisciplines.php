<?php

use Projeto_1VA\src\model\teacher\dao\TeacherDAO;
use Projeto_1VA\src\utils\Utils;

include __DIR__ ."../../template/header.php";

$teacherDao = TeacherDAO::getInstance();
$user = $_SESSION['logged_user'];
$teachers = $teacherDao->findByMe();

?>
<head>
    <link rel="stylesheet" href="/styles/mydisciplines.css">
</head>

<body id="page-body">

<div id="container">

    <main>

        <?php if(sizeof($teachers)==0) : ?>
            <p class="no-results">Você ainda não é um professor</p>
        <?php else : ?>
            <?php for ($i=0; $i < sizeof($teachers); $i++) : ?>
            <article class="teacher-item">
                <header>
                    <img
                        src="<?=$teachers[$i]->getAvatar()?>" 
                        alt="<?=$user->getName()?>">
                    <div>
                        <strong><?=$user->getName()?></strong>
                        <h2><?= Utils::convertTimeFormat($teachers[$i]->getTimeFrom())?> - <?= Utils::convertTimeFormat($teachers[$i]->getTimeTo())?></h2>
                        <h2><?= $teachers[$i]->getWeekday()?></h2>
                        <span><?=$teachers[$i]->getDiscipline()?></span>
                    </div>
                </header>
                
                <div class="div-bio">
                    <p><?=$teachers[$i]->getBiography()?></p>
                </div>
            
                <footer>
                    <p>Preço/hora<strong>R$ <?=$teachers[$i]->getCost()?></strong></p>

                    <div class="div-buttons">
                        <a href="/mydisciplines?edit&id=<?=$teachers[$i]->getId()?>">
                            <img src="/icons/update.svg" alt="update">
                        </a>

                        <a href="/mydisciplines?delete&id=<?=$teachers[$i]->getId()?>">
                            <img src="/icons/delete.svg" alt="delete">
                        </a>
                    </div>
                </footer>
            </article>

            <?php endfor ?>
        
        <?php endif ?>

    </main>

</div>


</body>