-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 09:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `cheque_invoice_id` int(11) NOT NULL,
  `ChequeNumber` varchar(200) NOT NULL,
  `ChequeBankName` varchar(200) NOT NULL,
  `ChequeBankBranch` varchar(200) NOT NULL,
  `ChequeBKdate` varchar(45) DEFAULT NULL,
  `ChequeAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cheque`
--

INSERT INTO `cheque` (`cheque_invoice_id`, `ChequeNumber`, `ChequeBankName`, `ChequeBankBranch`, `ChequeBKdate`, `ChequeAmount`) VALUES
(100, '568923', 'BOC', 'Mirigama', '5/5/2018', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `idCollection` int(11) NOT NULL,
  `CollectionDriver` varchar(45) NOT NULL,
  `CollectionVehicle` varchar(45) NOT NULL,
  `CollectionArea` varchar(45) NOT NULL,
  `Outlet_idOutlet` int(11) NOT NULL,
  `CollectionDate` varchar(20) NOT NULL,
  `CollectionOfficerName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`idCollection`, `CollectionDriver`, `CollectionVehicle`, `CollectionArea`, `Outlet_idOutlet`, `CollectionDate`, `CollectionOfficerName`) VALUES
(1, 'K.Perera', 'HW0967', 'Dalupotha', 1, '20/08/2017', 'C.kulathunga');

-- --------------------------------------------------------

--
-- Table structure for table `company_work_period`
--

CREATE TABLE `company_work_period` (
  `Company_Work_Period_fromDate` date NOT NULL,
  `Company_Work_Period_toDate` date NOT NULL,
  `Company_Work_Period_WorkingDays` int(11) DEFAULT NULL,
  `Company_Work_Period_Holidays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `invoice_credit_id` int(11) NOT NULL,
  `customer_id` varchar(45) NOT NULL,
  `total_credit` double DEFAULT NULL,
  `credit_topay` double NOT NULL DEFAULT '0',
  `credit_start_date` varchar(25) NOT NULL,
  `credit_lasttaken_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`invoice_credit_id`, `customer_id`, `total_credit`, `credit_topay`, `credit_start_date`, `credit_lasttaken_date`) VALUES
(100, 'DSU02792', 1000, 1000, '2017-12-04 09:29:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `CustomerCode` varchar(45) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerAddress` varchar(300) DEFAULT NULL,
  `CustomerContact` varchar(45) DEFAULT NULL,
  `CustomerRegDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `CustomerCode`, `CustomerName`, `CustomerAddress`, `CustomerContact`, `CustomerRegDate`) VALUES
(1, 'DSP00498', 'SPECIAL EVENTS', '', '0775643256', NULL),
(3, 'DSU02792', 'SUN  SHINE  SUPER  MARKET', '', '0719678543', '');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `idDeduction` int(11) NOT NULL,
  `DeductionType` varchar(45) DEFAULT NULL,
  `DeductionAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_vehicle`
--

CREATE TABLE `delivery_vehicle` (
  `idDelivery_Vehicle` int(11) NOT NULL,
  `Delivery_VehiclePlateNumber` varchar(45) DEFAULT NULL,
  `Outlet_idOutlet` int(11) NOT NULL,
  `Delivery_VehicleType` varchar(45) DEFAULT NULL,
  `Delivery_VehicleName` varchar(45) DEFAULT NULL,
  `Delivery_VehicleEngineNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleChassisNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleRegistrationDate` varchar(45) DEFAULT NULL,
  `Delivery_VehicleOwnerName` varchar(45) DEFAULT NULL,
  `Delivery_VehicleOwnerAddress` varchar(250) DEFAULT NULL,
  `Delivery_VehicleOwnerTelephoneNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleLicenNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleLicenStartingDate` varchar(45) NOT NULL,
  `Delivery_VehicleLicenEndingDate` varchar(45) NOT NULL,
  `Delivery_VehicleInsurancePolicyNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleInsuranceSerielNo` varchar(45) DEFAULT NULL,
  `Delivery_VehicleInsuranceStartingDate` varchar(45) NOT NULL,
  `Delivery_VehicleInsuranceEndingDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_vehicle`
--

INSERT INTO `delivery_vehicle` (`idDelivery_Vehicle`, `Delivery_VehiclePlateNumber`, `Outlet_idOutlet`, `Delivery_VehicleType`, `Delivery_VehicleName`, `Delivery_VehicleEngineNo`, `Delivery_VehicleChassisNo`, `Delivery_VehicleRegistrationDate`, `Delivery_VehicleOwnerName`, `Delivery_VehicleOwnerAddress`, `Delivery_VehicleOwnerTelephoneNo`, `Delivery_VehicleLicenNo`, `Delivery_VehicleLicenStartingDate`, `Delivery_VehicleLicenEndingDate`, `Delivery_VehicleInsurancePolicyNo`, `Delivery_VehicleInsuranceSerielNo`, `Delivery_VehicleInsuranceStartingDate`, `Delivery_VehicleInsuranceEndingDate`) VALUES
(1, 'HW0967', 1, 'Lorry', 'Toyota', '567367', '84758773998', '02/03/1993', 'Hamid Perera', '', '0716789352', 'cs871389189', '04/12/2016', '04/12/2017', '83989', '476', '04/09/2016', '04/09/2017'),
(2, 'JK097', 1, 'Lorry', 'Demo Batta', '848742', 'g36473', '09/08/2000', 'Darmapala', '', '0714678372', '78899', '04/11/2016', '04/11/2017', '873', '288', '04/11/2016', '04/11/2016');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idEmployee`, `EmployeeFullName`, `EmployeeNameWithInitials`, `EmployeeNIC`, `EmployeeBirthdate`, `EmployeePosition`, `EmployeeJoinedDate`, `EmployeeContactNumber`, `EmployeeAddress`, `EmployeeEmail`, `Outlet_idOutlet`) VALUES
(2, 'Kamal Perera', 'K.Perera', '821467209V', '10/03/1982', 'Delivery driver', '04/08/2016', '0715678345', '70/3,Namal mawatha,Gampaha', 'kamalperera@gmail.com', 1),
(4, 'Hirunika Sumuduni karunathilaka', 'H.S.Karunathilaka', '917657984V', '03/12/1991', 'Collection officer', '09/08/2017', '0774567398', '34/2,Kalyani street,Gampaha', 'hiru@gmail.com', 2),
(5, 'Weerasuriyage Vimal Kalana', 'W.V.Kalana', '856782967V', '11/05/1985', 'Outlet Supervisor', '14/08/2017', '0778467987', '30/4,Kingway road,Malabe', 'vimalkalana@gmail.com', 1),
(6, 'Chanaka Kulathunga', 'C.kulathunga', '807342820V', '07/11/1980', 'Collection officer', '23/05/2015', '0775679431', 'Smagai mawatha,Negombo', 'chanakak@gmail.com', 1),
(7, 'Kasun Krishantha', 'K.Krishantha', '94250114V', '06/09/1994', 'Outlet Supervisor', '21/08/2017', '0725674563', 'Batapola,Ambalangoda', 'kasun@gmail.com', 1),
(9, 'Dilmi Shanika', 'D.Shanika', '807965213V', '5/12/1980', 'Outlet Supervisor', '05/05/2017', '0715498264', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idInvoice` int(11) NOT NULL,
  `InvoiceValue` double DEFAULT NULL,
  `InvoiceNetValue` double DEFAULT NULL,
  `Customer_idCustomer` varchar(45) NOT NULL,
  `cash` double NOT NULL,
  `cheque` double NOT NULL,
  `credit` double NOT NULL,
  `SalesRtn` double DEFAULT NULL,
  `Variance` double DEFAULT NULL,
  `Discount` double DEFAULT NULL,
  `MKTrtn` double DEFAULT NULL,
  `Remarks` varchar(200) DEFAULT NULL,
  `Collection_idCollection` int(11) NOT NULL,
  `invoice_order_date` varchar(25) NOT NULL,
  `invoice_complete_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idInvoice`, `InvoiceValue`, `InvoiceNetValue`, `Customer_idCustomer`, `cash`, `cheque`, `credit`, `SalesRtn`, `Variance`, `Discount`, `MKTrtn`, `Remarks`, `Collection_idCollection`, `invoice_order_date`, `invoice_complete_date`) VALUES
(100, 5000, 5000, 'DSU02792', 1000, 2000, 1000, 0, 1000, 0, 0, '', 1, '', '2017-12-04 09:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `idOutlet` int(11) NOT NULL,
  `Outletname` varchar(45) NOT NULL,
  `OutletLocation` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`idOutlet`, `Outletname`, `OutletLocation`) VALUES
(1, 'Cargills product distributer', 'Negombo'),
(2, 'Hayles product distributer', 'Gampaha'),
(3, 'Outlet3', 'Colombo'),
(4, 'Outlet4', 'Negambo');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash`
--

CREATE TABLE `petty_cash` (
  `idPetty_Cash` int(11) NOT NULL,
  `Petty_CashType` varchar(45) NOT NULL,
  `Petty_CashDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petty_cash`
--

INSERT INTO `petty_cash` (`idPetty_Cash`, `Petty_CashType`, `Petty_CashDescription`) VALUES
(1, 'Stationary', ''),
(2, 'Painting', ''),
(3, 'Cleaning Equipment', '');

-- --------------------------------------------------------

--
-- Table structure for table `preorder_invoice`
--

CREATE TABLE `preorder_invoice` (
  `idInvoice` int(50) NOT NULL,
  `Customer_idCustomer` varchar(45) NOT NULL,
  `InvoiceValue` double NOT NULL,
  `invoice_order_date` varchar(20) NOT NULL,
  `outletID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preorder_invoice`
--

INSERT INTO `preorder_invoice` (`idInvoice`, `Customer_idCustomer`, `InvoiceValue`, `invoice_order_date`, `outletID`) VALUES
(100, 'DSU02792', 5000, '12/19/2017', 4);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_has_allowance`
--

CREATE TABLE `salary_has_allowance` (
  `Salary_idSalary` int(11) NOT NULL,
  `Allowance_idAllowance` int(11) NOT NULL,
  `Salary_has_Allowance_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_has_deduction`
--

CREATE TABLE `salary_has_deduction` (
  `Salary_idSalary` int(11) NOT NULL,
  `Deduction_idDeduction` int(11) NOT NULL,
  `Salary_has_Deduction_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL,
  `Employee_idEmployee` int(11) NOT NULL,
  `Employee_Outlet_idOutlet` int(11) NOT NULL,
  `roleName` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `createdBy` int(10) NOT NULL,
  `createdDtm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `Username`, `UserPassword`, `Employee_idEmployee`, `Employee_Outlet_idOutlet`, `roleName`, `mobile`, `createdBy`, `createdDtm`) VALUES
(3, 'S/01/07', '3daa2c246564baf6d1909404d0c52ca53c9e7917', 7, 1, 'Outlet Supervisor', '0775678543', 5, '2017-10-28'),
(4, 'S/04/09', '5738afb080edbb735fc0b7521fdd1ab73eaaf572', 9, 4, 'Outlet Supervisor', '0715498264', 5, '2017-12-04'),
(5, 'S/01/05', 'f54ff9355c7e4573353657e8a7b077e386a500a9', 5, 1, 'Admin', '0775678431', 5, '2017-12-04');

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
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`cheque_invoice_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`idCollection`,`Outlet_idOutlet`),
  ADD KEY `fk_Collection_Outlet1_idx` (`Outlet_idOutlet`);

--
-- Indexes for table `company_work_period`
--
ALTER TABLE `company_work_period`
  ADD PRIMARY KEY (`Company_Work_Period_fromDate`,`Company_Work_Period_toDate`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`invoice_credit_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerCode`);

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
  ADD PRIMARY KEY (`idInvoice`,`Customer_idCustomer`,`Collection_idCollection`),
  ADD KEY `fk_Invoice_Customer1_idx` (`Customer_idCustomer`),
  ADD KEY `fk_Invoice_Collection1_idx` (`Collection_idCollection`);

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
-- Indexes for table `petty_cash`
--
ALTER TABLE `petty_cash`
  ADD PRIMARY KEY (`idPetty_Cash`);

--
-- Indexes for table `preorder_invoice`
--
ALTER TABLE `preorder_invoice`
  ADD PRIMARY KEY (`idInvoice`),
  ADD KEY `outletID` (`outletID`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_User_Employee1_idx` (`Employee_idEmployee`,`Employee_Outlet_idOutlet`);

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
  MODIFY `idCollection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `idDeduction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_vehicle`
--
ALTER TABLE `delivery_vehicle`
  MODIFY `idDelivery_Vehicle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idEmployee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `idOutlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `petty_cash`
--
ALTER TABLE `petty_cash`
  MODIFY `idPetty_Cash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `idSalary` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `fk_cheque_id` FOREIGN KEY (`cheque_invoice_id`) REFERENCES `invoice` (`idInvoice`);

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `fk_Collection_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Invoice_Collection1` FOREIGN KEY (`Collection_idCollection`) REFERENCES `collection` (`idCollection`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_invoice_customer` FOREIGN KEY (`Customer_idCustomer`) REFERENCES `customer` (`CustomerCode`);

--
-- Constraints for table `outlet_expends_petty_cash`
--
ALTER TABLE `outlet_expends_petty_cash`
  ADD CONSTRAINT `fk_Outlet_expends_Petty_Cash_Company_Work_Period1` FOREIGN KEY (`Company_Work_Period_Company_Work_Period_fromDate`,`Company_Work_Period_Company_Work_Period_toDate`) REFERENCES `company_work_period` (`Company_Work_Period_fromDate`, `Company_Work_Period_toDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Outlet1` FOREIGN KEY (`Outlet_idOutlet`) REFERENCES `outlet` (`idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Outlet_has_Petty_Cash_Petty_Cash1` FOREIGN KEY (`Petty_Cash_idPetty_Cash`) REFERENCES `petty_cash` (`idPetty_Cash`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preorder_invoice`
--
ALTER TABLE `preorder_invoice`
  ADD CONSTRAINT `fk_outletid` FOREIGN KEY (`outletID`) REFERENCES `outlet` (`idOutlet`);

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
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Employee1` FOREIGN KEY (`Employee_idEmployee`,`Employee_Outlet_idOutlet`) REFERENCES `employee` (`idEmployee`, `Outlet_idOutlet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
