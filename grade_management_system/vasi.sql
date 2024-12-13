-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 31 Μάη 2022 στις 19:19:25
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `vasi`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Recognition` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `admin`
--

INSERT INTO `admin` (`AdminID`, `Firstname`, `Lastname`, `Username`, `Password`, `Email`, `Recognition`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `attends`
--

CREATE TABLE `attends` (
  `StudentID` varchar(10) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_name` varchar(100) NOT NULL,
  `Number_of_subjects` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `attends`
--

INSERT INTO `attends` (`StudentID`, `SubjectID`, `Subject_name`, `Number_of_subjects`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `grades`
--

CREATE TABLE `grades` (
  `Theory_Grade` int(2) DEFAULT NULL,
  `Lab_Grade` int(2) DEFAULT NULL,
  `Total_Grade` int(2) DEFAULT NULL,
  `StudentID` varchar(11) NOT NULL,
  `Student_Firstname` varchar(50) NOT NULL,
  `Student_Lastname` varchar(50) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Date_exam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `grades`
--

INSERT INTO `grades` (`Theory_Grade`, `Lab_Grade`, `Total_Grade`, `StudentID`, `Student_Firstname`, `Student_Lastname`, `SubjectID`, `Subject_Name`, `Date_exam`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `Recognition` tinyint(2) NOT NULL DEFAULT 3,
  `StudentID` varchar(11) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fathers_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Semester` tinyint(2) DEFAULT NULL,
  `Year_e` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`Recognition`, `StudentID`, `Username`, `Password`, `Firstname`, `Lastname`, `Fathers_name`, `Birthdate`, `Email`, `Phone_number`, `Semester`, `Year_e`) VALUES

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subject`
--

CREATE TABLE `subject` (
  `SubjectID` varchar(11) NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Semester` tinyint(3) DEFAULT NULL,
  `ECTS` tinyint(2) DEFAULT NULL,
  `Status_S` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Theory_Hours` int(2) DEFAULT NULL,
  `Lab_Hours` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `subject`
--

INSERT INTO `subject` (`SubjectID`, `Name`, `Semester`, `ECTS`, `Status_S`, `Theory_Hours`, `Lab_Hours`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teacher`
--

CREATE TABLE `teacher` (
  `Recognition` tinyint(2) NOT NULL DEFAULT 2,
  `TeacherID` varchar(11) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Year_e` int(5) DEFAULT NULL,
  `Status_t` varchar(10) DEFAULT NULL,
  `Office` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `teacher`
--

INSERT INTO `teacher` (`Recognition`, `TeacherID`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `Phone_number`, `Year_e`, `Status_t`, `Office`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teaches`
--

CREATE TABLE `teaches` (
  `TeacherID` varchar(11) NOT NULL,
  `Teacher_Firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher_Lastname` varchar(100) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `teaches`
--

INSERT INTO `teaches` (`TeacherID`, `Teacher_Firstname`, `Teacher_Lastname`, `SubjectID`, `Subject_name`) VALUES


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `Recognition` int(1) DEFAULT NULL,
  `ID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`Recognition`, `ID`, `Username`, `Password`, `email`) VALUES

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Ευρετήρια για πίνακα `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`StudentID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Ευρετήρια για πίνακα `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`StudentID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Ευρετήρια για πίνακα `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Ευρετήρια για πίνακα `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`);

--
-- Ευρετήρια για πίνακα `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`TeacherID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`),
  ADD KEY `TeacherID` (`TeacherID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `attends`
--
ALTER TABLE `attends`
  ADD CONSTRAINT `attends_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `attends_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);

--
-- Περιορισμοί για πίνακα `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);

--
-- Περιορισμοί για πίνακα `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
