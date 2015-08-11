<?php
class Migration_Add_Users extends CI_Migration
{
    public function up() {
        $this->dbforge->add_field(array(
        	'user_id' => array(
        		'type' => 'INT',
        		'constraint' => 10,
        		'unsigned'=>TRUE,
        		'null'=>FALSE,
        		'auto_increment'=>TRUE
        	),        	'full_name' => array(
        		'type' => 'VARCHAR',
        		'constraint' => 255,
        		'null'=>FALSE,
        		'default'=>''
        	),
        ));
    }
}
