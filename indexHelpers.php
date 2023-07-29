<?php 
function getTitle() {
    echo '<title>Sample Title</title>';
}

function getHeader() {
    $logoElement = getLogo();
    $categoryNavBar = getNavBar();
    echo '<header>'.$logoElement.$categoryNavBar.'</header>';
}

function getLogo() {
    return '<img src="some_logo.png" height=100 width=200>';
}

function getNavBar() {
    $categoryList = getCategoryList();
    return "<nav>$categoryList</nav>";
}

function getCategoryList() {
    $list = '<ul>';
    $categories = array('category one', 'category two', 'category three');
    foreach($categories as $category) {
        $list = $list."<li>$category</li>";
    }
    $list = $list.'</ul>';
    return $list;
}

function getLatestArticleElement() {
    $article = getLatestArticle();
    echo "
        <h1>Latest Article</h1>
        $article
        ";
}

function getLatestArticle() {
    return '
        <article>
        <h1>Article 1 Title</h1>
        <p>This is some text for the article</p>
        </article>
        ';
}

function getEvents() {
    echo "<section><h2>Events</h2></section>";
}

function getLatestArticlesNav() {
    $latestArticles = getLatestArticles();
    echo "<nav><h2>Latest Articles</h2>$latestArticles</nav>";
}

function getLatestArticles() {
    $lastFourArticleTitles = array('Article 2 Title', 'Article 3 Title', 'Article 4 Title', 'Article 5 Title');
    $lastFourArticleAbstracts = array('Article 2 Abstract', 'Article 3 Abstract', 'Article 4 Abstract', 'Article 5 Abstract');
    $articleList = '<ul>';
    for ($i = 0; $i < count($lastFourArticleTitles); $i++) {
        $articleList = $articleList.'<li>'.$lastFourArticleTitles[$i].'<br>'.$lastFourArticleAbstracts[$i].'</li>';
    }
    $articleList = $articleList.'</ul>';
    return $articleList;
}
?>
