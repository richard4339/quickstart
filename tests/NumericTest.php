<?php

class NumericTest extends PHPUnit_Framework_TestCase
{
    /*
     * Positive arguments
     */
    
    /**
     * toInt(52, 37) = 52
     * Positive argument, failIfNegative implied to be false
     */
    public function testToIntPositiveVarCanBeNegativeImplied() {
        $var = 52;

        $this->assertEquals(toInt($var, 37), 52);
    }

    /**
     * toInt(52, 37, false) = 52
     * Positive argument, failIfNegative explicitly false
     */
    public function testToIntPositiveVarCanBeNegativeExplicit() {
        $var = 52;

        $this->assertEquals(toInt($var, 37, false), 52);
    }

    /**
     * toInt(52, 37, true) = 52
     * Positive argument, failIfNegative explicitly true
     */
    public function testToIntPositiveVarFailIfNegativeExplicit() {
        $var = 52;

        $this->assertEquals(toInt($var, 37, true), 52);
    }
    
    /*
     * Negative arguments
     */

    /**
     * toInt(-1, 37) = -1
     * Negative argument, failIfNegative implied to be false
     */
    public function testToIntNegativeVarCanBeNegativeImplied() {
        $var = -1;

        $this->assertEquals(toInt($var, 37), -1);
    }

    /**
     * toInt(-1, 37, false) = -1
     * Negative argument, failIfNegative explicitly false
     */
    public function testToIntNegativeVarCanBeNegativeExplicit() {
        $var = -1;

        $this->assertEquals(toInt($var, 37, false), -1);
    }

    /**
     * toInt(-1, 37, true) = 37
     * Negative argument, failIfNegative explicitly true
     */
    public function testToIntNegativeVarFailIfNegativeExplicit() {
        $var = -1;

        $this->assertEquals(toInt($var, 37, true), 37);
    }
    
    /*
     * Zero arguments
     */

    /**
     * toInt(0, 37) = 0
     * Zero argument, failIfNegative implied to be false
     */
    public function testToIntZeroVarCanBeNegativeImplied() {
        $var = 0;

        $this->assertEquals(toInt($var, 37), 0);
    }

    /**
     * toInt(0, 37, false) = 0
     * Zero argument, failIfNegative explicitly false
     */
    public function testToIntZeroVarCanBeNegativeExplicit() {
        $var = 0;

        $this->assertEquals(toInt($var, 37, false), 0);
    }

    /**
     * toInt(0, 37, true) = 0
     * Zero argument, failIfNegative explicitly true
     */
    public function testToIntZeroVarFailIfNegativeExplicit() {
        $var = 0;

        $this->assertEquals(toInt($var, 37, true), 0);
    }
    
    /*
     * Null arguments
     */

    /**
     * toInt(null, 37) = 37
     * Null argument, failIfNegative implied to be false
     */
    public function testToIntNullVarCanBeNegativeImplied() {
        $var = null;

        $this->assertEquals(toInt($var, 37), 37);
    }

    /**
     * toInt(null, 37, false) = 37
     * Null argument, failIfNegative explicitly false
     */
    public function testToIntNullVarCanBeNegativeExplicit() {
        $var = null;

        $this->assertEquals(toInt($var, 37, false), 37);
    }

    /**
     * toInt(null, 37, true) = 37
     * Null argument, failIfNegative explicitly true
     */
    public function testToIntNullVarFailIfNegativeExplicit() {
        $var = null;

        $this->assertEquals(toInt($var, 37, true), 37);
    }


    /*
 * Positive String arguments
 */

    /**
     * toInt('52', 37) = 52
     * Positive argument, failIfNegative implied to be false
     */
    public function testToIntStringPositiveVarCanBeNegativeImplied() {
        $var = '52';

        $this->assertEquals(toInt($var, 37), 52);
    }

    /**
     * toInt('52', 37, false) = 52
     * Positive argument, failIfNegative explicitly false
     */
    public function testToIntStringPositiveVarCanBeNegativeExplicit() {
        $var = '52';

        $this->assertEquals(toInt($var, 37, false), 52);
    }

    /**
     * toInt('52', 37, true) = 52
     * Positive argument, failIfNegative explicitly true
     */
    public function testToIntStringPositiveVarFailIfNegativeExplicit() {
        $var = '52';

        $this->assertEquals(toInt($var, 37, true), 52);
    }

    /*
     * Negative String arguments
     */

    /**
     * toInt('-1', 37) = -1
     * Negative argument, failIfNegative implied to be false
     */
    public function testToIntStringNegativeVarCanBeNegativeImplied() {
        $var = '-1';

        $this->assertEquals(toInt($var, 37), -1);
    }

    /**
     * toInt('-1', 37, false) = -1
     * Negative argument, failIfNegative explicitly false
     */
    public function testToIntStringNegativeVarCanBeNegativeExplicit() {
        $var = '-1';

        $this->assertEquals(toInt($var, 37, false), -1);
    }

    /**
     * toInt('-1', 37, true) = 37
     * Negative argument, failIfNegative explicitly true
     */
    public function testToIntStringNegativeVarFailIfNegativeExplicit() {
        $var = '-1';

        $this->assertEquals(toInt($var, 37, true), 37);
    }

    /*
     * Zero String arguments
     */

    /**
     * toInt('0', 37) = 0
     * Zero argument, failIfNegative implied to be false
     */
    public function testToIntStringZeroVarCanBeNegativeImplied() {
        $var = '0';

        $this->assertEquals(toInt($var, 37), 0);
    }

    /**
     * toInt('0', 37, false) = 0
     * Zero argument, failIfNegative explicitly false
     */
    public function testToIntStringZeroVarCanBeNegativeExplicit() {
        $var = '0';

        $this->assertEquals(toInt($var, 37, false), 0);
    }

    /**
     * toInt('0', 37, true) = 0
     * Zero argument, failIfNegative explicitly true
     */
    public function testToIntStringZeroVarFailIfNegativeExplicit() {
        $var = '0';

        $this->assertEquals(toInt($var, 37, true), 0);
    }

}
