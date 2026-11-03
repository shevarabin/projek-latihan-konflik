<?php
function calculatePrice($basePrice, $taxRate) {
// Calculate final price with tax
return $basePrice + ($basePrice * $taxRate);
}

print("ini tambahan")