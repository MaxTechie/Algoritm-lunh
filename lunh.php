<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunh Agolritmo</title>
</head>
<body>
    <?php 
    function luhn_checksum($card_number) {
    function digits_of($n) {
        return array_map('intval', str_split($n));
    }
    $digits = digits_of($card_number);
    $odd_digits = array_reverse(array_slice($digits, 0, count($digits), 2));
    $even_digits = array_reverse(array_slice($digits, 1, count($digits), 2));
    $checksum = 0;
    $checksum += array_sum($odd_digits);
    foreach ($even_digits as $d) {
        $checksum += array_sum(digits_of($d * 2));
    }
    return $checksum % 10;
    }
    function is_luhn_valid($card_number) {
    return luhn_checksum($card_number) === 0;
    }     
    
    ?>
</body>
</html>