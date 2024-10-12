<?php

class isNumb extends Exception{}
class EvenOdd extends Exception{}

class DivisionZero extends Exception{}
/**
 * @throws Exception
 */
function test($num){
    if(!is_numeric($num)){
        throw new isNumb("Please add Integer number");
    }
    if($num % 2 == 1){
        throw new EvenOdd("Please add another numb");
    }
    if($num == 0){
        throw new DivisionZero("Please add higher number than 0");
    }
    return 100/$num;
}

try {
    echo test(2);
} catch(isNumb|EvenOdd|DivisionZero $e){
    echo $e->getMessage();
}

/*
 * catch (isNumb $e) {
    echo $e->getMessage();
} catch (EvenOdd $e){
    echo $e->getMessage();
} catch (DivisionZero $e) {
    echo $e->getMessage();
}
 */

