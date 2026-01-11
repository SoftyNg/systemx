<?php
/**
 * User: Systemx
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0001_tb_systemx_user {
    public function up()
    {
        $db = \systemx\SystemxCore\Systemx::$app->db;
        $SQL = "CREATE TABLE  tb_systemx_user(
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                user_token VARCHAR(255) NOT NULL,
                status TINYINT DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \systemx\SystemxCore\Systemx::$app->db;
        $SQL = "DROP TABLE tb_systemx_user;";
        $db->pdo->exec($SQL);
    }
}