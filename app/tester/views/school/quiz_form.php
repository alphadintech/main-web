<div id="page-wrap">

    <h1>Final Quiz for section</h1>

    <?php

    use yii\bootstrap\ActiveForm;

    $form = ActiveForm::begin(); ?>

        <ol>
            <?php foreach ($questions as $question): ?>
                <li>

                    <h3><?=$question->question?></h3>
                        <?php
                        $answers = $question->schoolAnswers;
                        $answers = (array)$answers;
                        shuffle($answers);
                        foreach ($answers as $index=>$answer):
                        ?>
                    <div>
                        <input type="radio" name="questions[<?=$question->id?>]"  value="<?=$answer->id?>"/>
                        <label for="questions[<?=$question->id?>]"><?=$index ." :: ".$answer->text?></label>
                    </div>
                        <?php endforeach; ?>

                </li>
            <?php endforeach; ?>
        </ol>

        <input type="submit" name="submit" value="Submit Quiz"/>

    <?php ActiveForm::end()?>

</div>