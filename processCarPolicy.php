<?php
include("CarPolicy2.php");

$policyNumber = $_POST['policyNumber'];
$yearlyPremium = $_POST['yearlyPremium'];
$dateOfLastClaim = $_POST['dateOfLastClaim'];

$policy = new CarPolicy($policyNumber, $yearlyPremium);
$policy->setDateOfLastClaim($dateOfLastClaim);

echo "<h2>Car Policy Details</h2>";
echo "Policy Number: " . $policy . "<br>";
echo "Years no claim: " . $policy->getTotalYearsNoClaims() . "<br>";
echo "Initial Premium: €" . $yearlyPremium . "<br>";
echo "Discount: " . ($policy->getDiscount() * 100) . "%<br>";
echo "Discounted Premium: €" . $policy->getDiscountedPremium();
?>
