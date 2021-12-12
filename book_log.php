<?php

$reviews = [];

function createReview() {
    echo "読書ログを登録してください" . PHP_EOL;
    echo "書籍名：";
    $title = trim(fgets(STDIN));

    echo "著者名：";
    $author = trim(fgets(STDIN));

    echo "読書状況(未読, 読んでる, 完読)：";
    $status = trim(fgets(STDIN));

    echo "評価(５点満点中で何点？)：";
    $score = trim(fgets(STDIN));

    echo "感想：";
    $summary = trim(fgets(STDIN));

    echo "読書ログを登録しました" . PHP_EOL . PHP_EOL;

    return [
        "title" => $title,
        "author" => $author,
        "status" => $status,
        "score" => $score,
        "summary" => $summary
    ];
}

function listReviews($reviews) {
    echo "読書ログを表示します" . PHP_EOL . PHP_EOL;

    foreach ($reviews as $review) {
        echo "書籍名：" . $review["title"] . PHP_EOL;
        echo "著者名：" . $review["author"] . PHP_EOL;
        echo "読書状況：" . $review["status"] . PHP_EOL;
        echo "評価：" . $review["score"] . PHP_EOL;
        echo "感想：" . $review["summary"] . PHP_EOL;
        echo "_____________________" . PHP_EOL . PHP_EOL;
    }
}



while (true) {
    echo "1. 読書ログを登録" . PHP_EOL;
    echo "2. 読書ログの表示" . PHP_EOL;
    echo "9. アプリケーションを終了" . PHP_EOL;
    echo "番号を選択してください(1, 2, 9)：";
    $answer = trim(fgets(STDIN));

    if ($answer === "1") {
        $reviews[] = createReview();

    } elseif ($answer === "2") {
        listReviews($reviews);

    } elseif ($answer === "9") {
        echo "またな！";
        break;
    }
}
