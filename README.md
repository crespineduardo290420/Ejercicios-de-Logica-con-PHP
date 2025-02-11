# Ejercicios-de-Logica-con-PHP
Aquí tienes el markdown que resume los ejercicios realizados en PHP:


# Logic Exercises

---

***Perform the following logic exercises using what you have seen in class:***

- *Using PHP*
- *Sorting algorithms (if necessary)*
- *Search algorithms (if needed)*

***Let's practice our logic 😎 👨🏻‍💻 👩🏻‍💻***

---

### Height Checker
    
A school is trying to take an annual photo of all the students. The students are asked to stand in a single file line in **non-decreasing order** by height. Let this ordering be represented by the integer array `expected` where `expected[i]` is the expected height of the `i-th` student in line.

You are given an integer array `heights` representing the **current order** that the students are standing in. Each `heights[i]` is the height of the `i-th` student in line (**0-indexed**).

Return the **number of indices** where `heights[i] != expected[i]`.

**Example 1:**

```php
// Input
$heights = [1,1,4,2,1,3];
// Output
3;

// Explanation:
// heights:  [1,1,4,2,1,3]
// expected: [1,1,1,2,3,4]
// Indices 2, 4, and 5 do not match.
```

**Example 2:**

```php
// Input
$heights = [5,1,2,3,4];
// Output
5;

// Explanation:
// heights:  [5,1,2,3,4]
// expected: [1,2,3,4,5]
// All indices do not match.
```

**Constraints:**

- `1 <= heights.length <= 100`
- `1 <= heights[i] <= 100`

[Height Checker - LeetCode](https://leetcode.com/problems/height-checker/description/)



### Fizz Buzz
    
Given an integer `n`, return a string array `answer` (**1-indexed**) where:

- `answer[i] == "FizzBuzz"` if `i` is divisible by `3` and `5`.
- `answer[i] == "Fizz"` if `i` is divisible by `3`.
- `answer[i] == "Buzz"` if `i` is divisible by `5`.
- `answer[i] == i` (as a string) if none of the above conditions are true.

**Example 1:**

```php
// Input
$n = 3;
// Output
["1","2","Fizz"];
```

**Example 2:**

```php
// Input
$n = 5;
// Output
["1","2","Fizz","4","Buzz"];
```

**Example 3:**

```php
// Input
$n = 15;
// Output
["1","2","Fizz","4","Buzz","Fizz","7","8","Fizz","Buzz","11","Fizz","13","14","FizzBuzz"];
```

**Constraints:**

- `1 <= n <= 10^4`

---

### Insertion Sort - Part 1

[Insertion Sort - Part 1 | HackerRank](https://www.hackerrank.com/challenges/insertionsort1/problem?isFullScreen=true)

---

### Binary Search
    
Given an array of integers `nums` which is sorted in ascending order, and an integer `target`, write a function to search `target` in `nums`. If `target` exists, then return its index. Otherwise, return `-1`.

You must write an algorithm with `O(log n)` runtime complexity.

**Example 1:**

```php
// Input
$nums = [-1,0,3,5,9,12], $target = 9;
// Output
4;

// Explanation:
// 9 exists in nums and its index is 4
```

**Example 2:**

```php
// Input
$nums = [-1,0,3,5,9,12], $target = 2;
// Output
-1;

// Explanation:
// 2 does not exist in nums so return -1
```

**Constraints:**

- `1 <= nums.length <= 10^4`
- `-10^4 < nums[i], target < 10^4`
- All the integers in `nums` are **unique**.
- `nums` is sorted in ascending order.

[Binary Search - LeetCode](https://leetcode.com/problems/binary-search/description/)

---

### Happy Number
    
Write an algorithm to determine if a number `n` is happy.

A **happy number** is a number defined by the following process:

- Starting with any positive integer, replace the number by the sum of the squares of its digits.
- Repeat the process until the number equals 1 (where it will stay), or it **loops endlessly in a cycle** which does not include 1.
- Those numbers for which this process **ends in 1** are happy.

Return `true` if `n` is a happy number, and `false` if not.

**Example 1:**

```php
// Input
$n = 19;
// Output
true;

// Explanation:
// 1^2 + 9^2 = 82
// 8^2 + 2^2 = 68
// 6^2 + 8^2 = 100
// 1^2 + 0^2 + 0^2 = 1
```

**Example 2:**

```php
// Input
$n = 2;
// Output
false;
```

**Constraints:**

- `1 <= n <= 2^31 - 1`

[Happy Number - LeetCode](https://leetcode.com/problems/happy-number/description/)

---

### Birthday Cake Candles

[Birthday Cake Candles | HackerRank](https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=true)

---

### Strong Password

[Strong Password | HackerRank](https://www.hackerrank.com/challenges/strong-password/problem?isFullScreen=true)

---

### Mars Exploration

[Mars Exploration | HackerRank](https://www.hackerrank.com/challenges/mars-exploration/problem?isFullScreen=true)

---

### Merge Sort
    
Ordenar un arreglo de números de menor a mayor utilizando el algoritmo “merge sort”.

---

### A Very Big Sum

[A Very Big Sum | HackerRank](https://www.hackerrank.com/challenges/a-very-big-sum/problem?isFullScreen=true)
```

Este markdown resume los ejercicios que mencionaste. Puedes agregar más detalles según lo necesites.
