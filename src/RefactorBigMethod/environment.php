<?php

class environment extends defaults
{
    // lots of methods above

    public function someReallyLongMethod($param1, $param2, $param3 = true)
    {
        // lots of logic

        $return = '';

        // lots of indentation
        if ($param1 == 'one') {
            $return = 'do it param1==one way for account '.defaults::$clientInfo['id'];
        } else {
            if ($param3) {
                $return = 'do it this way with '.defaults::$clientInfo['id'];
            } else {
                $return = 'do it param2 way with name '.defaults::$clientInfo['name'];
            }
        }

        if ($param3) {
            $return .= ' added more stuff to return because of param3';
        }

        // lots more logic.

        return $return;
    }

    // lots of methods below
}
