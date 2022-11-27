-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 09:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` varchar(13) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `username`, `email`, `pnumber`, `password`) VALUES
(1, 'Anduamlak Alehegne', 'nandu', 'anduamlakalehegnee@gmail.com', '+251985253384', 'nandu1221');

-- --------------------------------------------------------

--
-- Table structure for table `admin_feedback`
--

CREATE TABLE `admin_feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_feedback`
--

INSERT INTO `admin_feedback` (`feedback_id`, `name`, `email`, `content`, `date`) VALUES
(4, 'wqqqqqqq', 'wqqqqqqqqq', 'qwwwwwwwww', '2022-05-22'),
(6, 'gulilate', 'gule@gmail.com ', 'thank you for youe services ', '2022-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL,
  `TIN_No` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` varchar(13) NOT NULL,
  `password` varchar(16) NOT NULL,
  `age` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `region` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `officer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `TIN_No`, `first_name`, `last_name`, `username`, `email`, `pnumber`, `password`, `age`, `date`, `region`, `zone`, `kebele`, `sex`, `officer_id`) VALUES
(20, 222222, 'Kegetaneh', 'Tarekegn', 'kecha', 'kecha@gmail.com', '0987865362', '868933', '22', '2022-05-22', 'debub', 'sodo', '3', 'male', 36),
(21, 11122233, 'abel', 'sisay', 'abela', 'abel@gmail.com', '0934432552', '126134', '24', '2022-05-22', '11', '11', '11', 'male', 36),
(22, 121212, 'abdi', 'muleta', 'abdiko', 'abdi@gmail.com ', '0922112211', '', '22', '2022-06-11', 'oromiya', 'ambo', '16', 'male', 43);

-- --------------------------------------------------------

--
-- Table structure for table `excise_tax_declaration`
--

CREATE TABLE `excise_tax_declaration` (
  `id` int(11) NOT NULL,
  `TIN_No` int(10) NOT NULL,
  `declaration_date` date NOT NULL,
  `excise_tax_registraion_number` int(10) NOT NULL,
  `tax_period` date NOT NULL,
  `name_of_organization_or_tax_payer` varchar(100) NOT NULL,
  `agent_TIN` int(10) NOT NULL,
  `organization_TIN` int(10) NOT NULL,
  `schedule` varchar(10) NOT NULL,
  `excise_tax_on_taxable_goods` int(12) NOT NULL,
  `excise_tax_credit_for_the_month` int(12) NOT NULL,
  `net_amount_to_be_paid` int(12) NOT NULL,
  `dates` date NOT NULL,
  `amount_of_sales_for_the_month` int(12) NOT NULL,
  `type_of_product` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `declaration_number` int(10) NOT NULL,
  `excise_tax_credit_forwared_frome_previus_month` int(12) NOT NULL,
  `excise_tax_amount_paid_on_input` int(12) NOT NULL,
  `excise_tax_credit_avilable_for_next_month` int(12) NOT NULL,
  `purchase_invoice` int(10) NOT NULL,
  `seller_TIN` int(10) NOT NULL,
  `types_of_product` varchar(100) NOT NULL,
  `quantitys` int(110) NOT NULL,
  `value` int(12) NOT NULL,
  `excise_tax` int(12) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `detes` date NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(20) NOT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `full_name`, `email`, `content`, `date`, `customer_id`, `officer_id`) VALUES
(2, 'ss', 'ss@email.com', 'rjh rfh frur fryrgri iyu giuyg guygv uygor ', '2022-05-26', 0, 36);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `posted_date` date NOT NULL,
  `news_content` varchar(255) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `manager_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `posted_date`, `news_content`, `posted_by`, `email`, `manager_id`) VALUES
(0, '2022-06-20', 'the quick brown fox jumps over the lazy dog\r\n', 'hh', 'bb', 121),
(1, '2022-06-13', 'these isn my jh', 'techer', 'andu@gmail.com', 121);

-- --------------------------------------------------------

--
-- Table structure for table `null_vat`
--

CREATE TABLE `null_vat` (
  `null_id` int(20) NOT NULL,
  `customer_TIN_NO` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `null_content` varchar(255) NOT NULL,
  `street_address` varchar(30) NOT NULL,
  `city` int(30) NOT NULL,
  `state` int(30) NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regr_officer`
--

CREATE TABLE `regr_officer` (
  `officer_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `age` varchar(2) NOT NULL,
  `registration_date` date NOT NULL,
  `region` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regr_officer`
--

INSERT INTO `regr_officer` (`officer_id`, `first_name`, `last_name`, `username`, `email`, `pnumber`, `password`, `age`, `registration_date`, `region`, `zone`, `kebele`, `sex`, `admin_id`) VALUES
(36, 'Nigusu', 'Yohannes', 'king', 'king@gmail.com', '0912211221', '', '12', '2022-05-22', 'amhara', 'gojjam', '10', '', 1),
(43, 'dereje', 'fantahun', 'dere', 'dere@gmail.com', '0945544554', '', '33', '2022-06-11', 'oromiya', 'ambo', '11', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg_manager`
--

CREATE TABLE `reg_manager` (
  `manger_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `age` varchar(2) NOT NULL,
  `registration_date` date NOT NULL,
  `region` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `kebele` decimal(30,0) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_manager`
--

INSERT INTO `reg_manager` (`manger_id`, `first_name`, `last_name`, `username`, `email`, `pnumber`, `password`, `age`, `registration_date`, `region`, `zone`, `kebele`, `sex`, `admin_id`) VALUES
(120, 'Esmael', 'Kibru', 'smith', 'anduamlakalehegne@gmail.com', '0987766554', '', '33', '2022-06-12', 'addis', 'addis', '1', 'male', 1),
(121, 'Esmael', 'kibru', 'smith', 'kegetaneh10@gmail.com', '0987765443', '', '33', '2022-06-12', 'addis', 'addis', '11', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` int(1) DEFAULT 1,
  `code` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `username`, `email`, `password`, `role`, `status`, `code`) VALUES
(1, 'nandu', 'anduamlakalehegnee@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 1, '0'),
(75, 'king', 'king@gmail.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'officer', 1, '0'),
(82, 'kecha', 'kecha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'customer', 1, '0'),
(83, 'abela', 'abel@gmail.com', 'b5f5bbf87977c2f5ef9192847e612687', 'customer', 1, '0'),
(103, 'dereje', 'dere@gmail.com', '37f6bab0b036158ef595f26027518443', 'officer', 1, '0'),
(104, 'abdi', 'abdi@gmail.com', '6f5110df95e59849cc130c93588a3680', 'customer', 1, '0'),
(175, 'smith', 'smith@gmail.com', 'b131a11a9ec27147877bd1fc8f002260', 'manager', 1, '0'),
(176, 'Esmael', 'kegetaneh10@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'manager', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tax_summary`
--

CREATE TABLE `tax_summary` (
  `tax_id` int(20) NOT NULL,
  `customer_TIN_NO` int(10) NOT NULL,
  `name_of_registerd_organization_or _tax_payer` varchar(50) NOT NULL,
  `vat_registration_number` varchar(12) NOT NULL,
  `taxable_sales` varchar(12) NOT NULL,
  `zero_rated_sales` varchar(12) NOT NULL,
  `tax_exempt_sales` varchar(12) NOT NULL,
  `manager_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tot_declaration`
--

CREATE TABLE `tot_declaration` (
  `id` int(15) NOT NULL,
  `TIN_NO` int(10) NOT NULL,
  `name_of_registerd_orgainization_or_tax_payer` varchar(50) NOT NULL,
  `tax_registaration_number` int(10) NOT NULL,
  `document_number` int(20) NOT NULL,
  `region` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `kebele` int(2) NOT NULL,
  `pnumber` int(13) NOT NULL,
  `name_of_tax_collector_office` varchar(50) NOT NULL,
  `payment_period` varchar(30) NOT NULL,
  `type_of_item_or_service` varchar(50) NOT NULL,
  `taxable_incomes` int(12) NOT NULL,
  `types_of_item_or_service` varchar(50) NOT NULL,
  `taxable_income` int(12) NOT NULL,
  `total_two_percent_turnover_taxable_income` int(12) NOT NULL,
  `total_ten_percent_turnover_taxable_income` int(12) NOT NULL,
  `two_percent_turnover_tax` int(12) NOT NULL,
  `ten_percent_turnover_tax` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `full_name` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `customer_id` int(10) NOT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tot_declaration`
--

INSERT INTO `tot_declaration` (`id`, `TIN_NO`, `name_of_registerd_orgainization_or_tax_payer`, `tax_registaration_number`, `document_number`, `region`, `zone`, `kebele`, `pnumber`, `name_of_tax_collector_office`, `payment_period`, `type_of_item_or_service`, `taxable_incomes`, `types_of_item_or_service`, `taxable_income`, `total_two_percent_turnover_taxable_income`, `total_ten_percent_turnover_taxable_income`, `two_percent_turnover_tax`, `ten_percent_turnover_tax`, `total`, `full_name`, `date`, `office_name`, `dates`, `customer_id`, `officer_id`) VALUES
(13, 125556656, 'Bekulu Business Organization', 121212, 2121, 'amhara', 'gojjam', 10, 990099009, 'debremarkos revenue office', '2022-06-10', 'tishert', 1200, 'shoes ', 2200, 3300, 4100, 2100, 2200, 7400, 'nigus yoha', '2022-06-10', 'esmael', '2022-06-10', 20, 36),
(14, 12, 'Bekulu Business Organization', 12, 12, '12', '12', 12, 12, '12', '2022-06-11', '12', 12, '12', 12, 12, 12, 12, 12, 12, 'barok', '2022-06-11', '12', '2022-06-11', 20, 36);

-- --------------------------------------------------------

--
-- Table structure for table `vat_declaration`
--

CREATE TABLE `vat_declaration` (
  `id` int(20) NOT NULL,
  `TIN_No` int(10) NOT NULL,
  `declaration_date` date NOT NULL,
  `vat_return_type` varchar(50) NOT NULL,
  `tax_period` date NOT NULL,
  `name_of_registerd_organization_or_tax_payer` varchar(50) NOT NULL,
  `vat_registration_number` int(12) NOT NULL,
  `agent_TIN` int(10) NOT NULL,
  `organization_TIN` int(10) NOT NULL,
  `schedule` varchar(10) NOT NULL,
  `taxable_sales` int(12) NOT NULL,
  `zero_rated_sales` int(12) NOT NULL,
  `tax_exempt_sales` int(12) NOT NULL,
  `services_subject_to_reverse_taxation` int(12) NOT NULL,
  `tax_adjustments_with_debet_for_suppliers` int(12) NOT NULL,
  `tax_adjustments_with_credit_for_suppliers` int(12) NOT NULL,
  `output_sales` int(12) NOT NULL,
  `total_sales` int(12) NOT NULL,
  `local_purchase_capital_assets` int(12) NOT NULL,
  `imported_capital_assets_purchase` int(12) NOT NULL,
  `purchase_with_no_VAT_or_unclaimed_input` int(12) NOT NULL,
  `input_vat` int(12) NOT NULL,
  `total_capital_assets` int(12) NOT NULL,
  `local_purchase_input` int(12) NOT NULL,
  `imported_purchase_input` int(2) NOT NULL,
  `general_expense_input_purchase` int(12) NOT NULL,
  `purchas_with_no_VAT_or_unclaimed_input` int(12) NOT NULL,
  `deductible_on_VAT_teverse_taxation` int(12) NOT NULL,
  `tax_adjustment_with_debet_not_for_buyers` int(12) NOT NULL,
  `tax_adjustment_with_credit_not_for_buyers` int(12) NOT NULL,
  `total_input` int(12) NOT NULL,
  `vat_on_government_voucher` int(12) NOT NULL,
  `VAT_due_for_month` int(12) NOT NULL,
  `VAT_credit_for_yhe_month` int(12) NOT NULL,
  `credit_carried_forward_from_previus_month` int(12) NOT NULL,
  `amount_of_VAT_to_be_paid` int(12) NOT NULL,
  `credit_available_for_carry_forward` int(12) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vat_declaration`
--

INSERT INTO `vat_declaration` (`id`, `TIN_No`, `declaration_date`, `vat_return_type`, `tax_period`, `name_of_registerd_organization_or_tax_payer`, `vat_registration_number`, `agent_TIN`, `organization_TIN`, `schedule`, `taxable_sales`, `zero_rated_sales`, `tax_exempt_sales`, `services_subject_to_reverse_taxation`, `tax_adjustments_with_debet_for_suppliers`, `tax_adjustments_with_credit_for_suppliers`, `output_sales`, `total_sales`, `local_purchase_capital_assets`, `imported_capital_assets_purchase`, `purchase_with_no_VAT_or_unclaimed_input`, `input_vat`, `total_capital_assets`, `local_purchase_input`, `imported_purchase_input`, `general_expense_input_purchase`, `purchas_with_no_VAT_or_unclaimed_input`, `deductible_on_VAT_teverse_taxation`, `tax_adjustment_with_debet_not_for_buyers`, `tax_adjustment_with_credit_not_for_buyers`, `total_input`, `vat_on_government_voucher`, `VAT_due_for_month`, `VAT_credit_for_yhe_month`, `credit_carried_forward_from_previus_month`, `amount_of_VAT_to_be_paid`, `credit_available_for_carry_forward`, `customer_id`, `officer_id`) VALUES
(57, 1, '2022-06-11', 'monthly', '2022-06-11', 'mery joy', 1, 1, 0, 'schedule B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 111, 1, 1, 1, 20, 36),
(60, 21, '2022-06-12', 'monthly', '2022-06-12', 'awesh degital marketing organizatin', 12, 12, 0, 'schedule A', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, 20, 36),
(61, 11, '2022-06-12', '1', '2022-06-12', 'enat guada', 1, 1, 0, 'schedule A', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 22, 43),
(64, 1000000000, '2022-06-13', 'vat', '2022-06-13', 'bekulu organixation', 12121212, 12119009, 0, 'schedule B', 12, 344334, 2000, 1000, 10000, 12221, 12211, 2223, 12, 12, 12, 12, 22, 222, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, 20, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_feedback`
--
ALTER TABLE `admin_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `officerkidfk` (`officer_id`);

--
-- Indexes for table `excise_tax_declaration`
--
ALTER TABLE `excise_tax_declaration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `officer_id` (`officer_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `null_vat`
--
ALTER TABLE `null_vat`
  ADD PRIMARY KEY (`null_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `regr_officer`
--
ALTER TABLE `regr_officer`
  ADD PRIMARY KEY (`officer_id`),
  ADD KEY `regr_officer_ibfk_1` (`admin_id`);

--
-- Indexes for table `reg_manager`
--
ALTER TABLE `reg_manager`
  ADD PRIMARY KEY (`manger_id`),
  ADD KEY `adminidfk` (`admin_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_summary`
--
ALTER TABLE `tax_summary`
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `tot_declaration`
--
ALTER TABLE `tot_declaration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `vat_declaration`
--
ALTER TABLE `vat_declaration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_feedback`
--
ALTER TABLE `admin_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `excise_tax_declaration`
--
ALTER TABLE `excise_tax_declaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regr_officer`
--
ALTER TABLE `regr_officer`
  MODIFY `officer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `reg_manager`
--
ALTER TABLE `reg_manager`
  MODIFY `manger_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tot_declaration`
--
ALTER TABLE `tot_declaration`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vat_declaration`
--
ALTER TABLE `vat_declaration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `regr_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `excise_tax_declaration`
--
ALTER TABLE `excise_tax_declaration`
  ADD CONSTRAINT `excise_tax_declaration_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `regr_officer` (`officer_id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `reg_manager` (`manger_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `null_vat`
--
ALTER TABLE `null_vat`
  ADD CONSTRAINT `null_vat_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `regr_officer`
--
ALTER TABLE `regr_officer`
  ADD CONSTRAINT `regr_officer_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_manager`
--
ALTER TABLE `reg_manager`
  ADD CONSTRAINT `reg_manager_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tax_summary`
--
ALTER TABLE `tax_summary`
  ADD CONSTRAINT `tax_summary_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `reg_manager` (`manger_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tot_declaration`
--
ALTER TABLE `tot_declaration`
  ADD CONSTRAINT `tot_declaration_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vat_declaration`
--
ALTER TABLE `vat_declaration`
  ADD CONSTRAINT `vat_declaration_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
