<?php
header('Content-Type: application/json');

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

// Ambil data preferensi pengguna
$time = $_POST['time'];
$group = $_POST['group'];
$activity = $_POST['activity'];
$experience = $_POST['experience'];

// Query untuk rekomendasi
$sql = "SELECT topik_utama, AVG(rating_bintang) AS rata_rating, sentimen, nama_cafe
        FROM reviews
        WHERE topik_utama LIKE ? AND sentimen = 'Positif'
        GROUP BY topik_utama, nama_cafe
        ORDER BY rata_rating DESC
        LIMIT 1";

$stmt = $conn->prepare($sql);
$searchKeyword = "%" . $experience . "%";
$stmt->bind_param("s", $searchKeyword);
$stmt->execute();
$result = $stmt->get_result();

// Logika pemilihan halaman berbasis kombinasi
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Kombinasi preferensi
    if ($time === "morning" && $activity === "chill" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "chill" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "morning" && $activity === "working" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "chill" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "afternoon" && $activity === "working" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "evening" && $activity === "chill" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_siadjirah.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "evening" && $activity === "working" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_duende.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_noltiga.php";
    } elseif ($time === "night" && $activity === "chill" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "alone" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "alone" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "alone" && $experience === "live_music") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "alone" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "duo" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "duo" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "duo" && $experience === "live_music") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "duo" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "group" && $experience === "coffee") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "group" && $experience === "food") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "group" && $experience === "live_music") {
        $recommendation_page = "recomendation_nepenthe.php";
    } elseif ($time === "night" && $activity === "working" && $group === "group" && $experience === "beverages") {
        $recommendation_page = "recomendation_nepenthe.php";
    } else {
        $recommendation_page = "landing_page.php";
    }

    // Redirect ke halaman rekomendasi
    header("Location: $recommendation_page");
    exit();
} else {
    // Jika tidak ada hasil, arahkan ke halaman error atau tampilkan pesan
    echo json_encode(["error" => "No recommendations found. Please refine your preferences."]);
}

$stmt->close();
$conn->close();
?>
