## 21.Merge Two Sorted Lists (easy)

### 題目
Merge two sorted linked lists and return it as a sorted list. The list should be made by splicing together the nodes of the first two lists.

Example 1:
<img src="../../../img/merge_two_sorted_lists.png" style="zoom:40%" />

```
Input: l1 = [1,2,4], l2 = [1,3,4]
Output: [1,1,2,3,4,4]
```

Example 2:
```
Input: l1 = [], l2 = []
Output: []
```

Example 3:
```
Input: l1 = [], l2 = [0]
Output: [0]
```

### 解題思路
使用遞迴，每次比較當下L1與L2 val的大小，較小的成為下一個節點，到其中有一方沒有下一個節點，
再補上其餘剩下的節點。

### 時間複雜度
$O(N)$
