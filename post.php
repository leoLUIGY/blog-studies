<?php 

include_once("templates/header.php");

if(isset($_GET["id"]))
{
    $postId = $_GET["id"];

    $currentPost;

    foreach($posts as $post) {
        if($post["id"] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost["img"]?>" alt="<?= $currentPost["title"] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, facilis itaque, commodi aliquam dolorem molestias amet minima placeat provident dolorum temporibus suscipit culpa assumenda dignissimos vitae obcaecati repellendus quisquam nesciunt!
            Consectetur reiciendis unde excepturi cum explicabo voluptate ducimus dolores quae facilis ullam eos quasi maxime atque officiis pariatur, placeat, velit et, deleniti error odit! Quod eum quas ipsa sed itaque!
            Tempora, voluptate animi, architecto aperiam tenetur fugit at corporis eligendi nemo doloribus neque blanditiis assumenda alias deserunt? Voluptas reprehenderit cupiditate natus asperiores, ab error dolore vitae. Harum omnis aut obcaecati.
            Iusto impedit laudantium dolore voluptas inventore quas, eligendi totam blanditiis vero quidem. Vel delectus in ullam dolorum ab mollitia non, nemo nam aperiam perspiciatis quo, doloribus quia laudantium molestiae explicabo.
            Voluptatibus voluptate iure voluptatem quod aliquid excepturi reprehenderit voluptas officiis modi commodi tenetur, 
            officia temporibus cum fuga! Ipsum, dolor mollitia, error impedit doloremque quasi voluptate tempora id repellat pariatur ea?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, facilis itaque, commodi aliquam dolorem molestias amet minima placeat provident dolorum temporibus suscipit culpa assumenda dignissimos vitae obcaecati repellendus quisquam nesciunt!
            Consectetur reiciendis unde excepturi cum explicabo voluptate ducimus dolores quae facilis ullam eos quasi maxime atque officiis pariatur, placeat, velit et, deleniti error odit! Quod eum quas ipsa sed itaque!
            Tempora, voluptate animi, architecto aperiam tenetur fugit at corporis eligendi nemo doloribus neque blanditiis assumenda alias deserunt? Voluptas reprehenderit cupiditate natus asperiores, ab error dolore vitae. Harum omnis aut obcaecati.
            Iusto impedit laudantium dolore voluptas inventore quas, eligendi totam blanditiis vero quidem. Vel delectus in ullam dolorum ab mollitia non, nemo nam aperiam perspiciatis quo, doloribus quia laudantium molestiae explicabo.
            Voluptatibus voluptate iure voluptatem quod aliquid excepturi reprehenderit voluptas officiis modi commodi tenetur, 
            officia temporibus cum fuga! Ipsum, dolor mollitia, error impedit doloremque quasi voluptate tempora id repellat pariatur ea?</p>
        </div>

          <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost["tags"] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

  

<?php include_once("templates/footer.php") ?>