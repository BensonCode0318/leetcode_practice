<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function maxDepth($s)
    {
        $count = 0;
        $max   = 0;
        for ($i = 0; $i<strlen($s); $i++) {
            if ($s[$i] === "(") {
                $count ++;
                $count > $max && $max = $count;
            }
            if ($s[$i] === ")") {
                $count --;
            }
        }
        return $max;
    }
}
