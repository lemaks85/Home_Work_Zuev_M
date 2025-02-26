<?php

namespace App\Database;

use App\Application;
use PDO;

class SQLite extends Db
{
    private Application $app;
    
    public function __construct(Application $app)
    {
        $this->app = $app;
        parent::__construct(
            'sqlite:' . $this->app->env('SQLITE_DATABASE'),
            null,
            null,
            array(PDO::ATTR_PERSISTENT => true)
        );
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}