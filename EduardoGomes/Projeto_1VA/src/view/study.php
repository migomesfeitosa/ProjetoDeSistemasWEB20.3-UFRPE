<?php

use Projeto_1VA\src\model\teacher\dao\TeacherDAO;
use Projeto_1VA\src\model\user\dao\UserDAO;
use Projeto_1VA\src\utils\Utils;

include __DIR__ ."/template/header.php";

$teacherDao = TeacherDAO::getInstance();
$userDao = UserDAO::getInstance();

$teachers = $teacherDao->findAll();

?>
<head>
    <link rel="stylesheet" href="/styles/study.css">
</head>

<body id="page-body">

<div id="container">

    <main>

        <?php if(sizeof($teachers)==0) : ?>
            <p class="no-results">Nenhum professor encontrado</p>
        <?php else : ?>
            <?php for ($i=0; $i < sizeof($teachers); $i++) : ?>
            <article class="teacher-item">
                <header>
                    <img 
                        <?php $teacherUser = $userDao->findById($teachers[$i]->getUserId())?>

                        src="<?=$teachers[$i]->getAvatar()?>" 
                        alt="<?=$teacherUser->getName()?>">
                    <div>
                        <strong><?=$teacherUser->getName()?></strong>
                        <h2><?= Utils::convertTimeFormat($teachers[$i]->getTimeFrom())?> - <?= Utils::convertTimeFormat($teachers[$i]->getTimeTo())?></h2>
                        <h2><?= $teachers[$i]->getWeekday()?></h2>
                        <span><?=$teachers[$i]->getDiscipline()?></span>
                    </div>
                </header>
                
                <div class="div-bio">
                    <p><?=$teachers[$i]->getBiography()?></p>
                </div>
            
                <footer>
                    <p>Preço/hora<strong>R$ <?=$teachers[$i]->getCost()?></strong>
                    </p>
                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?=$teachers[$i]->getWhatsapp()?>&text=Tenho interesse na sua aula de <?=$teachers[$i]->getDiscipline()?>, <?=$teacherUser->getName()?>"  class="button" target="_blank">
                        <img src="/icons/whatsapp.svg" alt="Whatsapp">Entrar em contato
                    </a>
                </footer>
            </article>

            <?php endfor ?>
        
        <?php endif ?>

</div>


</body>