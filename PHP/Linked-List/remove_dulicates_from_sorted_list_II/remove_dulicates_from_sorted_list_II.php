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
     * @return ListNode
     */
    public function deleteDuplicates($head)
    {
        $newNode = new ListNode();
        $newNode->next = $head;
        $current = $newNode;
        
        while ($head != null && $head->next != null) {
            if ($head->val == $head->next->val) {
                while ($head != null && $head->val == $head->next->val) {
                    $head = $head->next;
                }
                $current->next = $head->next;
            } else {
                $current = $current->next;
            }
            $head = $head->next;
        }
        
        return $newNode->next;
    }
}
