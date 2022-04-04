// クイズの問題・選択肢・答え
const quiz = [
    {
        // 一問目
        question: 'キリンの睡眠時間はどれでしょうか？',
        answers: [
            '3時間',
            '1時間',
            '40分',
            '20分'
        ],
        correct: '20分'
    },
    {
        // 二問目
        question: 'ネコの平熱は何度でしょうか？',
        answers: [
            '約40℃',
            '約38.5℃',
            '約36℃',
            '約33.5℃'
        ],
        correct: '約38.5℃'
    },
    {
        // 三問目
        question: '日本初の警察犬が誕生したのはいつでしょうか？',
        answers: [
            '明治時代',
            '大正時代',
            '昭和時代',
            '平成以降'
        ],
        correct: '大正時代'
    },
];

// 定数でクイズの要素数を定義
const quizLength = quiz.length;
// クイズの問題数
let quizIndex = 0;
// 問題の正解数
let score = 0;

// 定数でボタンを定義
const $button = document.getElementsByTagName('button');
// 定数でボタンの配列の要素数
const buttonLength = $button.length;


// 関数でクイズの問題文、選択肢を定義
const setupQuiz = () => {
    // 定数の文字列をHTMLに反映させる
    document.getElementById('js-question').textContent = quiz[quizIndex].question;
    // ボタンの個数
    let buttonIndex = 0;
    // 繰り返し処理
    while(buttonIndex < buttonLength) {
        $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
        // ボタンの個数分インクリメント
        buttonIndex++;
    }
}
// 関数の呼出し
setupQuiz();

// 関数でボタンをクリックしたら正誤判定
const clickHandler = (e) => {

    // 問題の正誤判定
    if(quiz[quizIndex].correct === e.target.textContent) {
        window.alert('正解！');
        // スコアを加算
        score++;
    } else {
        window.alert('不正解！');
    }
    // 問題数分インクリメント
    quizIndex++;

    // 問題数があるか条件分岐
    if(quizIndex < quizLength) {
        // 問題数があれば実行
        setupQuiz();
    } else {
        // 問題数がなければ実行
        window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');
    }
}

// ボタンをクリックしたら正誤判定
let handlerIndex = 0;
// 繰り返し処理
while(handlerIndex < buttonLength) {
    // ボタンをクリックした時
    $button[handlerIndex].addEventListener('click', (e) => {
        clickHandler(e);
    });
    // インクリメント
    handlerIndex++;
}