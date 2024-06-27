<?php
include 'koneksi.php';

function getDiagnosis($answers) {
    $rules = [
        'Depresi' => ['Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak'],
        'Anoreksia' => ['Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak'],
        'Gangguan Kecemasan' => ['Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak'],
        'Skizofrenia' => ['Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak'],
        'Gangguan Kepribadian' => ['Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya']
    ];

    foreach ($rules as $diagnosis => $rule) {
        if ($rule === $answers) {
            return $diagnosis;
        }
    }

    return "Tidak dapat membuat diagnosis.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = [];
    for ($i = 1; $i <= 13; $i++) {
        $answers[] = ($_POST["a$i"] === 'Ya') ? 'Ya' : 'Tidak';
    }

    $diagnosis = getDiagnosis($answers);

    $query = "INSERT INTO diagnosa (a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12, a13, diagnosis) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    $types = str_repeat('s', 13) . 's';  
    $params = array_merge([$types], $answers, [$diagnosis]);

    $bindParams = [];
    foreach ($params as $key => &$value) {
        $bindParams[$key] = &$value;
    }

    call_user_func_array(array($stmt, 'bind_param'), $bindParams);

    $stmt->execute();

    if ($stmt->error) {
        echo "Error: " . $stmt->error;
    } else {
        echo "Diagnosa berhasil disimpan: " . $diagnosis;
    }

    $stmt->close();
}

$koneksi->close();
header("Location: hasil.php?diagnosis=$diagnosis");
exit();

?>
