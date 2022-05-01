<?php

namespace App\Models;

use App\SQLiteModel;

class SQLiteTestModel extends SQLiteModel
{
    const DATABASE = 'TestDB';

    /**
     * Unique instance of this class.
     *
     * @var self|null
     */
    protected static $_uniqueInstance;

    /**
     * Get the unique instance of this class.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (self::$_uniqueInstance == null) self::$_uniqueInstance = new self(self::DATABASE);
        return self::$_uniqueInstance;
    }

    /**
     * Constructor.
     *
     * @param  string  $db  Database name
     * @return void
     */
    protected function __construct(string $db)
    {
        parent::__construct($db);
        $this->_className = basename(__FILE__, '.php');
    }

    /**
     * Query the database.
     *
     * @param  string  $sql    SQL clause
     * @param  array   $bind   Binding variables
     * @return array|integer
     */
    public function query(string $sql, array $bind)
    {
        return $this->_db->query($sql, $bind);
    }
}
