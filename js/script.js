// Intersection Observer によるスクロール連動フェードイン
document.addEventListener('DOMContentLoaded', () => {

    const revealElements = document.querySelectorAll('.reveal');

    const observerOptions = {
        root: null, // ビューポートをルートとする
        rootMargin: '0px',
        threshold: 0.1 // 要素が10%見えたら発火
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // CSSで定義されたアニメーション発火クラス
                entry.target.classList.add('is-visible'); 
                observer.unobserve(entry.target); // 一度アニメーションしたら監視を停止
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    revealElements.forEach(element => {
        observer.observe(element);
    });
});

// 注意: このファイルには、tab切り替えやアコーディオンのロジックは含まれていません。
// これらを実現するには、別途DOM操作や状態管理のコードを追加する必要があります。