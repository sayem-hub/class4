<?php 

                    /* Question 01:
                    Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.
                    Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30
                    So days of running month should dynamic (by php build in function) */

                    echo "<h3>Question-1: Output all days of running month</h3>"; //HTML Headline
                    echo "<hr/>"; //HTML horizontal line


            //Main code here
                $days_running_month = date("t");

                for ($i = 1; $i  <= $days_running_month ; $i++) { 
                    echo $i;
                    echo "<br>";
                }
                    /*Output
                    1
                    2
                    3
                    4
                    5
                    ...
                    30  */


                    /* Question 02: 
                    If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
                    You have to rotate from 1 to 100.
                    Your output message should like that, “3 is a odd number”
                    Not need to print even number */

                    echo "<h3>Question-2: Odd number within 1-100.</h3>"; //HTML Headline
                    echo "<hr/>"; //HTML horizontal line


            //Main code here
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
                        .... 
                        99 is a odd number */



                        /* Question 03: 
                        Factorial - I think everyone knows the word. Factorial of 4 is given below:
                        4! = 4*3*2*1 = 24
                        6! = 6*5*4*3*2*1 = 720  
                        So let’s calculate the factorial of 7. */


                    echo "<h3>Question-3: Factorial calculation of 7</h3>"; //HTML Headline
                    echo "<hr/>"; //HTML horizontal line

            //Main code here
                $target_number = 7;
                $factorial = 1;

                    for($i = $target_number; $i >= 1; $i--) {
                        $factorial *=  $i;
                    }

                    echo "Factorial of 7! is = $factorial";
                    //Output: Factorial of 7! is = 5040
            

                    /* Question 04: 
                    Print out from 100 - 1 using a while loop. 
                    You must use decrement operator */

                    echo "<h3>Question-4: Print out from 100 - 1 using a while loop</h3>"; //HTML Headline
                    echo "<hr/>"; //HTML horizontal line


            //Main code here
            $i = 100;
                    while ($i >= 1) {
                    echo $i;
                    echo "<br>";
                    $i--;
                }
                     /*Output 
                    100
                    99
                    98
                    97
                   ...
                    1 */


                      /* Question 05: 
                    You have an array of your purchased product items. 
                    ['apple', 'orange', 'banana', 'mango']
                    Show all products as a table list.
                    Output should like that: “sl- 1 and product - apple” */

                    echo "<h3>Question-5: Showing array products as table</h3>"; //HTML Headline
                    echo "<hr/>"; //HTML horizontal line

                //Main code here
                $products = ['apple', 'orange', 'banana', 'mango'];
                
                    foreach ($products as $key => $value) {
                       
                        echo "SL-" . ++$key . ' ' . "Product - "  . $value;
                        echo "<br>";
                    }
                    /*Output
                    SL-1 Product - apple
                    SL-2 Product - orange
                    SL-3 Product - banana
                    SL-4 Product - mango*/

?>
