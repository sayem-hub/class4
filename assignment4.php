<?php 

        /* Question 01:
Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.
Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30
So days of running month should dynamic (by php build in function) */

    $running_month = date("t");

    // for ($running_month = 1; $running_month <31 ; $running_month++) { 
    //     echo $running_month;
    //     echo "<br>";
    // }

    
// echo    $running_month;



        /* Question 02: 
If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
You have to rotate from 1 to 100.
Your output message should like that, “3 is a odd number”
Not need to print even number */

        for ($number =1; $number  <=100 ; $number +=2) { 
            echo $number . " ". "is a odd number";
            echo "<br>";
        }

        /*Output 
            1 is a odd number
            3 is a odd number
            5 is a odd number
            7 is a odd number
            9 is a odd number
            11 is a odd number .... */



            /* Question 03: 

		Factorial - I think everyone knows the word. Factorial of 4 is given below:

4! = 4*3*2*1 = 24

6! = 6*5*4*3*2*1 = 720  

So let’s calculate the factorial of 7.
            
            */

?>
