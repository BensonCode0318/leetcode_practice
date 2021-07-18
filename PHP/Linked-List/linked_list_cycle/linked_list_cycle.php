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
     * @return Boolean
     */
    public function hasCycle($head)
    {
        $slow = $head;
        $fast = $head->next;
        
        while ($fast != null || $slow != null) {
            if ($fast == $slow) {
                return true;
            }
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        return false;
    }
}
