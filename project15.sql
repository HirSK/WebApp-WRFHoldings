-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 09:49 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project15`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `idAllowance` int(11) NOT NULL,
  `AllowanceName` varchar(45) DEFAULT NULL,
  `AllowanceAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
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

CREATE TABLE `cash` (
  `idCash` int(11) NOT NULL,
  `CashAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
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

CREATE TABLE `collection` (
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

CREATE TABLE `collectionofficer` (
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

CREATE TABLE `collectionreport` (
  `idCollectionReport` int(11) NOT NULL,
  `CollectionReportDate` varchar(45) NOT NULL,
  `Outlet_idOutlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_work_period`
--

CREATE TABLE `company_work_period` (
  `Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_toDate` date NOT NULL,
  `Company_Work_Period_WorkingDays` int(11) DEFAULT NULL,
  `Company_Work_Period_Holidays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `idCredit` int(11) NOT NULL,
  `CreditAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerAddress` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `idDeduction` int(11) NOT NULL,
  `DeductionType` varchar(45) DEFAULT NULL,
  `DeductionAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_vehicle`
--

CREATE TABLE `delivery_vehicle` (
  `idDelivery_Vehicle` int(11) NOT NULL,
  `Delivery_VehiclePlateNumber` varchar(45) DEFAULT NULL,
  `Outlet_idOutlet` int(11) NOT NULL,
  `Delivery_Vehicle_LastInsuaranceDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idEmployee`, `EmployeeFullName`, `EmployeeNameWithInitials`, `EmployeeNIC`, `EmployeeBirthdate`, `EmployeePosition`, `EmployeeJoinedDate`, `EmployeeContactNumber`, `EmployeeAddress`, `EmployeeEmail`, `Outlet_idOutlet`) VALUES
(2, 'Kamal Perera', 'K.Perera', '821467209V', '10/03/1982', 'Outlet Supervisor', '04/08/2016', '0715678345', '70/3,Namal mawatha,Gampaha', 'kamalperera@gmail.com', 1),
(4, 'Hirunika Sumuduni karunathilaka', 'H.S.Karunathilaka', '917657984V', '03/12/1991', 'Collection officer', '09/08/2017', '0774567398', '34/2,Kalyani street,Gampaha', 'hiru@gmail.com', 2),
(5, 'Weerasuriyage Vimal Kalana', 'W.V.Kalana', '856782967V', '11/05/1985', 'Delivery driver', '14/08/2017', '0778467987', '30/4,Kingway road,Malabe', 'vimalkalana@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
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

CREATE TABLE `outlet` (
  `idOutlet` int(11) NOT NULL,
  `Outletname` varchar(45) NOT NULL,
  `OutletLocation` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `outlet_expends_petty_cash` (
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

CREATE TABLE `payment` (
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

CREATE TABLE `petty_cash` (
  `idPetty_Cash` int(11) NOT NULL,
  `Petty_CashType` varchar(45) NOT NULL,
  `Petty_CashDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
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

CREATE TABLE `salary_has_allowance` (
  `Salary_idSalary` int(11) NOT NULL,
  `Allowance_idAllowance` int(11) NOT NULL,
  `Salary_has_Allowance_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_has_deduction`
--

CREATE TABLE `salary_has_deduction` (
  `Salary_idSalary` int(11) NOT NULL,
  `Deduction_idDeduction` int(11) NOT NULL,
  `Salary_has_Deduction_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL,
  `User_idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `UserDescription` varchar(45) DEFAULT NULL,
  `Username` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `UserDescription`, `Username`, `UserPassword`) VALUES
(1, 'outlet supervisor', 'S01', 's01');

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
  ADD PRIMARY KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`,`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`),
  ADD KEY `fk_Employee_has_Company_Work_Period_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`),
  ADD KEY `fk_Employee_has_Company_Work_Period_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`);

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
  ADD PRIMARY KEY (`idCollection`,`CollectionReport_idCollectionReport`,`CollectionReport_Outlet_idOutlet`),
  ADD KEY `fk_Collection_CollectionReport1_idx` (`CollectionReport_idCollectionReport`,`CollectionReport_Outlet_idOutlet`);

--
-- Indexes for table `collectionofficer`
--
ALTER TABLE `collectionofficer`
  ADD PRIMARY KEY (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`,`Employee_idEmployee`,`Employee_Outlet_idOutlet`),
  ADD KEY `fk_CollectionOfficer_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`);

--
-- Indexes for table `collectionreport`
--
ALTER TABLE `collectionreport`
  ADD PRIMARY KEY (`idCollectionReport`,`Outlet_idOutlet`),
  ADD KEY `fk_CollectionReport_Outlet1_idx` (`Outlet_idOutlet`);

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
  ADD PRIMARY KEY (`idDelivery_Vehicle`,`Outlet_idOutlet`),
  ADD KEY `fk_Delivery_Vehicle_Outlet1_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idEmployee`,`Outlet_idOutlet`),
  ADD KEY `fk_Employee_Outlet_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idInvoice`,`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`,`Customer_idCustomer`),
  ADD KEY `fk_Invoice_Collection1_idx` (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`),
  ADD KEY `fk_Invoice_Customer1_idx` (`Customer_idCustomer`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`idOutlet`);

--
-- Indexes for table `outlet_expends_petty_cash`
--
ALTER TABLE `outlet_expends_petty_cash`
  ADD PRIMARY KEY (`Outlet_idOutlet`,`Petty_Cash_idPetty_Cash`),
  ADD KEY `fk_Outlet_has_Petty_Cash_Petty_Cash1_idx` (`Petty_Cash_idPetty_Cash`),
  ADD KEY `fk_Outlet_has_Petty_Cash_Outlet1_idx` (`Outlet_idOutlet`),
  ADD KEY `fk_Outlet_expends_Petty_Cash_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idPayment`,`Invoice_idInvoice`,`Invoice_Collection_idCollection`,`Invoice_Collection_CollectionReport_idCollectionReport`,`Invoice_Collection_CollectionReport_Outlet_idOutlet`,`Invoice_Customer_idCustomer`),
  ADD KEY `fk_Payment_Invoice1_idx` (`Invoice_idInvoice`,`Invoice_Collection_idCollection`,`Invoice_Collection_CollectionReport_idCollectionReport`,`Invoice_Collection_CollectionReport_Outlet_idOutlet`,`Invoice_Customer_idCustomer`),
  ADD KEY `fk_Payment_Credit1_idx` (`Credit_idCredit`),
  ADD KEY `fk_Payment_Cash1_idx` (`Cash_idCash`),
  ADD KEY `fk_Payment_Cheque1_idx` (`Cheque_idCheque`);

--
-- Indexes for table `petty_cash`
--
ALTER TABLE `petty_cash`
  ADD PRIMARY KEY (`idPetty_Cash`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`idSalary`),
  ADD KEY `fk_Salary_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`),
  ADD KEY `fk_Salary_Company_Work_Period1_idx` (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`);

--
-- Indexes for table `salary_has_allowance`
--
ALTER TABLE `salary_has_allowance`
  ADD PRIMARY KEY (`Salary_idSalary`,`Allowance_idAllowance`),
  ADD KEY `fk_Salary_has_Allowance_Allowance1_idx` (`Allowance_idAllowance`),
  ADD KEY `fk_Salary_has_Allowance_Salary1_idx` (`Salary_idSalary`);

--
-- Indexes for table `salary_has_deduction`
--
ALTER TABLE `salary_has_deduction`
  ADD PRIMARY KEY (`Salary_idSalary`,`Deduction_idDeduction`),
  ADD KEY `fk_Salary_has_Deduction_Deduction1_idx` (`Deduction_idDeduction`),
  ADD KEY `fk_Salary_has_Deduction_Salary1_idx` (`Salary_idSalary`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`),
  ADD KEY `fk_Supervisor_User1_idx` (`User_idUser`);

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
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `idDeduction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_vehicle`
--
ALTER TABLE `delivery_vehicle`
  MODIFY `idDelivery_Vehicle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idEmployee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `idOutlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_Employee_has_Company_Work_Period_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Employee_has_Company_Work_Period_Employee1` FOREIGN KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `fk_Collection_CollectionReport1` FOREIGN KEY (`CollectionReport_idCollectionReport`,`CollectionReport_Outlet_idOutlet`) REFERENCES `collectionreport` (`idCollectionReport`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collectionofficer`
--
ALTER TABLE `collectionofficer`
  ADD CONSTRAINT `fk_CollectionOfficer_Collection1` FOREIGN KEY (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`) REFERENCES `collection` (`idCollection`, `CollectionReport_idCollectionReport`, `CollectionReport_Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CollectionOfficer_Employee1` FOREIGN KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Invoice_Collection1` FOREIGN KEY (`Collection_idCollection`,`Collection_CollectionReport_idCollectionReport`,`Collection_CollectionReport_Outlet_idOutlet`) REFERENCES `collection` (`idCollection`, `CollectionReport_idCollectionReport`, `CollectionReport_Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Invoice_Customer1` FOREIGN KEY (`Customer_idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outlet_expends_petty_cash`
--
ALTER TABLE `outlet_expends_petty_cash`
  ADD CONSTRAINT `fk_Outlet_expends_Petty_Cash_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Petty_Cash1` FOREIGN KEY (`Petty_Cash_idPetty_Cash`) REFERENCES `petty_cash` (`idPetty_Cash`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_Cash1` FOREIGN KEY (`Cash_idCash`) REFERENCES `cash` (`idCash`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Payment_Cheque1` FOREIGN KEY (`Cheque_idCheque`) REFERENCES `cheque` (`idCheque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Payment_Credit1` FOREIGN KEY (`Credit_idCredit`) REFERENCES `credit` (`idCredit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Payment_Invoice1` FOREIGN KEY (`Invoice_idInvoice`,`Invoice_Collection_idCollection`,`Invoice_Collection_CollectionReport_idCollectionReport`,`Invoice_Collection_CollectionReport_Outlet_idOutlet`,`Invoice_Customer_idCustomer`) REFERENCES `invoice` (`idInvoice`, `Collection_idCollection`, `Collection_CollectionReport_idCollectionReport`, `Collection_CollectionReport_Outlet_idOutlet`, `Customer_idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `fk_Salary_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Salary_Employee1` FOREIGN KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Supervisor_Employee1` FOREIGN KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Supervisor_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
