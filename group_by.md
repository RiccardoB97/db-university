## GROUP BY

SELECT COUNT(id) as number_of_student_per_year, YEAR(enrolment_date) as year_of_enrolment FROM students GROUP BY year_of_enrolment

SELECT COUNT(id) as number_of_teachers, office_address FROM teachers GROUP BY office_address

SELECT AVG(vote), exam_id FROM exam_student GROUP BY exam_id

SELECT COUNT(id) as numero_di_corsi, department_id FROM degrees GROUP BY department_id