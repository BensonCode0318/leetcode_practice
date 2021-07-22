<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    public function removeNthFromEnd($head, $n)
    {
        $dummy = new ListNode(null);
        $dummy->next = $head;
        $fast = $slow = $dummy;
        for ($i = 0; $i <= $n; ++$i) {
            $fast = $fast->next;
        }

        while ($fast !== null) {
            $fast = $fast->next;
            $slow = $slow->next;
        }

        $slow->next = $slow->next->next;

        return $dummy->next;
    }
}
