<?php include __DIR__."./../template/header.php" ?>
        <ul class="polls">
        <?php if (sizeof($polls) > 0) {?>
        <?php foreach ($polls as $poll){ ?>
            <li>
            <label for=""><b><?php echo strval($poll->getUserId())?></b></label>
            </div>
            <div class="question">
                <span id=<?php echo "question".strval($poll->getId())?>><?php echo $poll->getQuestion()?></span>
            </div>
            <div class="option-div">
            <?php foreach ($poll->getOptions() as $option) {?>
                <input type="radio" name=<?php echo "poll".strval($poll->getId())?> id=<?php echo "option".strval($option->getId())?> 
                poll_id=<?php echo strval($poll->getId())?>
                option_id=<?php echo strval($option->getId())?>>
                <label id=<?php echo "label".strval($option->getId())?> for=<?php echo "option".strval($option->getId())?>>
                <?php echo $option->getText()?></label>
                <progress value="0" max="100" id=<?php echo "progress".strval($option->getId())?>></progress>
            </div>
            <?php } ?>
            <div class="description">
                <span id=<?php echo "span".strval($poll->getId())?>>Total de votos: <b><?php echo $poll->getVoteCount()?></b></span>
            </div>
            </li>
        <?php } ?>
        </ul>
        <?php } else { echo "<h1>Nada para mostrar aqui</h1>" ;}?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="http://localhost:8080/js/votacao.js"></script>

<?php include __DIR__."./../template/footer.php" ?>