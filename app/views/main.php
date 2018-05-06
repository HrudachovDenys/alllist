<div class="categories">
    <?php
        foreach ($data as $category)
        {
            echo "<a href='$category[0]'><img src='/web/img/$category[1]'/><span><p>$category[2]</p><p id='count'>($category[3])</p></span></a>";
        }
    ?>
</div>