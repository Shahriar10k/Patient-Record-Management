-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` varchar(20) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `Patient_SSN` varchar(20) NOT NULL,
  `Doctor_SSN` varchar(20) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Complains` longtext NOT NULL,
  `Findings` longtext NOT NULL,
  `Treatments` longtext DEFAULT NULL,
  `Medicines` longtext DEFAULT NULL,
  `Allergies` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`Patient_SSN`, `Doctor_SSN`, `Date_Time`, `Complains`, `Findings`, `Treatments`, `Medicines`, `Allergies`) VALUES
('1234AB', '159XY', '2020-01-17 11:00:00', 'Chest pain, shortness of breath', 'Cardiac Arrest', 'Surgery', 'Allistol 3 mg 7 weeks', 'peanuts'),
('1234AB', '1784KL', '2019-12-18 16:00:00', 'Back Pain', 'Spine nerve damage', 'Reconstructive surgery', 'Medcol 2 mg 3 months', 'peanuts'),
('1478GH', '159XY', '2019-12-19 16:30:00', 'Chest Pain', 'Possible block in Artery', 'Angiogram, Surgery', 'talltol 3 times a day', '-'),
('1478GH', '2587AD', '2020-03-19 12:00:00', 'Pain in the head', 'low water level', 'CT scan', '-', '-'),
('2587IJ', '2587AD', '2020-03-12 10:00:00', 'Fatigue, body ache', 'High blood pressure', 'Reduce salt food consumption', 'Bitanol 10 continue', '-'),
('2587IJ', '258ER', '2020-05-11 16:00:00', 'Pain in the eye', 'Possible glaucoma', 'Tonometry', '-', '-'),
('4567CD', '2587AD', '2020-05-05 13:00:00', 'Fever, pain, body ache', 'Jaundice', 'Bed Rest and water consumption', 'lekajol 4mg, kamsik 2mg, shuba-shot ', '-'),
('4567CD', '357MN', '2020-04-15 14:00:00', 'Seizures', 'Epilepsy', 'Ketogenic diet', 'AEDs daily', '-'),
('7891EF', '357MN', '2020-04-16 18:33:00', 'Shaky Hands', 'Parkinson disease', '-', 'L-Dopa daily', '-');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `Patient_SSN` varchar(20) NOT NULL,
  `Doctor_SSN` varchar(20) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Diagnosis_Name` varchar(25) NOT NULL,
  `Description` longtext NOT NULL,
  `Complications` longtext DEFAULT NULL,
  `Allergies` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`Patient_SSN`, `Doctor_SSN`, `Date_Time`, `Diagnosis_Name`, `Description`, `Complications`, `Allergies`) VALUES
('1478GH', '159XY', '2019-12-26 15:00:00', 'Angiogram', 'Blocked artery', '-', '-'),
('1478GH', '2587AD', '2020-03-19 15:00:00', 'CT Scan', 'Found tumor in the left lobe', '-', '-'),
('2587IJ', '258ER', '2020-05-14 18:00:00', 'Tonometry', 'Confirmed Glaucoma', 'Excessive pressure in eye', '-');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `SSN` varchar(20) NOT NULL,
  `F_Name` char(15) NOT NULL,
  `L_Name` char(15) NOT NULL,
  `Hospital_ID` varchar(25) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` char(35) NOT NULL,
  `Speciality` varchar(30) NOT NULL,
  `Designation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`SSN`, `F_Name`, `L_Name`, `Hospital_ID`, `Address`, `Contact_No`, `Email`, `Department`, `Speciality`, `Designation`) VALUES
('1245UV', 'Kamrujjaman', 'Oni', 'SQUARE3', 'Dhaka', '03213245', 'oni@gmail.com', 'Department of Oncology', 'Leukemia Specialist', 'Senior Consultant'),
('159XY', 'Arfaqur', 'Rahman', 'DHAKMED1', 'Dhaka', '013346548', 'arfaqur@gmail.com', 'Department of Cardiology', 'Cardiac Surgeon', 'Professor and Dean'),
('1784KL', 'Fariya', 'Jiban', 'SQUARE3', 'Dhaka', '01315648', 'fjiban@gmail.com', 'Department of Orthopedics', 'Reconstruction Surgery Special', 'Chief Surgeon'),
('2587AD', 'Ridoy', 'Rahman', 'APOLLO2', 'Dhaka', '01324648', 'rrahman@gmail.com', 'Department of Medicine', 'Meidicne', 'Senior Physician'),
('258BR', 'Sonam', 'Rahman', 'APOLLO2', 'Dhaka', '03213254', 'srahman@gmail.com', 'Department of Pathology', 'Pathology', 'Senior Analyst'),
('258ER', 'Dihan', 'Joarder', 'APOLLO2', 'Dhaka', '021321547', 'jd@gmail.com', 'Department of Opthalmology', 'Eye Surgeon', 'Surgeon'),
('357MN', 'Zul', 'Ikram', 'DHAKMED1', 'Dhaka', '012345648', 'zulikram@gmail.com', 'Department of Neuology', 'Neurologist', 'Senior Surgeon and Profes'),
('369DC', 'Atoshi', 'Nazia', 'DNJMED12', 'Dinajpur', '012325456', 'ato@gmail.com', 'Department of ENT', 'ENT Specialist', 'Junior Resident Physician'),
('852BC', 'Sakib', 'Alam', 'DNJMED12', 'Dinajpur', '013221456', 'salam@gmail.com', 'Department of Urology', 'Kidney Specialist', 'Senior Physician');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_login`
--

CREATE TABLE `doctor_login` (
  `d_ssn` varchar(20) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_login`
--

INSERT INTO `doctor_login` (`d_ssn`, `pass`) VALUES
('1245UV', 'doctor7'),
('159XY', 'doctor1'),
('1784KL', 'doctor8'),
('2587AD', 'doctor3'),
('258BR', 'doctor9'),
('258ER', 'doctor4'),
('357MN', 'doctor2'),
('369DC', 'doctor6'),
('852BC', 'doctor5');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `ID` varchar(25) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`ID`, `Email`, `Address`, `name`) VALUES
('APOLLO2', 'info@apollo.com', 'Dhaka', 'Apollo Hospital '),
('DHAKMED1', 'info@dmch.com', 'Dhaka', 'Dhaka Medical College Hospital'),
('DNJMED12', 'info@dnjmch.com', 'Dinajpur', 'Dinajpur Medical Hospital'),
('SQUARE3', 'info@square.com', 'Dhaka', 'Suqare Hospital Dhaka'),
('SSMCH4', 'info@ssmch.com', 'Dhaka', 'Salimullah Medical College');

-- --------------------------------------------------------

--
-- Table structure for table `medical_adminstration`
--

CREATE TABLE `medical_adminstration` (
  `Patient_SSN` varchar(20) NOT NULL,
  `Staff_SSN` varchar(20) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Description` longtext NOT NULL,
  `Complication` longtext DEFAULT NULL,
  `Medicine` longtext DEFAULT NULL,
  `Allergies` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_adminstration`
--

INSERT INTO `medical_adminstration` (`Patient_SSN`, `Staff_SSN`, `Date_Time`, `Description`, `Complication`, `Medicine`, `Allergies`) VALUES
('1234AB', '1321CR', '2020-01-17 10:35:00', 'Possible cardiac arrest', 'Shortness of Breath,', 'Xanax 12 mg', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

CREATE TABLE `medical_staff` (
  `SSN` varchar(20) NOT NULL,
  `F_Name` char(15) NOT NULL,
  `L_Name` char(15) NOT NULL,
  `Hospital_ID` varchar(25) NOT NULL,
  `Department` char(35) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`SSN`, `F_Name`, `L_Name`, `Hospital_ID`, `Department`, `Contact_No`, `Email`, `Designation`, `Address`) VALUES
('1321CR', 'Miraj', 'Hasan', 'DHAKMED1', 'Paramedics', '0321646', 'mh@gmail.com', 'Emergency Response Team', 'Dhaka'),
('4567FL', 'Aritro', 'Chowdhury', 'DHAKMED1', 'Department of Nurses', '01231855', 'archowdhury@gmail.com', 'Senior Nurse', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `Patient_SSN` varchar(20) NOT NULL,
  `Doctor_SSN` varchar(20) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Description` longtext NOT NULL,
  `Complications` longtext DEFAULT NULL,
  `Allergies` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`Patient_SSN`, `Doctor_SSN`, `Date_Time`, `Description`, `Complications`, `Allergies`) VALUES
('1234AB', '159XY', '2020-01-30 10:00:00', 'Bypass Surgery', '-', '-'),
('1234AB', '1784KL', '2020-04-01 15:00:00', 'Spine reconstructive surgery', '-', 'Anesthesia overdose'),
('1478GH', '159XY', '2020-02-12 14:26:00', 'Artery Block Remove', 'Vein cut in the left', 'Reactive to sedatives'),
('2587IJ', '258ER', '2020-05-19 14:00:00', 'Glaucoma Surgery', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `SSN` varchar(20) NOT NULL,
  `F_Name` char(15) NOT NULL,
  `L_Name` char(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`SSN`, `F_Name`, `L_Name`, `Address`, `Contact_No`, `Email`, `Date_Of_Birth`, `Gender`) VALUES
('1234AB', 'Sabbir', 'Sozol', 'Dinajpur', '0123468', 'sabbir.sozol@gmail.com', '1990-05-11', 'Male'),
('1478GH', 'Udoy', 'Rahman', 'Dhaka', '016468745', 'udoy@gmail.com', '1992-10-14', 'Male'),
('2587IJ', 'Jubair', 'Nayeem', 'Dhaka', '01355896', 'jnayeem@gmail.com', '1996-05-21', 'Male'),
('4567CD', 'Ridoy', 'Arefin', 'Dhaka', '01246468', 'ra@gmail.com', '1995-08-08', 'Male'),
('7891EF', 'Ahsanul', 'Habib', 'Gaibandha', '01345646', 'ahabib@gmail.com', '1996-11-13', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `patient_login`
--

CREATE TABLE `patient_login` (
  `p_ssn` varchar(20) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_login`
--

INSERT INTO `patient_login` (`p_ssn`, `pass`) VALUES
('1234AB', 'patient1'),
('1478GH', 'patient4'),
('2587IJ', 'patient5'),
('4567CD', 'Patient2'),
('7891EF', 'patient3');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `s_ssn` varchar(20) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`s_ssn`, `pass`) VALUES
('1321CR', 'staff1'),
('4567FL', 'staff2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Patient_SSN`,`Doctor_SSN`,`Date_Time`),
  ADD KEY `DoctorSSN_FK` (`Doctor_SSN`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`Patient_SSN`,`Doctor_SSN`,`Date_Time`),
  ADD KEY `diagnosis_ibfk_2` (`Doctor_SSN`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `doctor_login`
--
ALTER TABLE `doctor_login`
  ADD PRIMARY KEY (`d_ssn`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medical_adminstration`
--
ALTER TABLE `medical_adminstration`
  ADD PRIMARY KEY (`Patient_SSN`,`Staff_SSN`,`Date_Time`),
  ADD KEY `medical_adminstration_ibfk_2` (`Staff_SSN`);

--
-- Indexes for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`Patient_SSN`,`Doctor_SSN`,`Date_Time`),
  ADD KEY `operation_ibfk_2` (`Doctor_SSN`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `patient_login`
--
ALTER TABLE `patient_login`
  ADD PRIMARY KEY (`p_ssn`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`s_ssn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `DoctorSSN_FK` FOREIGN KEY (`Doctor_SSN`) REFERENCES `doctor` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PatientSSN_FK` FOREIGN KEY (`Patient_SSN`) REFERENCES `patient` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`Patient_SSN`) REFERENCES `patient` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnosis_ibfk_2` FOREIGN KEY (`Doctor_SSN`) REFERENCES `doctor` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`Hospital_ID`) REFERENCES `hospital` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_login`
--
ALTER TABLE `doctor_login`
  ADD CONSTRAINT `doctor_login_ibfk_1` FOREIGN KEY (`d_ssn`) REFERENCES `doctor` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_adminstration`
--
ALTER TABLE `medical_adminstration`
  ADD CONSTRAINT `medical_adminstration_ibfk_1` FOREIGN KEY (`Patient_SSN`) REFERENCES `patient` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medical_adminstration_ibfk_2` FOREIGN KEY (`Staff_SSN`) REFERENCES `medical_staff` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD CONSTRAINT `medical_staff_ibfk_1` FOREIGN KEY (`Hospital_ID`) REFERENCES `hospital` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`Patient_SSN`) REFERENCES `patient` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `operation_ibfk_2` FOREIGN KEY (`Doctor_SSN`) REFERENCES `doctor` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_login`
--
ALTER TABLE `patient_login`
  ADD CONSTRAINT `fk_pssn` FOREIGN KEY (`p_ssn`) REFERENCES `patient` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD CONSTRAINT `staff_login_ibfk_1` FOREIGN KEY (`s_ssn`) REFERENCES `medical_staff` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
