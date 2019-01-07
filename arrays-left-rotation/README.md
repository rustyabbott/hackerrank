# Arrays: Left Rotation

### Problem

A left rotation operation on an array shifts each of the array's elements 1 unit to the left. For example, if 2 left rotations are performed on array [1, 2, 3, 4, 5], then the array would become [3, 4, 5, 1, 2].

Given an array __*a*__ of __*n*__ integers and a number, __*d*__, perform __*d*__ left rotations on the array. Return the updated array to be printed as a single line of space-separated integers.

###### Function Description

Complete the function *rotLeft* in the editor below. It should return the resulting array of integers.

rotLeft has the following parameter(s):

* An array of integers __a__.
* An integer __d__, the number of rotations.

###### Input Format

The first line contains two space-separated integers __*n*__ and __*d*__, the size of __*a*__ and the number of left rotations you must perform.
The second line contains __*n*__ space-separated integers __*a[i]*__.

###### Constraints
* 1 <= n 10^5
* 1 <= d <= n
* 1 <= a[i] <= 10^6

###### Output Format

Print a single line of __*n*__ space-separated integers denoting the final state of the array after performing __*d*__ left rotations.

###### Sample Input
```
5 4
1 2 3 4 5
```
###### Sample Output
```
5 1 2 3 4
```
