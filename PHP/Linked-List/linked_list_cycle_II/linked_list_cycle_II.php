<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function detectCycle($head)
    {
        $nodeAry = [];
        $current = $head;
        
        while ($current) {
            if (in_array($current, $nodeAry)) {
                return $current;
            }
            array_push($nodeAry, $current);
            $current = $current->next;
        }
        return null;
    }
}
