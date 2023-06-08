CREATE TABLE students (
    id INT (10) NOT NULL AUTO_INCREMENT,
    name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    PRIMARY key (id)
);

INSERT INTO `students` (`id`, `name`, `email`) VALUES (NULL, 'Vasya', 'krab12@mail.ru'), (NULL, 'Petya', 'feee23@mail.ru');

CREATE TABLE enrollments (
    id INT (10) NOT NULL AUTO_INCREMENT,
    student_id INT (10) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (student_id) REFERENCES students (id) ON DELETE CASCADE
);