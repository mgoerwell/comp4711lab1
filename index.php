<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php'); //required include for the Student class

            $students = array(); //this creates an array to store our students
            
            // Creating the first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //Creating the second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //Creating the third student
            $third = new Student();
            $third->surname = "Goerwell";
            $third->first_name = "Matthew";
            $third->add_email('home','matt@fake.com');
            $third->add_email('work','mgoerwell@bcit.ca');
            $third->add_grade(100);
            $third->add_grade(80);
            $third->add_grade(60);
            $students['m151'] = $third;

           ksort($students); // one of the many sort functions
            
            //display all students to the user.
            foreach($students as $student)
                echo $student->toString();

        ?>
    </body>
</html>
