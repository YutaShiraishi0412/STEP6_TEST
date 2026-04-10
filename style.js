function checkForm() {

    // 入力値を取得
    let name = document.getElementById("name").value;
    let companyName = document.getElementById("companyName").value;
    let email = document.getElementById("email").value;
    let age = document.getElementById("age").value;
    let message = document.getElementById("message").value;

    // 未入力チェック
    if (
        name === "" ||
        companyName === "" ||
        email === "" ||
        age === "" ||
        message === ""
    ) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        return false;
    }

    // ★ ここが今回追加する部分（確認アラート）
    let result = confirm("この内容で送信しますか？");

    if (result) {
        return true;  // OK → 送信
    } else {
        return false; // キャンセル → 送信しない
    }
}// 背景色の配列（順番）
let colors = ["blue", "red", "yellow", "gray"];

// 今の色の位置
let index = 0;

// 「押してみてね！」ボタンを取得
let button = document.querySelector("#footerButton");

// footer を取得
let footer = document.querySelector("footer");

// ボタンがクリックされたとき
button.addEventListener("click", function () {

    // 次の色に変更
    footer.style.backgroundColor = colors[index];

    // 次の番号へ
    index++;

    // 最後までいったら最初に戻る
    if (index >= colors.length) {
        index = 0;
    }

});
