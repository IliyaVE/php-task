SHOW DATABASES ;
SHOW TABLES
SELECT * FROM students


SELECT * FROM students
SELECT * FROM specialization
SELECT * FROM score_of_lesson
SELECT * FROM lessons;
describe score_of_lesson;
SELECT
    lessons.lessons,
    students.first_name,
    students.last_name,
    score,
    dates
FROM score_of_lesson
INNER JOIN lessons
    ON score_of_lesson.lessons_id=lessons.lessons_id
INNER JOIN  students
    ON score_of_lesson.students_id=students.students_id;

select st.first_name
from students st
inner join specialization sp on sp.id = st.specialization;

SELECT
   *
FROM score_of_lesson
INNER JOIN lessons
    ON score_of_lesson.lessons_id=lessons.lessons_id
INNER JOIN  students
    ON score_of_lesson.students_id=students.students_id;
select * from students;
select * from students where id > 5;



# Напишите запрос, который выполняет вывод списка университетов, рейтинг которых превышает 300 баллов.
SELECT * FROM universities.universities
WHERE rating > 300;
# Напишите запрос к таблице STUDENT для вывода списка фамилий (SURNAME), имен (NAME)- и номера курса (KURS) всех студентов со стипендией, большей или равной 100, и живущих в Воронеже.
SELECT last_name, first_name, specialization.name_specialization
FROM universities.students
INNER JOIN specialization ON students.specialization=specialization.id
WHERE amaount_of_grant >= 100 AND city='Almaty';
# Составьте запрос для таблицы STUDENT таким образом, чтобы выходная таблица содержала всего один столбец в следующем виде:
# Борис Кузнецов родился в 1981 году
SELECT CONCAT(last_name,' ',first_name,' родился в ', years, ' году.')
FROM students
WHERE students_id=1;
# Напишите запрос для подсчета количества студентов, сдававших экзамен по предмету обучения с идентификатором, равным 20.
SELECT COUNT(DISTINCT students.students_id) FROM score_of_lesson
INNER JOIN students ON score_of_lesson.students_id=students.students_id
WHERE  score >= 75
# Напишите запрос, который выполняет выборку для каждого студента значения его идентификатора и минимальной из полученных им оценок.
SELECT
    students.students_id,
    students.last_name,
    students.first_name,
    MIN(score_of_lesson.score)
FROM
    students
INNER JOIN
    score_of_lesson
ON
    students.students_id=score_of_lesson.students_id
GROUP BY
    students.students_id,
    students.last_name,
    students.first_name
# Напишите запрос, осуществляющий выборку для каждого студента значения его идентификатора и максимальной из полученных им оценок.
SELECT
    students.students_id,
    students.last_name,
    students.first_name,
    MAX(score_of_lesson.score)
FROM
    students
        INNER JOIN
    score_of_lesson
    ON
            students.students_id=score_of_lesson.students_id
GROUP BY
    students.students_id,
    students.last_name,
    students.first_name
# Напишите запрос, выполняющий вывод фамилии первого в алфавитном порядке (по фамилии) студента, фамилия которого начинается на букву «И».
SELECT
    last_name
FROM
    students
WHERE
    last_name
LIKE
    'B%'
# Напишите запрос, который выполняет вывод (для каждого предмета обучения) наименования предмета и максимального значения номера семестра, в котором этот предмет преподается.
