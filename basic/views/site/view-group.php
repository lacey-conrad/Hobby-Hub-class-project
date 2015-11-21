<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php if(count($myGroups)>0) { ?>
<div>
    
    <h1>My Groups</h1>
    <ul class="groups">
    <?php foreach ($myGroups as $group): ?>
        <li><div class="group">
                <div style="text-align:center;">
                    <h4><?= Html::encode("{$group->groupname}") ?></h4>
                    <p>Created on <?= Html::encode("{$group->create_date}") ?></p>
                </div>
                <div style="text-align: center;">
                    <?= Html::submitButton('Delete', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>

<?php }?>

<?php if(count($myGroups)>0) { ?>
<div>
    
    <h1>Joined Groups</h1>
    <ul class="groups">
    <?php foreach ($myGroups as $group): ?>
        <li><div class="group">
                <div style="text-align:center;">
                    <h4><?= Html::encode("{$group->groupname}") ?></h4>
                    <p>Created on <?= Html::encode("{$group->create_date}") ?></p>
                </div>
                <div style="text-align: center;">
                    <?= Html::submitButton('Delete', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>

<?php }?>