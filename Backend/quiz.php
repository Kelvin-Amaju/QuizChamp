<?php
header("Content-Type: application/json");

// Sample quiz questions
$questions = [
    ["id" => 1, "question" => "What is 2 + 2?", "options" => ["2", "3", "4", "5"], "answer" => "4"],
    ["id" => 2, "question" => "Capital of France?", "options" => ["Berlin", "Madrid", "Paris", "Rome"], "answer" => "Paris"]
];

echo json_encode(["questions" => $questions]);
?>