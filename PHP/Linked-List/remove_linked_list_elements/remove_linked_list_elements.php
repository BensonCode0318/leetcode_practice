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
     * @param Integer $val
     * @return ListNode
     */
    public function removeElements($head, $val)
    {
        if ($val == 0) {
            return $head;
        }
        
        $newNode = new ListNode(0);
        $newNode->next = $head;
        $current = $newNode;
        
        while ($current) {
            if ($current->next->val == $val) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }
        return $newNode->next;
    }
}
