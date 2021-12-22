<?php
$max_row = 10000;
$min_rnd = 0;
$max_rnd = 1000;
$filename_csv = __DIR__ . '/test_csv.csv';
$fh = fopen($filename_csv,'wb');
if ($fh == false) {
    exit("Error create file $filename_csv");
}
$ar_rows = ['Param1','Param2','Param3'];
for($a = 1; $a <= $max_row; $a ++) {
    $param1 = mt_rand($min_rnd,$max_rnd);
    $param2 = mt_rand($min_rnd,$max_rnd);
    $param3 = $param1 + $param2;
    fputcsv($fh,[
        $param1,
        $param2,
        $param3
    ]);
    echo "Row: $a" . PHP_EOL;
}
fclose($fh);

$filename_csv = __DIR__ . '/test_column4.csv';
$fh = fopen($filename_csv,'wb');
if ($fh == false) {
    exit("Error create file $filename_csv");
}
$ar_rows = ['Param1','Param2','Param3','Param4'];
for($a = 1; $a <= $max_row; $a ++) {
    $param1 = mt_rand($min_rnd,$max_rnd);
    $param2 = mt_rand($min_rnd,$max_rnd);
    $param3 = mt_rand($min_rnd,$max_rnd);
    $param4 = $param1 + $param2 + $param3;
    fputcsv($fh,[
        $param1,
        $param2,
        $param3,
        $param4
    ]);
    echo "Row: $a" . PHP_EOL;
}
fclose($fh);


$filename_csv = __DIR__ . '/test_column5.csv';
$fh = fopen($filename_csv,'wb');
if ($fh == false) {
    exit("Error create file $filename_csv");
}
$ar_rows = ['Param1','Param2','Param3','Param4','Param5'];
for($a = 1; $a <= $max_row; $a ++) {
    $param1 = mt_rand($min_rnd,$max_rnd); // Random number 1
    $param2 = mt_rand($min_rnd,$max_rnd); // Random number 2
    $param3 = mt_rand($min_rnd,$max_rnd); // Random number 3
    $param4 = mt_rand($min_rnd,$max_rnd); // Random number 4
    $param5 = $param1 + $param2 + $param3 * 2 + $param4; // Summ Rnd1 + Rnd2 + Rnd3 * 2 + Rnd4
    fputcsv($fh,[
        $param1,
        $param2,
        $param3,
        $param4,
        $param5
    ]);
    echo "Row: $a" . PHP_EOL;
}
fclose($fh);

$filename_csv = __DIR__ . '/test_column5version2.csv';
$fh = fopen($filename_csv,'wb');
if ($fh == false) {
    exit("Error create file $filename_csv");
}
$ar_rows = ['Param1','Param2','Param3','Param4','Param5'];
for($a = 1; $a <= $max_row; $a ++) {
    $param1 = mt_rand($min_rnd,$max_rnd); // Random number 1
    $param2 = mt_rand($min_rnd,$max_rnd); // Random number 2
    $param3 = mt_rand($min_rnd,$max_rnd); // Random number 3
    $param4 = mt_rand($min_rnd,$max_rnd); // Random number 4
    $param5 = $param1 + $param2 * 4 + $param3 * 2 + $param4 + 1647456; // Summ Rnd1 + Rnd2 * 4 + Rnd3 * 2 + Rnd4 + Number
    fputcsv($fh,[
        $param1,
        $param2,
        $param3,
        $param4,
        $param5
    ]);
    echo "Row: $a" . PHP_EOL;
}
fclose($fh);

$filename_csv = __DIR__ . '/test_column5version3.csv';
$fh = fopen($filename_csv,'wb');
if ($fh == false) {
    exit("Error create file $filename_csv");
}
$ar_rows = ['Param1','Param2','Param3','Param4','Param5'];
for($a = 1; $a <= $max_row; $a ++) {
    $param1 = mt_rand($min_rnd,$max_rnd); // Random number 1
    $param2 = mt_rand($min_rnd,$max_rnd); // Random number 2
    $param3 = mt_rand($min_rnd,$max_rnd); // Random number 3
    $param4 = mt_rand($min_rnd,$max_rnd); // Random number 4
    $param5 = $param1 + $param2 * $param3 + $param3 * 2 * $param4 + $param4; // Summ Rnd1 + Rnd2 * Rnd3 + Rnd3 * 2 * Rnd4 + Rnd4
    fputcsv($fh,[
        $param1,
        $param2,
        $param3,
        $param4,
        $param5
    ]);
    echo "Row: $a" . PHP_EOL;
}
fclose($fh);
