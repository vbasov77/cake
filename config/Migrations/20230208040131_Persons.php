<?php
use Migrations\AbstractMigration;

class Persons extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('persons', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'limit' => 5
        ]);
        $table->addColumn('name', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        $table->addColumn('age', 'integer', [
            'limit' => 3,
            'null' => false,
        ]);
        $table->addPrimaryKey("id");
        $table->create();
    }
}
