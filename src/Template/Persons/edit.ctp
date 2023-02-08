<section>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-12">
                <h1>Перепись</h1>
                <?= /** @var TYPE_NAME $person */
                $this->Form->create($person); ?>
                <div>
                    <label for="name"><b>Номер (название):</b></label>
                    <input name="name" type="text" value=""
                           class="form-control"
                           placeholder="Ном" autocomplete="off" required>
                </div>
                <br>
<!--                --><?//= $this->Form->control('name',
//                    ['label' => 'Имя', 'class' => 'form-control', 'required' => true, 'type' => 'text',
//                        'placeholder' => 'Имя']); ?>
<!--                <br>-->
                <?= $this->Form->control('age',
                    ['label' => 'Возраст', 'class' => 'form-control', 'required' => true, 'type' => 'numbers',
                        'placeholder' => 'Возраст']); ?>
                <br>
                <?= $this->Form->button(__('Изменить'), ['class' => 'btn btn-success']); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>