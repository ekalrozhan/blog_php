<?php
include("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="media mt-4 border border-1 p-3">
                    <div class="media-left media-top mr-4">
                        <img src="images/me.png" alt="" class="media-object" width="200">
                        <p>
                            Author: Admin<br />
                            Created: 2022-10-3
                        </p>
                    </div>
                    <div class="media-body text-justify">
                        <h4 class="media-heading"><a href="">Lorem ipsum dolor sit amet.</a></h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui debitis sapiente iure? Reprehenderit nesciunt a sapiente asperiores, illo quos iusto provident quis eaque dolorem quo numquam fugiat recusandae dicta harum nemo officia porro ab assumenda nihil ratione laudantium? Veniam fugiat, aliquam voluptatem ut mollitia exercitationem voluptates numquam distinctio sed illum. Eos ex, facere, reprehenderit distinctio enim assumenda aliquid illum at eius accusamus voluptate nobis? Ducimus, accusantium labore assumenda autem minima officia, ad illo aliquam veritatis perspiciatis, repellat architecto molestias eos est iure sit alias repudiandae suscipit debitis consequatur? Veniam excepturi quaerat ex hic quasi tenetur molestias alias iure dolor voluptatum!
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>