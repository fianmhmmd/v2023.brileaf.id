<?php
/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */
 
$pager->setSurroundCount(2);
?>
<div class="pagination-wrap mb-50">
<nav>
<ul class="pagination">
    <?php if ($pager->hasPrevious()) : ?>
    <li class="page-item"><a href="<?= $pager->getPrevious() ?>"><i class="fas fa-angle-double-left"></i></a></li>
    <?php endif ?>
    <?php foreach ($pager->links() as $link) : ?>
            <li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
                <a href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
     <?php endforeach ?>
     <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a href="<?= $pager->getNext() ?>">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            </li>
        <?php endif ?>
</ul>
</nav>
</div>