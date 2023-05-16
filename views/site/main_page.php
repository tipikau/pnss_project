<?php

use Src\Auth\Auth;

?>
<header class="bd-header bg-white py-3 d-flex align-items-stretch border-bottom border-dark" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="container-fluid d-flex align-items-center">
        <h1 class="d-flex align-items-center fs-4 text-black mb-0">
            Библиотека
        </h1>
    </div>
    <div class="col-md-3 mb-2 mb-md-0 ">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Начальная загрузка"><use xlink:href="#bootstrap"></use></svg>
        </a>
    </div>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Книги</font></font></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Читатели</font></font></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Жанры</font></font></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Издательства</font></font></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Залы</font></font></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit">Сотрудники</font></font></a></li>
    </ul>
    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="<?= app()->route->getUrl('/logout') ?>" class="sidebar-link sidebar-img-link">Выход</a></font></font></button>
    </div>
</header>
<main>
    <h1 class="<h1 class"d-flex flex-wrap align-items-center justify-content-center">Главная</h1>
    <p class="txt d-flex flex-wrap align-items-center justify-content-center">На главной странице представлены наиболее популярные книги:</p>
    <div class="popular-book-list">
        <?php
        foreach ($book_list as $book){?>
            <div class="popular-book-list-itm">
                <p class="title"><?= $book->name ?></p>
                <div class="half-block">
                    <div>
                        <p class="subtitle"><?= $book->author ?></p>
                        <p class="subtitle"><?= $book->book_title ?></p>
                        <p class="subtitle">Дата публикации: <?= $book->publish_date ?></p>
                    </div>
                    <p class="price"><?= $book->price ?></p>
                </div>
                <div class="bottom-block">
                    <a class="annotation-btn" href="book/?id=<?=$book->book_id?>">Перейти к аннотации -></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</main>