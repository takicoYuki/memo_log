<?php

//登録配列
$memoLogs = [];

while(true){
    //メニューを作成し分岐させる
    echo 'メモログメニュー' .PHP_EOL;
    echo '1:メモログを登録する'.PHP_EOL;
    echo '2:メモログを表示する'.PHP_EOL;
    echo '0:メニューを閉じる'.PHP_EOL;
    echo 'メニューを選択してください:';
    $num = trim(fgets(STDIN));

    //メモログを登録する
    if($num === '1'){
        $memoLogs[] = crateMemoLog();
        continue;
    }elseif($num === '2'){
        //メモログを表示させる
        reviewMemoLog($memoLogs);
        continue;
    }elseif($num ==='0'){
        //メニューを閉じる
        break;
    }else{
        echo '正しい数字を入力してください'.PHP_EOL;
    }
}

/*
    メモを登録する
*/
function crateMemoLog(){
    echo 'メモを登録します。'.PHP_EOL;
    echo 'カテゴリー:'.$category = trim(fgets(STDIN));
    echo 'メモ内容:'.$memo = fgets(STDIN);
    $yyyymmdd_HIS = date("YYYY/MM/DD H:i:s");
    echo '----------------------------'.PHP_EOL;
    return [
        'date'=>$yyyymmdd_HIS,
        'category'=>$category,
        'memo'=>$memo,
    ];
}

/*
    メモを表示する
*/
function reviewMemoLog($MemoLogs){
    foreach($MemoLogs as $MemoLog){
        echo '登録日時:'.$MemoLog['date'].PHP_EOL;
        echo 'カテゴリー:'.$MemoLog['category'].PHP_EOL;
        echo 'メモ内容:'.$MemoLog['memo'].PHP_EOL;
    }
}

?>
