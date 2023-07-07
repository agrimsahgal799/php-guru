<?php

/* mysql query to find all numbers that appear at least three times consecutively */
$query1 = "SELECT DISTINCT S1.salary AS ConsecutiveSalary
FROM (tbl_salary S1 JOIN tbl_salary S2 ON S1.salary = S2.salary AND S1.id = S2.id-1)
JOIN tbl_salary S3 ON S1.salary = S3.salary AND S2.id = S3.id-1 GROUP BY S1.salary DESC";

/* If you want to get four time consecutively */
$query1.= "JOIN tbl_salary S4 ON S1.salary = S4.salary AND S3.id = S4.id-1";

/* mysql query to find all numbers that appear only one time */
$query2 = "SELECT salary FROM tbl_salary GROUP BY salary HAVING COUNT(*) = 1;";

/* mysql query to find duplicate records from table */
$query3 = "SELECT salary FROM tbl_salary GROUP BY salary HAVING COUNT(*) >= 2";

/* mysql select employees who have the highest salary in each of the department. */
$query4 = "SELECT tbl_salary.emp_id,tbl_salary.salary,tbl_salary.depart_id,
tbl_department.department,max(tbl_salary.salary) as max_salary from tbl_salary 
JOIN tbl_department on tbl_salary.depart_id = tbl_department.id group by tbl_department.id;";



