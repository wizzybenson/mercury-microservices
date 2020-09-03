<?php

use Phinx\Migration\AbstractMigration;

class UsersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users', ['id' => 'user_id', 'signed' => false]);
        $table->addColumn('email', 'string', ['null' => false, 'limit' => 255])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('first_name', 'string', ['limit' => 255])
            ->addColumn('last_name', 'string', ['limit' => 255])
            ->addIndex('email', ['unique' => true])
            ->addTimestamps()
            ->create();
    }
}
