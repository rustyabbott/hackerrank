# Repeated String

#### Problem
Lilah has a string, **_s_**, of lowercase English letters that she repeated infinitely many times.

Given an integer, **_n_**, find and print the number of letter **_a_**'s in the first **_n_** letters of Lilah's infinite string.

For example, if the string **_s = 'abcac'_** and **_n = 10_**, the substring we consider is **_abcacabcac_**, the first 10 characters of her infinite string. There are 4 occurrences of a in the substring.

#### Function Description

Complete the repeatedString function in the editor below. It should return an integer representing the number of occurrences of **_a_** in the prefix of length **_n_** in the infinitely repeating string.

repeatedString has the following parameter(s):

    s: a string to repeat
    n: the number of characters to consider

#### Input Format

The first line contains a single string, **_s_**.
The second line contains an integer, **_n_**.

#### Constraints

* 1 <= |s| <= 100
* 1 <= n <= 10^12  
* For 25% of the test cases, n <= 10^6.

#### Output Format

Print a single integer denoting the number of letter **_a_**'s in the first **_n_** letters of the infinite string created by repeating **_s_** infinitely many times.

##### Sample Input 0
```
aba
10
```

##### Sample Output 0
```
7
```

##### Explanation 0
The first n = 10 letters of the infinite string are abaabaabaa. Because there are 7 a's, we print 7 on a new line.

##### Sample Input 1
```
a
1000000000000
```
##### Sample Output 1
```
1000000000000
```

##### Explanation 1
Because all of the first n = 1000000000000 letters of the infinite string are a, we print 1000000000000 on a new line.
