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
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    public function getIntersectionNode($headA, $headB)
    {
        [$A,$B] = [$headA,$headB];
        while ($A !== $B) {
            $A = is_null($A) ? $headB : $A->next;
            $B = is_null($B) ? $headA : $B->next;
        }
        return $A;
    }
}
