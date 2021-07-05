## GROUP BY

SELECT COUNT(id) as number_of_student_per_year, YEAR(enrolment_date) as year_of_enrolment FROM students GROUP BY year_of_enrolment

SELECT COUNT(id) as number_of_teachers, office_address FROM teachers GROUP BY office_address

SELECT AVG(vote), exam_id FROM exam_student GROUP BY exam_id

SELECT COUNT(id) as numero_di_corsi, department_id FROM degrees GROUP BY department_id


## JOIN

SELECT students.id, students.name, students.surname 
FROM students
JOIN degrees
ON students.degree_id = degrees.id
WHERE degrees.name = "Corso di Laurea in Economia"


SELECT degrees.name, degrees.level, degrees.address, degrees.email, degrees.website
FROM degrees
JOIN departments
ON degrees.department_id = departments.id
WHERE departments.name = 'Dipartimento di Neuroscienze'


SELECT courses.id, courses.name, courses.description, courses.year, courses.cfu
FROM course_teacher
JOIN courses
ON course_id = courses.id
JOIN teachers
ON teacher_id = teachers.id
WHERE teachers.id = 44


SELECT students.*, degrees.name as degree_name, degrees.level as degree_level, degrees.address as degree_address, degrees.email as degree_email, degrees.website as degree_website, departments.name as deparment_name
FROM students
JOIN degrees
ON students.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id
ORDER BY students.surname ASC


SELECT degrees.name as degree_name, courses.name as course_name, teachers.name, teachers.surname
FROM course_teacher
JOIN teachers
ON teacher_id = teachers.id
JOIN courses
ON course_id = courses.id 
JOIN degrees
ON courses.degree_id = degrees.id


SELECT teachers.*
FROM course_teacher
JOIN teachers
ON course_teacher.teacher_id = teachers.id
JOIN courses
ON course_teacher.course_id = courses.id
JOIN degrees
ON courses.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id
WHERE departments.name = 'Dipartimento di Matematica'


