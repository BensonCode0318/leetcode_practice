<?php
class Solution
{

/**
 * @param String $s
 * @return Boolean
 */
    public function isValid($s)
    {
        $map = [
            "(" => ")",
            "[" => "]",
            "{" => "}"
        ];
    
        $stack = new SplStack();
    
        for ($i = 0; $i<strlen($s); $i++) {
            if (array_key_exists($s[$i], $map)) {
                $stack->push($s[$i]);
            } else {
                if (!$stack->isEmpty() && $map[$stack->top()] == $s[$i]) {
                    $stack->pop();
                } else {
                    return false;
                }
            }
        }
        return $stack->isEmpty();
    }
}
