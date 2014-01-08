Double Squares
=============

A solution to the Double Squares challenge from CodeEval and FB Hacker Cup 2011 (https://www.codeeval.com/open_challenges/33/).

The challenge is to output the number of possibile ways a number, N, can be represented as the sum of two perfect squares (x^2 + y^2).

By applying elementary logic, we can conclude that for any combination, the largest possible value of x or y is the square root of N. Thus, we start x from the sqrt(N) and y from 0.

We the iterate through a series of conditions and increments until x=y. The conditions are:

sum < N:

In this case, y must be too small. So we increment y by 1 and leave x constant.

sum > N:

The sum is too big. Thus we decrease x by 1 and leave y constant.

sum == N:

We have found a solution. Increment the results counter by 1, decrease x by 1, and increase y by 1. 
