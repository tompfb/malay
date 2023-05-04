<article class="article-container-card pt-4">
    <div class="container">
        <p class="str-news text-center mb-0"><a href="../all-articles/">บทความ / ข่าวสาร</a></p><br>
        <div class="row d-flex justify-content-center align-items-end">
            <?php
            include_once './conn/connect.php';
            $sql = "SELECT * FROM articles 
            ORDER BY id DESC  LIMIT 0,3 ";
            $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
            while ($resuret = mysqli_fetch_array($q)) {
                $d_topic = $resuret['topic_name'];
                $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                $img = $resuret['image_banner'];
                $date = date("Y-m-d", strtotime($resuret['create_at']));
                $view = $resuret['view'];
                $seo_dec = $resuret['descripion_seo'];
                $url_articles_seo = $resuret['url_articles_seo'];
                $article_id = $resuret['id'];
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="bg_articles my-2">
                        <a href="../view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                            <figure class="news-articles-img">
                                <div class="bg-img">
                                    <img class="lazy img-fluid zoom" data-src="../backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                </div>
                            </figure>
                            <div class="px-2">
                                <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                <div class="view_date">
                                    <span>
                                        โพสเมื่อ : <?php echo $date; ?>
                                    </span>
                                    <span>
                                        ผู้เข้าชม : <?php echo $view; ?>
                                    </span>
                                </div>

                                <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>

                            </div>
                        </a>
                        <div class="usertag">
                            <div class="tag__info">
                                <?php
                                $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                while ($result_tag = $query_tag->fetch_assoc()) {
                                ?>
                                    <a href="../tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                        <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }

            ?>
        </div>
    </div>
</article>