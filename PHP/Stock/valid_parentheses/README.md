## [Valid Parentheses (easy)](https://leetcode.com/problems/valid-parentheses/)

### 題目
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

* Open brackets must be closed by the same type of brackets.
* Open brackets must be closed in the correct order.

Example 1:

```
Input: s = "()"
Output: true
```

Example 2:

```
Input: s = "()[]{}"
Output: true
```

Example 3:

```
Input: s = "(]"
Output: false
```

Example 4:

```
Input: s = "([)]"
Output: false
```

Example 5:

```
Input: s = "{[]}"
Output: true
```

### 解題思路
利用PHP原生封裝好的stack結構 ```SplStack```來完成stack的操作。

### 時間複雜度
$O(N)$
