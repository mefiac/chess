<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$countx = 3;
$county = 3;

?>
<div class="site-index">
    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">

    <div style="display: none">

        <div id="12" class="elem 1" value="1">пешка</div>
        <div id="12" class="elem 2" value="2">ферзь</div>
        <div id="12" class="elem 3" value="3">король</div>
    </div>
    <div class="jumbotron">
        <div class="well">
            <p>Фигура <select id="FigureAdd">
                    <option value="1">пешка</option>
                    <option value="2">ферзь</option>
                    <option value="3">король</option>
                </select></p>
            <p>
                <button class="btn" id="ButtonAdd">Добавить фигуру</button>
                <button class="btn" id="save">Сохранить Доску</button>
                <button class="btn" id="ButtonDell">Удалить элемент</button>
                <form action="/" method="get">
                <button class="btn" id="ButtonDell">Загрузить Доску</button>
                </form>
            </p>
        </div>

        <table class="" border="1" id="tab">
            <?php $count = 0;
            for ($i = 0; $i < $countx; $i++) { ?>
                <tr>
                    <?php for ($y = 0; $y < $county; $y++) { ?>
                        <td>
                            <?php if (!empty($figure[$count])) {
                                if ($figure[$count]['name'] == 1) {
                                    ?>
                                    <div id="<?= $figure[$count]['js_id'] ?>" class="elem 1" value="1">пешка</div>
                                <?php } elseif ($figure[$count]['name'] == 2) { ?>
                                    <div id="<?= $figure[$count]['js_id'] ?>" class="elem 2" value="2">ферзь</div>
                                <?php } else { ?>
                                    <div id="<?= $figure[$count]['js_id'] ?>" class="elem 3" value="3">король</div>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <?php $count++;
                    } ?>

                </tr>
            <?php } ?>

        </table>
    </div>

    <script type="text/javascript">

    </script>
</div>
