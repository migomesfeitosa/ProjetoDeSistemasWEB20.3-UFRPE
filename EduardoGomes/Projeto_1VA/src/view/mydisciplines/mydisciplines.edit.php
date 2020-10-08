<?php include __DIR__ ."../../template/header.php";

use Projeto_1VA\src\utils\Utils;

?>

<head>
    <link rel="stylesheet" href="/styles/teacher.css">
    <link rel="stylesheet" href="/styles/forms.css">
</head>

<main>
    <form action="/mydisciplines?update&id=<?=$returnTeacher->getId()?>" id="update-teacher" method="POST">
        <fieldset>
            <legend>Seus dados</legend>
            <div class="input-block">
                <label for="avatar">Link da sua foto <small>(Comece com https://)</small></label>
                <input id ="avatar" name="avatar" type="url" required value="<?=$returnTeacher->getAvatar()?>">
            </div>
            <div class="input-block">
                <label for="whatsapp">Whatsapp <small>(Somente números (DD))</small></label>
                <input id ="whatsapp" name="whatsapp" type="number" required value="<?=$returnTeacher->getWhatsapp()?>">
            </div>
            <div class="textarea-block">
                <label for="bio">Biografia</label>
                <textarea name="biography" id="biography" required ><?=$returnTeacher->getBiography()?></textarea>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Sobre a aula</legend>
            <div class="select-block">
                <label for="discipline">matéria</label>
                <select name="discipline" id="discipline" required>
                        
                    <option value="">Selecione uma opçao</option>
                        <?php for ($i=0; $i < sizeof(Utils::$disciplines); $i++) : ?>
                            <option value="<?=Utils::$disciplines[$i]?>" <?=(Utils::$disciplines[$i] == $returnTeacher->getDiscipline())? 'selected' : ''?>><?= Utils::$disciplines[$i]?></option>
                         <?php endfor ?>

                </select>
            </div>
            <div class="input-block">
                <label for="cost">Custo da sua hora/aula<small> (R$)</small></label>
                <input id="cost" name="cost" type="number" required value="<?=$returnTeacher->getCost()?>">
            </div>
        </fieldset>

        <fieldset id="schedule-items">
            <legend>Horário disponível</legend>

            <div class="schedule-item">
                <div class="select-block">
                    <label for="weekday">Dia da semana</label>
                    <select name="weekday" required>

                        <option value="">Selecione uma opçao</option>
                            <?php for ($i=0; $i < sizeof(Utils::$weekdays); $i++) : ?>
                                <option value=<?=Utils::$weekdays[$i]?> <?php if(Utils::$weekdays[$i] == $returnTeacher->getWeekday())echo "selected"?> ><?= Utils::$weekdays[$i]?></option>
                            <?php endfor ?>

                    </select>
                </div>
                <div class="input-block">
                    <label for="time_from">Das</label>
                    <input name="time_from" type="time" required value="<?=Utils::convertTimeFormat($returnTeacher->getTimeFrom())?>">
                </div>

                <div class="input-block">
                    <label for="time_to">Até</label>
                    <input name="time_to" type="time" required value="<?=Utils::convertTimeFormat($returnTeacher->getTimeTo())?>">
                </div>
            </div>

        </fieldset>
    </form>

    <footer>
        <p>
            Importante! <br> Preencha todos os dados
        </p>
        <button type="submit" form="update-teacher">Salvar</button>
    </footer>

</main>