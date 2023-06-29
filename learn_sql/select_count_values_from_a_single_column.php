# institute_db.employee
-
  id: 1
  emp_id: 1
  name: "Mohit"
  attendance_date: "2023-06-20"
  absent: "false"
-
  id: 2
  emp_id: 1
  name: "Mohit"
  attendance_date: "2023-06-28"
  absent: "true"
-
  id: 3
  emp_id: 1
  name: "Mohit"
  attendance_date: "2023-06-27"
  absent: "false"
-
  id: 4
  emp_id: 2
  name: "Rohit"
  attendance_date: "2023-06-19"
  absent: "false"
-
  id: 5
  emp_id: 2
  name: "Rohit"
  attendance_date: "2023-06-11"
  absent: "false"
-
  id: 6
  emp_id: 2
  name: "Rohit"
  attendance_date: "2023-06-27"
  absent: "true"
-
  id: 7
  emp_id: 3
  name: "Suresh"
  attendance_date: "2023-06-28"
  absent: "false"
-
  id: 8
  emp_id: 3
  name: "Suresh"
  attendance_date: "2023-06-29"
  absent: "true"
...

<?php

/* select the emp_id, name and absent from employee where employee is absent form more then or equal to 2 days */

$query = "SELECT emp_id, name, absent, count(absent) as absent_count 
FROM `employee` 
where absent = 'false' 
GROUP by emp_id 
having absent_count >= 2;
";