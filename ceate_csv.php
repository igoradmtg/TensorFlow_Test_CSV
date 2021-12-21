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