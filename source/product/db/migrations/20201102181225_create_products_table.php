<?php

use Phinx\Migration\AbstractMigration;

class CreateProductsTable extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('products', ['id' => 'product_id', 'signed' => false]);
        $table->addColumn('product_code', 'string', ['null' => false, 'limit' => 255])
            ->addColumn('status', 'string', ['limit' => 255])
            ->addColumn('merchant_id', 'string', ['limit' => 255])
            ->addColumn('product_type', 'string', ['limit' => 255, 'default' => 'P'])
            ->addTimestamps()
            ->create();
    }
}
