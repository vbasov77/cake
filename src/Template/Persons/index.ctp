<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<?= $this->Html->css(['front.css']) ?>
<section>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-lg-2">
                <div class="wrap">
                    1
                </div>
            </div>
            <div class="col-lg-8">
                <h1>Перепись</h1>
                <?= $this->Form->create(); ?>
                <?= $this->Form->control('name',
                    ['label' => 'Имя', 'class' => 'form-control', 'required' => true, 'type' => 'text',
                        'placeholder' => 'Имя']); ?>
                <br>
                <?= $this->Form->control('age',
                    ['label' => 'Возраст', 'class' => 'form-control', 'required' => true, 'type' => 'numbers',
                        'placeholder' => 'Возраст']); ?>
                <br>
                <?= $this->Form->button(__('Добавить'), ['class' => 'btn btn-success']); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>
<section style="margin-top: 60px">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-2">
                <div class="wrap">
                    2
                </div>
            </div>
            <div class="col-lg-8">
                <? if (!empty(count($persons))): ?>
                    <?php foreach ($persons as $person): ?>
                        <? echo $person->name ?> <? echo $person->age ?>
                        <a href="/edit/<?= $person->id ?>">
                            <i class="fa fa-cog" style="color: #6cb2eb; margin-left: 10px" aria-hidden="true"></i></a>
                        <a href="/delete/<?= $person->id ?>">
                            <i class="fa fa-trash" style="color: red" aria-hidden="true"></i></a>
                        <br>
                    <?php endforeach; ?>
                <? else: ?>
                    Записей не найдено...
                <? endif; ?>
            </div>
        </div>
    </div>
</section>
<section style="margin-top: 60px">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-2">
                <div class="wrap">
                    3
                </div>
            </div>
            <div class="col-lg-8">
                <? if (!empty(count($allAge))): ?>
                    Переписано человек: <?= count($allAge) ?>
                    <br>
                    Общий возраст: <?= array_sum($allAge) ?>
                <? else: ?>
                Записей не найдено...
                <? endif; ?>
            </div>
        </div>
    </div>
</section>