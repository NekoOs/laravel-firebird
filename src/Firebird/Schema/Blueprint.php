<?php

namespace Firebird\Schema;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

/**
 * Descripcion de Blueprint
 *
 * @author Neder Alfonso Fandiño Andrade <neafan@hotmail.com>
 */
class Blueprint extends BaseBlueprint {

    public function __construct($table, \Closure $callback = null) {
        parent::__construct($table, $callback);
    }
    
    public function increments($column) {
        $this->primary($column);
        return parent::increments($column);
    }
    
    
}
