<?php
use yii\db\Migration;

class m200928_125912_create_problems_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%problems}}', [
            
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'address' => $this->string(100)->notNull(),
            'phonenum' => $this->integer(20)->Null(),
            'info' => $this->text()->Null(),
        
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%problems}}');
    }
    
} // End
