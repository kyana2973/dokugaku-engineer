<?php

$notes = [];

function createNotes() {
    echo "タイトル：";
    $title = trim(fgets(STDIN));
    echo "内容：";
    $content = trim(fgets(STDIN));
    echo "メモを追加しました" . PHP_EOL . PHP_EOL;
    return [
        "title" => $title,
        "content" => $content
    ];
}

function listNotes($notes) {
    foreach ($notes as $note) {
        echo "タイトル" . $note["title"]  . PHP_EOL;
        echo "内容" . $note["content"] . PHP_EOL;
        echo "---------------------------" . PHP_EOL . PHP_EOL;
    }
}

echo "My Notes".PHP_EOL;

echo "1. メモの追加".PHP_EOL;
echo "2. メモの表示".PHP_EOL;
echo "9. アプリ終了".PHP_EOL.PHP_EOL;



while (true) {
    echo "番号を選択してください(1, 2, 9)：";
    $number = trim(fgets(STDIN));

    if ($number === "1") {
        //メモの追加
        $notes[] = createNotes();

    } elseif ($number === "2") {
        //メモの表示
        listNotes($notes);

    } elseif ($number === "9") {
        //アプリ終了
        echo "Bye!!!";
        break;

    }
}

