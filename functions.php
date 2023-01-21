<?php

    function bread_crump($title="", $intro="", $post = "", $link = "", $img = ""){

        if ($post == ""){
            echo "
                <div class='page-header d-flex align-items-center' style='background-image: url($img);'>
                    <div class='container position-relative'>
                    <div class='row d-flex justify-content-center'>
                        <div class='col-lg-6 text-center'>
                            <h2>$title Courses</h2>
                            <p>$intro</p>
                        </div>
                    </div>
                    </div>
                </div>
                <nav>
                    <div class='container'>
                        <ol>
                            <li><a href='index.php'>Home</a></li>
                            <li><a>$title</a></li>
                        </ol>
                    </div>
                </nav>
            ";
            
        } else{

            echo "
                <div class='page-header d-flex align-items-center' style='background-image: url($img);'>
                    <div class='container position-relative'>
                    <div class='row d-flex justify-content-center'>
                        <div class='col-lg-6 text-center'>
                            <h4 class='text-light'>$title</h4>
                            <p>$intro</p>
                        </div>
                    </div>
                    </div>
                </div>
                <nav>
                    <div class='container'>
                    <ol>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='$link'>$title</a></li>
                        <li>$post</li>
                    </ol>
                    </div>
                </nav>
            ";
        }
    }

    function create_post($post_item = "", $image = "", $course = "", $topic = ""){
        echo "
            <div class='col-xl-4 col-md-6'>
                <a href='$post_item.php'>
                    <article>
                        <div class='post-img'>
                            <img src='$image' alt='' class='img-fluid'>
                        </div>

                        <p class='post-category'>$course</p>

                        <h2 class='title'>
                            <a href='$category/$post_item.php''>$topic</a>
                        </h2>

                    </article>
                </a>
            </div>
        ";
    }

?>