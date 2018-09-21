<?php
// Your code here!
/*
Fibonacciの実装

# n(1) = 1
# n(2) = 1
# n(3) = 2 = n(2) + n(1) = 1 + 1
# n(4) = 3 = n(3) + n(2) = 2 + 1
# n(5) = 5 = n(4) + n(3) = 3 + 2
# n(5) = 8 = n(5) + n(4) = 5 + 3

# n番目のフィボナッチ数列の数を返すFibonacci関数を作成してください。

# Fibonacci(1) => 1
# Fibonacci(2) => 1
# Fibonacci(3) => 2 = Fibonacci(2) + Fibonacci(1)
# Fibonacci(4) => 3 = Fibonacci(3) + Fibonacci(2)
# Fibonacci(5) => 5 = Fibonacci(4) + Fibonacci(3)

*/

function fib($n){
    if ($n === 1){
        return 1;
    }
    if ($n === 2){
        return 1;
    }
    //n = 3の場合は2が返る -> n(2) + n(1) -> 2
    return fib($n-1) + fib($n-2);
}

for ($i=1; $i<=10; $i++) {
    print_r(fib($i)."\n");
}
?>