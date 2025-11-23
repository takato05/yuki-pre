<?php
// =======================================================
// PHPコンテンツ定義
// =======================================================
$content = [
    'accent_color' => '#FF4500', // Orange Red
    'hero' => [
        'headline_pre' => '不安を',
        'headline_accent' => 'ゼロ',
        'subtext' => '初回訪問の障壁を徹底的に排除しました。誰がいるのか、何ができるのか、全てを知って、安心して一歩を踏み出しましょう。',
    ],
    'features' => [
        ['icon' => 'users', 'title' => '【初回不安 ①/②解消】会える人、話せる人', 'description' => '誰がサポートしてくれるのか、事前に顔とコメントを確認。話しかけにくいを解決し、最初から安心感を持って参加できます。', 'is_primary' => true],
        ['icon' => 'target', 'title' => '【継続不安 ①解消】あなたの今日の目的', 'description' => 'プログラミング集中から仲間との交流まで、HarborSでの具体的な過ごし方を紹介。来る理由が見つかります。', 'is_primary' => false],
        ['icon' => 'map-pin', 'title' => '【初回不安 ③解消】迷わない居場所マップ', 'description' => 'フロアの写真と説明付きで、どこで作業し、どこで交流できるかを明確化。入ってすぐの「どこにいるか問題」を解決します。', 'is_primary' => false],
    ],
    'tier_members' => [
        ['name' => 'ぼーちゃん', 'comment' => '困ったらすぐに呼んでね！待ってるよ！'],
        ['name' => 'さつきち', 'comment' => '雑談から技術相談まで何でもOKです🙌'],
        ['name' => 'すずさん', 'comment' => 'リラックスして、あなたのペースでどうぞ！'],
        ['name' => 'ちゃんりー', 'comment' => '最初は緊張するよね。笑顔でお迎えします😊'],
        ['name' => 'あかぎ', 'comment' => '一緒に課題を進めよう！いつでも声かけてね。'],
        ['name' => '他多数', 'comment' => '幅広いメンバーがサポートします！'],
    ],
    'episodes' => [
        ['title' => 'プログラミングに集中', 'detail' => '週報提出や課題の最終調整など、集中したい時に最適。教え合いの文化で進捗が加速します。'],
        ['title' => 'お誕生日お祝い・交流', 'detail' => '同期や先輩と深いつながりを作り、楽しい思い出もたくさん作れます。'],
    ],
    'qa' => [
        ['q' => '仲良くなれますか？', 'a' => '絶対になれます！HarborSは共通の目標を持つ仲間が集まる場所です。共通点を見つけるサポートも充実しています。'],
        ['q' => 'いつ使えますか？', 'a' => '基本的にPOSSE期間中は24時間365日利用可能です。都合の良い時間に来て、自由に活用してください。'],
        ['q' => 'ごはん食べれますか？', 'a' => '飲食は可能です！料理好きが集まる「お料理クラブ」の活動もありますよ。'],
    ]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HarborS - 不安ゼロで一歩を踏み出すLP</title>
    
    <link rel="stylesheet" href="css/style.css"> 
    
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="bg-light text-dark font-sans">

    <header class="header">
        <nav class="nav">
            <div class="logo">HarborS</div>
            <a href="#cta" class="cta-button bg-dark text-light">不安を解消する</a>
        </nav>
    </header>

    <main class="main">
        
        <section class="hero-section reveal" id="hero">
            <div class="hero-content">
                <h1 class="hero-headline text-dark">
                    <?php echo $content['hero']['headline_pre']; ?>
                    <span class="accent-color"><?php echo $content['hero']['headline_accent']; ?></span>に。HarborSへようこそ。
                </h1>
                <p class="hero-subtext text-neutral-600">
                    <?php echo $content['hero']['subtext']; ?>
                </p>
                <a href="#features" class="cta-primary bg-dark text-light">
                    不安解消ロードマップを見る
                    <i data-lucide="arrow-right" class="icon-right"></i>
                </a>
            </div>
        </section>

        <hr class="divider">

        <section class="bento-section py-20 px-4" id="features">
            <div class="container mx-auto">
                <div class="section-header reveal">
                    <h2 class="text-3xl font-extrabold mb-4">初回訪問の「行きづらい」を徹底解決</h2>
                    <p class="text-xl text-neutral-600">
                        誰がいる？何する？どこにいる？全ての疑問に答える３つの安心機能。
                    </p>
                </div>

                <div class="bento-grid reveal">
                    <?php foreach ($content['features'] as $feature): ?>
                        <div class="bento-card <?php echo $feature['is_primary'] ? 'is-primary' : ''; ?>">
                            <div>
                                <i data-lucide="<?php echo $feature['icon']; ?>" class="icon-large accent-color"></i>
                                <h3 class="card-title"><?php echo $feature['title']; ?></h3>
                                <p class="card-description"><?php echo $feature['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        
        <section class="tier-section py-10 px-4" id="tier-members">
            <div class="container mx-auto reveal">
                <h3 class="text-2xl font-bold mb-6 text-center">サポートTierメンバー (顔写真付き)</h3>
                <div class="tier-grid">
                    <?php foreach ($content['tier_members'] as $member): ?>
                        <div class="member-card">
                            <div class="member-photo"><?php echo strtoupper(substr($member['name'], 0, 1)); ?></div> 
                            <p class="member-name"><?php echo $member['name']; ?></p>
                            <p class="member-comment">"<?php echo $member['comment']; ?>"</p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <hr class="divider">

        <section class="episode-section py-20 px-4" id="episodes">
            <div class="container mx-auto text-center reveal">
                <h2 class="text-3xl font-extrabold mb-4 text-dark">
                    「行ってもすることなくね？」を解決する。
                </h2>
                <p class="text-lg max-w-3xl mx-auto text-neutral-600 mb-12">
                    プログラミング進捗以外にも、HarborSが提供する具体的な利用シーンを見てみましょう。
                </p>
                <div class="episode-container">
                    <?php foreach ($content['episodes'] as $episode): ?>
                        <div class="episode-card">
                            <h4 class="text-3xl font-bold mb-4 accent-color"><?php echo $episode['title']; ?></h4>
                            <p class="text-lg text-neutral-700 leading-relaxed"><?php echo $episode['detail']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="utilizer-message">
                    <span class="font-extrabold">【利用者の声】</span> プログラミングに集中したい人も、同期と仲を深めたい人も、HarborSに来れば両方を実現できます。
                </p>
            </div>
        </section>

        <section class="statement-section bg-dark py-24 px-4" id="vision">
            <div class="container mx-auto text-center reveal">
                <h2 class="statement-headline text-light">
                    目的は、あなたの自由。多様な成功の形が、ここにある。
                </h2>
            </div>
        </section>
        
        <section class="qa-section py-20 px-4" id="qa">
            <div class="container mx-auto reveal">
                <h2 class="text-3xl font-extrabold mb-4 text-center text-dark">
                    仲良くなれるか不安なんですよ。
                </h2>
                <p class="text-lg text-neutral-600 text-center mb-10">
                    コミュニティ参加への素朴な疑問と、HarborSからの答え。
                </p>
                <div class="qa-list">
                    <?php foreach ($content['qa'] as $item): ?>
                        <div class="qa-item">
                            <p class="qa-q">Q. <?php echo $item['q']; ?></p>
                            <p class="qa-a">A. <?php echo $item['a']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="cta-section py-20 px-4 text-center" id="cta">
            <div class="container mx-auto reveal">
                <h3 class="text-3xl font-bold mb-6 text-dark">
                    もう、迷う必要はありません。
                </h3>
                <p class="text-xl mb-10 text-neutral-600">
                    全ての不安を解消し、HarborSであなたのPOSSE生活を充実させましょう。
                </p>
                <a href="#hero" class="cta-secondary">
                    今すぐ一歩目を踏み出す <i data-lucide="check" class="icon-right"></i>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer bg-dark text-light p-10">
        <div class="container mx-auto footer-content">
            <div class="footer-nav border-top">
                <div class="logo-footer accent-color">HarborS</div>
                <nav class="footer-links">
                    <a href="#features" class="footer-link">Features</a>
                    <a href="#episodes" class="footer-link">Episodes</a>
                    <a href="#vision" class="footer-link">Vision</a>
                    <a href="#qa" class="footer-link">Q&A</a>
                </nav>
            </div>
            <div class="copyright text-neutral-500">
                &copy; 2025 HarborS. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script> 
    <script>
        // Lucide IconsをDOMに変換
        lucide.createIcons();
    </script>
</body>
</html>