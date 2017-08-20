-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 06:13 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project16db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE IF NOT EXISTS `allowance` (
  `idAllowance` int(11) NOT NULL,
  `AllowanceName` varchar(45) DEFAULT NULL,
  `AllowanceAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL,
  `Company_Work_Period_Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_Company_Work_Period_toDate` date NOT NULL,
  `AttendedDays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `idCash` int(11) NOT NULL,
  `CashAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE IF NOT EXISTS `cheque` (
  `idCheque` int(11) NOT NULL,
  `ChequeNumber` varchar(200) NOT NULL,
  `ChequeBankName` varchar(200) NOT NULL,
  `ChequeBankBranch` varchar(200) NOT NULL,
  `ChequeBKdate` varchar(45) DEFAULT NULL,
  `ChequeAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `idCollection` int(11) NOT NULL,
  `CollectionDriver` varchar(45) NOT NULL,
  `CollectionVehicle` varchar(45) NOT NULL,
  `CollectionArea` varchar(45) DEFAULT NULL,
  `CollectionReport_idCollectionReport` int(11) NOT NULL,
  `CollectionReport_Outlet_idOutlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collectionofficer`
--

CREATE TABLE IF NOT EXISTS `collectionofficer` (
  `Collection_idCollection` int(11) NOT NULL,
  `Collection_CollectionReport_idCollectionReport` int(11) NOT NULL,
  `Collection_CollectionReport_Outlet_idOutlet` int(11) NOT NULL,
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collectionreport`
--

CREATE TABLE IF NOT EXISTS `collectionreport` (
  `idCollectionReport` int(11) NOT NULL,
  `CollectionReportDate` varchar(45) NOT NULL,
  `Outlet_idOutlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_work_period`
--

CREATE TABLE IF NOT EXISTS `company_work_period` (
  `Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_toDate` date NOT NULL,
  `Company_Work_Period_WorkingDays` int(11) DEFAULT NULL,
  `Company_Work_Period_Holidays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `idCredit` int(11) NOT NULL,
  `CreditAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `idCustomer` int(11) NOT NULL,
  `CustomerCode` varchar(20) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerAddress` varchar(300) DEFAULT NULL,
  `CustomerContact` varchar(20) DEFAULT NULL,
  `CustomerRegDate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `CustomerCode`, `CustomerName`, `CustomerAddress`, `CustomerContact`, `CustomerRegDate`) VALUES
(1, 'DSP00498', 'SPECIAL EVENTS', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE IF NOT EXISTS `deduction` (
  `idDeduction` int(11) NOT NULL,
  `DeductionType` varchar(45) DEFAULT NULL,
  `DeductionAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_vehicle`
--

CREATE TABLE IF NOT EXISTS `delivery_vehicle` (
  `idDelivery_Vehicle` int(11) NOT NULL,
  `Delivery_VehicleType` varchar(45) NOT NULL,
  `Outlet_idOutlet` int(11) NOT NULL,
  `Delivery_VehicleName` varchar(45) NOT NULL,
  `Delivery_VehicleEngineNo` varchar(45) NOT NULL,
  `Delivery_VehicleChassisNo` varchar(45) NOT NULL,
  `Delivery_VehicleRegistrationDate` varchar(45) NOT NULL,
  `Delivery_VehicleOwnerName` varchar(45) NOT NULL,
  `Delivery_VehicleOwnerAddress` varchar(45) NOT NULL,
  `Delivery_VehicleOwnerTelephoneNo` int(10) NOT NULL,
  `Delivery_VehicleLicenNo` varchar(45) NOT NULL,
  `Delivery_VehicleLicenStartingDate` varchar(45) NOT NULL,
  `Delivery_VehicleLicenEndingDate` varchar(45) NOT NULL,
  `Delivery_VehicleInsurancePolicyNo` varchar(45) NOT NULL,
  `Delivery_VehicleInsuranceSerielNo` varchar(45) NOT NULL,
  `Delivery_VehicleInsuranceStartingDate` varchar(45) NOT NULL,
  `Delivery_VehicleInsuranceEndingDate` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_vehicle`
--

INSERT INTO `delivery_vehicle` (`idDelivery_Vehicle`, `Delivery_VehicleType`, `Outlet_idOutlet`, `Delivery_VehicleName`, `Delivery_VehicleEngineNo`, `Delivery_VehicleChassisNo`, `Delivery_VehicleRegistrationDate`, `Delivery_VehicleOwnerName`, `Delivery_VehicleOwnerAddress`, `Delivery_VehicleOwnerTelephoneNo`, `Delivery_VehicleLicenNo`, `Delivery_VehicleLicenStartingDate`, `Delivery_VehicleLicenEndingDate`, `Delivery_VehicleInsurancePolicyNo`, `Delivery_VehicleInsuranceSerielNo`, `Delivery_VehicleInsuranceStartingDate`, `Delivery_VehicleInsuranceEndingDate`) VALUES
(1, 'Motor Bicycle', 1, 'fg', '45', '21', '21/11/1256', '', '', 0, '', '', '', '', '', '', ''),
(7, 'Motor Bicycle', 2, 'ty', '456', '123', '12/12/1212', '', '', 0, '', '', '', '', '', '', ''),
(10, 'Lorry', 1, '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(11, 'Motor Bicycle', 1, 'kkk', '1111111', '111111111', '11/11/1111', '', '', 0, '', '', '', '', '', '', ''),
(12, 'Lorry', 1, '', '', '', '', 'ghj', 'ghj', 712542130, '', '', '', '', '', '', ''),
(13, 'Lorry', 1, '', '', '', '', '', '', 0, '11', '11/11/1111', '11/11/1111', '11', '11', '11/11/1111', '11/11/1111'),
(14, 'Lorry', 1, 'gg', '11', '11', '11/11/1111', 'fghn', 'dsfd', 2147483647, '11', '11/11/1111', '11/11/1111', '111', '111', '11/11/1111', '11/11/1111'),
(15, 'Lorry', 1, 'mm', '22', '22', '22/22/2222', 'mm', 'mm', 712541253, '22', '22/22/2222', '22/22/2222', '22', '22', '22/22/2222', '22/22/2222'),
(16, 'Lorry', 1, '', '', '', '', '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `idEmployee` int(11) NOT NULL,
  `EmployeeFullName` varchar(145) NOT NULL,
  `EmployeeNameWithInitials` varchar(100) NOT NULL,
  `EmployeeNIC` varchar(45) NOT NULL,
  `EmployeeBirthdate` varchar(45) NOT NULL,
  `EmployeePosition` varchar(45) NOT NULL,
  `EmployeeJoinedDate` varchar(45) NOT NULL,
  `EmployeeContactNumber` varchar(45) NOT NULL,
  `EmployeeAddress` varchar(245) DEFAULT NULL,
  `EmployeeEmail` varchar(145) DEFAULT NULL,
  `Outlet_idOutlet` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idEmployee`, `EmployeeFullName`, `EmployeeNameWithInitials`, `EmployeeNIC`, `EmployeeBirthdate`, `EmployeePosition`, `EmployeeJoinedDate`, `EmployeeContactNumber`, `EmployeeAddress`, `EmployeeEmail`, `Outlet_idOutlet`) VALUES
(2, 'Kamal Perera', 'K.Perera', '821467209V', '10/03/1982', 'Outlet Supervisor', '04/08/2016', '0715678345', '70/3,Namal mawatha,Gampaha', 'kamalperera@gmail.com', 1),
(4, 'Hirunika Sumuduni karunathilaka', 'H.S.Karunathilaka', '917657984V', '03/12/1991', 'Collection officer', '09/08/2017', '0774567398', '34/2,Kalyani street,Gampaha', 'hiru@gmail.com', 2),
(5, 'Weerasuriyage Vimal Kalana', 'W.V.Kalana', '856782967V', '11/05/1985', 'Delivery driver', '14/08/2017', '0778467987', '30/4,Kingway road,Malabe', 'vimalkalana@gmail.com', 1),
(6, 'Ramesh Perera', 'R.Perera', '896523145V', '08/24/2017', 'Outlet Supervisor', '21/03/1526', '0715863251', 'Colombo', 'fghj@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `idInvoice` int(11) NOT NULL,
  `InvoiceValue` double DEFAULT NULL,
  `InvoiceNetValue` double DEFAULT NULL,
  `Collection_idCollection` int(11) NOT NULL,
  `Collection_CollectionReport_idCollectionReport` int(11) NOT NULL,
  `Collection_CollectionReport_Outlet_idOutlet` int(11) NOT NULL,
  `Customer_idCustomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE IF NOT EXISTS `outlet` (
  `idOutlet` int(11) NOT NULL,
  `Outletname` varchar(45) NOT NULL,
  `OutletLocation` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`idOutlet`, `Outletname`, `OutletLocation`) VALUES
(1, 'Cargills product distributer', 'Negombo'),
(2, 'Hayles product distributer', 'Gampaha');

-- --------------------------------------------------------

--
-- Table structure for table `outlet_expends_petty_cash`
--

CREATE TABLE IF NOT EXISTS `outlet_expends_petty_cash` (
  `Outlet_idOutlet` int(11) NOT NULL,
  `Petty_Cash_idPetty_Cash` int(11) NOT NULL,
  `Outlet_expends_Petty_Cash_Amount` double DEFAULT NULL,
  `Company_Work_Period_Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_Company_Work_Period_toDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `idPayment` int(11) NOT NULL,
  `PaymentAmount` double DEFAULT NULL,
  `Invoice_idInvoice` int(11) NOT NULL,
  `Invoice_Collection_idCollection` int(11) NOT NULL,
  `Invoice_Collection_CollectionReport_idCollectionReport` int(11) NOT NULL,
  `Invoice_Collection_CollectionReport_Outlet_idOutlet` int(11) NOT NULL,
  `Invoice_Customer_idCustomer` int(11) NOT NULL,
  `Credit_idCredit` int(11) NOT NULL,
  `Cash_idCash` int(11) NOT NULL,
  `Cheque_idCheque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash`
--

CREATE TABLE IF NOT EXISTS `petty_cash` (
  `idPetty_Cash` int(11) NOT NULL,
  `Petty_CashType` varchar(45) NOT NULL,
  `Petty_CashDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `idSalary` int(11) NOT NULL,
  `Salarybasic` double NOT NULL,
  `SalaryDeductedAmount` double DEFAULT NULL,
  `SalaryAllowanceAmount` double DEFAULT NULL,
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL,
  `Salary_ETF_Amount` double DEFAULT NULL,
  `Salary_Insentive_Amount` double DEFAULT NULL,
  `Company_Work_Period_Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_Company_Work_Period_toDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_has_allowance`
--

CREATE TABLE IF NOT EXISTS `salary_has_allowance` (
  `Salary_idSalary` int(11) NOT NULL,
  `Allowance_idAllowance` int(11) NOT NULL,
  `Salary_has_Allowance_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_has_deduction`
--

CREATE TABLE IF NOT EXISTS `salary_has_deduction` (
  `Salary_idSalary` int(11) NOT NULL,
  `Deduction_idDeduction` int(11) NOT NULL,
  `Salary_has_Deduction_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL,
  `User_idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL,
  `UserDescription` varchar(45) DEFAULT NULL,
  `Username` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `UserDescription`, `Username`, `UserPassword`) VALUES
(1, 'outlet supervisor', 'S01', 's01'),
(10, '', 'achini', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`idAllowance`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`,`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`), ADD KEY `fk_Employee_has_Company_Work_Period_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`), ADD KEY `fk_Employee_has_Company_Work_Period_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`idCash`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`idCheque`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`idCollection`,`CollectionReport_idCollectionReport`,`CollectionReport_Outlet_idOutlet`), ADD KEY `fk_Collection_CollectionReport1_idx` (`CollectionReport_idCollectionReport`,`CollectionReport_Outlet_idOutlet`);

--
-- Indexes for table `collectionofficer`
--
ALTER TABLE `collectionofficer`
  ADD PRIMARY KEY (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`,`Employee_idEmployee`,`Employee_Outlet_idOutlet`), ADD KEY `fk_CollectionOfficer_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`);

--
-- Indexes for table `collectionreport`
--
ALTER TABLE `collectionreport`
  ADD PRIMARY KEY (`idCollectionReport`,`Outlet_idOutlet`), ADD KEY `fk_CollectionReport_Outlet1_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `company_work_period`
--
ALTER TABLE `company_work_period`
  ADD PRIMARY KEY (`Company_Work_Period_fromDate`,`Company_Work_Period_toDate`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`idCredit`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`idDeduction`);

--
-- Indexes for table `delivery_vehicle`
--
ALTER TABLE `delivery_vehicle`
  ADD PRIMARY KEY (`idDelivery_Vehicle`,`Outlet_idOutlet`), ADD KEY `fk_Delivery_Vehicle_Outlet1_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idEmployee`,`Outlet_idOutlet`), ADD KEY `fk_Employee_Outlet_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idInvoice`,`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`,`Customer_idCustomer`), ADD KEY `fk_Invoice_Collection1_idx` (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`), ADD KEY `fk_Invoice_Customer1_idx` (`Customer_idCustomer`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`idOutlet`);

--
-- Indexes for table `outlet_expends_petty_cash`
--
ALTER TABLE `outlet_expends_petty_cash`
  ADD PRIMARY KEY (`Outlet_idOutlet`,`Petty_Cash_idPetty_Cash`), ADD KEY `fk_Outlet_has_Petty_Cash_Petty_Cash1_idx` (`Petty_Cash_idPetty_Cash`), ADD KEY `fk_Outlet_has_Petty_Cash_Outlet1_idx` (`Outlet_idOutlet`), ADD KEY `fk_Outlet_expends_Petty_Cash_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idPayment`,`Invoice_idInvoice`,`Invoice_Collection_idCollection`,`Invoice_Collection_CollectionReport_idCollectionReport`,`Invoice_Collection_CollectionReport_Outlet_idOutlet`,`Invoice_Customer_idCustomer`), ADD KEY `fk_Payment_Invoice1_idx` (`Invoice_idInvoice`,`Invoice_Collection_idCollection`,`Invoice_Collection_CollectionReport_idCollectionReport`,`Invoice_Collection_CollectionReport_Outlet_idOutlet`,`Invoice_Customer_idCustomer`), ADD KEY `fk_Payment_Credit1_idx` (`Credit_idCredit`), ADD KEY `fk_Payment_Cash1_idx` (`Cash_idCash`), ADD KEY `fk_Payment_Cheque1_idx` (`Cheque_idCheque`);

--
-- Indexes for table `petty_cash`
--
ALTER TABLE `petty_cash`
  ADD PRIMARY KEY (`idPetty_Cash`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`idSalary`), ADD KEY `fk_Salary_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`), ADD KEY `fk_Salary_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`);

--
-- Indexes for table `salary_has_allowance`
--
ALTER TABLE `salary_has_allowance`
  ADD PRIMARY KEY (`Salary_idSalary`,`Allowance_idAllowance`), ADD KEY `fk_Salary_has_Allowance_Allowance1_idx` (`Allowance_idAllowance`), ADD KEY `fk_Salary_has_Allowance_Salary1_idx` (`Salary_idSalary`);

--
-- Indexes for table `salary_has_deduction`
--
ALTER TABLE `salary_has_deduction`
  ADD PRIMARY KEY (`Salary_idSalary`,`Deduction_idDeduction`), ADD KEY `fk_Salary_has_Deduction_Deduction1_idx` (`Deduction_idDeduction`), ADD KEY `fk_Salary_has_Deduction_Salary1_idx` (`Salary_idSalary`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`), ADD KEY `fk_Supervisor_User1_idx` (`User_idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `idAllowance` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `idCollection` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collectionreport`
--
ALTER TABLE `collectionreport`
  MODIFY `idCollectionReport` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `idDeduction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_vehicle`
--
ALTER TABLE `delivery_vehicle`
  MODIFY `idDelivery_Vehicle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idEmployee` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `idOutlet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idPayment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petty_cash`
--
ALTER TABLE `petty_cash`
  MODIFY `idPetty_Cash` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `idSalary` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
ADD CONSTRAINT `fk_Employee_has_Company_Work_Period_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`, `Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Employee_has_Company_Work_Period_Employee1` FOREIGN KEY (`Employee_idEmployee`, `Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
ADD CONSTRAINT `fk_Collection_CollectionReport1` FOREIGN KEY (`CollectionReport_idCollectionReport`, `CollectionReport_Outlet_idOutlet`) REFERENCES `collectionreport` (`idCollectionReport`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collectionofficer`
--
ALTER TABLE `collectionofficer`
ADD CONSTRAINT `fk_CollectionOfficer_Collection1` FOREIGN KEY (`Collection_idCollection`, `Collection_CollectionReport_idCollectionReport`, `Collection_CollectionReport_Outlet_idOutlet`) REFERENCES `collection` (`idCollection`, `CollectionReport_idCollectionReport`, `CollectionReport_Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_CollectionOfficer_Employee1` FOREIGN KEY (`Employee_idEmployee`, `Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collectionreport`
--
ALTER TABLE `collectionreport`
ADD CONSTRAINT `fk_CollectionReport_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `delivery_vehicle`
--
ALTER TABLE `delivery_vehicle`
ADD CONSTRAINT `fk_Delivery_Vehicle_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `fk_Employee_Outlet` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
ADD CONSTRAINT `fk_Invoice_Collection1` FOREIGN KEY (`Collection_idCollection`, `Collection_CollectionReport_idCollectionReport`, `Collection_CollectionReport_Outlet_idOutlet`) REFERENCES `collection` (`idCollection`, `CollectionReport_idCollectionReport`, `CollectionReport_Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Invoice_Customer1` FOREIGN KEY (`Customer_idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outlet_expends_petty_cash`
--
ALTER TABLE `outlet_expends_petty_cash`
ADD CONSTRAINT `fk_Outlet_expends_Petty_Cash_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`, `Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Petty_Cash1` FOREIGN KEY (`Petty_Cash_idPetty_Cash`) REFERENCES `petty_cash` (`idPetty_Cash`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `fk_Payment_Cash1` FOREIGN KEY (`Cash_idCash`) REFERENCES `cash` (`idCash`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Payment_Cheque1` FOREIGN KEY (`Cheque_idCheque`) REFERENCES `cheque` (`idCheque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Payment_Credit1` FOREIGN KEY (`Credit_idCredit`) REFERENCES `credit` (`idCredit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Payment_Invoice1` FOREIGN KEY (`Invoice_idInvoice`, `Invoice_Collection_idCollection`, `Invoice_Collection_CollectionReport_idCollectionReport`, `Invoice_Collection_CollectionReport_Outlet_idOutlet`, `Invoice_Customer_idCustomer`) REFERENCES `invoice` (`idInvoice`, `Collection_idCollection`, `Collection_CollectionReport_idCollectionReport`, `Collection_CollectionReport_Outlet_idOutlet`, `Customer_idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
ADD CONSTRAINT `fk_Salary_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`, `Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Salary_Employee1` FOREIGN KEY (`Employee_idEmployee`, `Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary_has_allowance`
--
ALTER TABLE `salary_has_allowance`
ADD CONSTRAINT `fk_Salary_has_Allowance_Allowance1` FOREIGN KEY (`Allowance_idAllowance`) REFERENCES `allowance` (`idAllowance`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Salary_has_Allowance_Salary1` FOREIGN KEY (`Salary_idSalary`) REFERENCES `salary` (`idSalary`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary_has_deduction`
--
ALTER TABLE `salary_has_deduction`
ADD CONSTRAINT `fk_Salary_has_Deduction_Deduction1` FOREIGN KEY (`Deduction_idDeduction`) REFERENCES `deduction` (`idDeduction`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Salary_has_Deduction_Salary1` FOREIGN KEY (`Salary_idSalary`) REFERENCES `salary` (`idSalary`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
ADD CONSTRAINT `fk_Supervisor_Employee1` FOREIGN KEY (`Employee_idEmployee`, `Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Supervisor_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
