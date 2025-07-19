<?php
$conn=mysqli_connect("localhost","root","","vechileinfo");
if($conn)
{
    // echo "Connection successfull";
   $sql=" INSERT INTO insurance (companyname, planname, cartype, coveragedetails, price, validity) VALUES
('HDFC Ergo', 'Comprehensive Car Insurance', 'Sedan', 'Covers accidents, theft, natural disasters, and third-party damages.', 15000.00, 12),
('HDFC Ergo', 'Third-Party Liability', 'SUV', 'Mandatory cover for third-party vehicle and injury liabilities.', 8000.00, 12),
('ICICI Lombard', 'Zero Depreciation Cover', 'Hatchback', 'Full claim without depreciation deduction.', 18000.00, 12),
('ICICI Lombard', 'Personal Accident Cover', 'SUV', 'Covers driver and passenger medical expenses due to accidents.', 5000.00, 12),
('Bajaj Allianz', 'Comprehensive Cover', 'Sedan', 'Full protection against theft, accidents, and fire.', 14000.00, 12),
('Bajaj Allianz', 'Third-Party Cover', 'Truck', 'Covers damages caused to third-party property and injuries.', 9000.00, 12),
('TATA AIG', 'Premium Protection Plan', 'Luxury', 'Includes roadside assistance, cashless claims, and extensive coverage.', 25000.00, 24),
('TATA AIG', 'Standard Plan', 'SUV', 'Covers vehicle damage and third-party liabilities.', 12000.00, 12),
('Reliance General', 'Own Damage Insurance', 'Hatchback', 'Protection against damages to own vehicle due to accidents, fire, and natural disasters.', 11000.00, 12),
('Reliance General', 'Long-Term Third-Party Cover', 'Sedan', 'Mandatory third-party liability insurance with multi-year validity.', 7000.00, 36),
('Future Generali', 'Standard Car Insurance', 'Sedan', 'Basic comprehensive car insurance covering theft, fire, and accidents.', 13000.00, 12),
('Future Generali', 'Third-Party Liability Only', 'SUV', 'Covers third-party property damage and injury claims.', 8500.00, 12),
('Go Digit', 'Zero Depreciation Plan', 'SUV', 'Full claim settlement without depreciation reduction.', 19000.00, 12),
('Go Digit', 'Comprehensive Protection', 'Luxury', 'Extensive coverage including personal accident and emergency assistance.', 28000.00, 24),
('Acko', 'Pay-As-You-Drive Insurance', 'Hatchback', 'Custom pricing based on actual usage with full coverage.', 16000.00, 12),
('Acko', 'Third-Party Cover', 'Sedan', 'Legal liability protection against third-party damages.', 7500.00, 12),
('SBI General', 'Basic Comprehensive Cover', 'Truck', 'Covers own vehicle damage and third-party claims.', 17000.00, 12),
('SBI General', 'Long-Term Third-Party Insurance', 'SUV', 'Legal liability cover for multiple years.', 7200.00, 36),
('Universal Sompo', 'Complete Protection Plan', 'Luxury', 'Comprehensive insurance with roadside assistance and claim assistance.', 26000.00, 24),
('Kotak Mahindra', 'Extended Comprehensive Plan', 'SUV', 'Enhanced insurance plan with higher claim benefits.', 20000.00, 12);";

    $query=$conn->query($sql);
    if($query)
    {
        echo "row created Successfully";
    }
    else{
        echo "row NOT created";
    }
}
?>