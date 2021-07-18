## 21.Merge Two Sorted Lists (easy)

### 題目
Given head, the head of a linked list, determine if the linked list has a cycle in it.

There is a cycle in a linked list if there is some node in the list that can be reached again by continuously following the next pointer. Internally, pos is used to denote the index of the node that tail's next pointer is connected to. Note that pos is not passed as a parameter.

Return true if there is a cycle in the linked list. Otherwise, return false.

Example 1:
<img src="../../../img/linked_list_cycle_1.png" style="zoom:40%" />

```
Input: head = [3,2,0,-4], pos = 1
Output: true
Explanation: There is a cycle in the linked list, where the tail connects to the 1st node (0-indexed).
```

Example 2:

<img src="../../../img/linked_list_cycle_2.png" style="zoom:40%" />

```
Input: head = [1,2], pos = 0
Output: true
Explanation: There is a cycle in the linked list, where the tail connects to the 0th node.
```

Example 3:

<img src="../../../img/linked_list_cycle_3.png" style="zoom:40%" />

```
Input: head = [1], pos = -1
Output: false
Explanation: There is no cycle in the linked list.
```

### 解題思路
使用Runner方法，設定快指標與慢指標，快指標比慢指標快一個節點，如果Linked-list中存在循環，那麼快慢指標會在某個點相遇，否則會出現節點為空的情況。

### 時間複雜度
$O(N)$

### 空間複雜度
$O(1)$
