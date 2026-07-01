<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateListingImagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'listing_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => 500,
            ],
            'sort_order' => [
                'type'    => 'INT',
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('listing_id');
        $this->forge->addForeignKey('listing_id', 'listings', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('listing_images');
    }

    public function down()
    {
        $this->forge->dropTable('listing_images');
    }
}
