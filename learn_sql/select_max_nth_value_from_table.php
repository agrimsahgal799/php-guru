---
# institute_db.tbl_salary
-
  id: 1
  emp_id: 1
  salary: 9000
-
  id: 2
  emp_id: 2
  salary: 5000
-
  id: 3
  emp_id: 3
  salary: 4000
-
  id: 4
  emp_id: 4
  salary: 3500
-
  id: 5
  emp_id: 5
  salary: 1000
...

<?php

/* select max salary from mysql table */
$max = "SELECT max(salary) from tbl_salary";

/* select 2nd max salary from mysql table */
/* note : The second max salary will not be repeated. */
$second_max = "SELECT max(salary) from tbl_salary where salary < (SELECT max(salary) from tbl_salary)";

/* select nth max salary from mysql table */
$max_nth = 3;
$nth_max = "SELECT salary FROM tbl_salary s1
WHERE $max_nth-1 = (SELECT COUNT(DISTINCT salary) FROM tbl_salary s2
WHERE s2.salary > s1.salary) group by salary";
