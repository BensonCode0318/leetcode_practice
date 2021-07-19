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
    public function reverseList($head)
    {
        if (is_null($head)) {
            return $head;
        }
        $newList = null;

        while ($head) {
            if (!$newList) {
                $newList = new ListNode($head->val);
            } else {
                $newList = new ListNode($head->val, $newList);
            }
            $head = $head->next;
        }
        return $newList;
    }

    /**
     * leetcode提供解法
     *
     * public function reverseList($head)
        {
            $prev = null;
            while (null !== $head) {
                $next = $head->next;
                $head->next = $prev;
                $prev = $head;
                $head = $next;
            }
        return $prev;
    }
     */
}
