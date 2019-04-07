<?php

/**
 * PolygonOutputter.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

class PolygonOutputter {

    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

    /**
     * [JSON : returns the results in JSON format]
     *
     * @return String $value : json encoded value
     */
    public function JSON() {
        return json_encode($this->value);
    }

    /**
     * [HTML : returns the results in HTML format]
     *
     * @return String $value : html version of output
     */
    public function HTML() {
        return 'Value is: <b>'.$this->value.'</b>';
    }
}