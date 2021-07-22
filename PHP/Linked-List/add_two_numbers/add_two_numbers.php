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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2)
    {
        $add = 0;
        $newList = new ListNode(0);
        $current = $newList;
        while ($l1 != null || $l2 != null || $add != 0) {
            $sum = 0;
            if (!is_null($l1)) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            
            if (!is_null($l2)) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            
            if ($add != 0) {
                $sum += $add;
                $add = 0;
            }
            
            if ($sum >= 10) {
                $sum -= 10;
                $add++;
            }
            $current->next = new ListNode($sum);
            $current = $current->next;
        }
        return $newList->next;
    }
}
