document.addEventListener('DOMContentLoaded', function() {
    // エリアのセレクトボックスが変更されたときの処理
    document.getElementById('area').addEventListener('change', function() {
        document.getElementById('searchForm').submit();
    });

    // ジャンルのセレクトボックスが変更されたときの処理
    document.getElementById('food_genre').addEventListener('change', function() {
        document.getElementById('searchForm').submit();
    });
});