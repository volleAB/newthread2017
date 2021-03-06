<?php 
/**
 * template name:新闻中心
 * 
 * 2018.7.27
 * by fig
 * v1.0.0
 */
get_header(  );
?>
<section class="news page-all" id="news">
    <div class="backgrund"></div>
    <main>
        <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a href="<?php echo curPageURL();?>" class="hide">团队动态</a>
                <span class="thisPage"></span>
            </nav>
         
            <ul class="bottom">
                <li class="option" data-num="one"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.129cm" height="1.129cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M29.999,31.997 L2.000,31.997 C0.895,31.997 -0.000,31.101 -0.000,29.996 L-0.000,1.996 C-0.000,0.892 0.895,-0.003 2.000,-0.003 L29.999,-0.003 C31.104,-0.003 32.000,0.892 32.000,1.996 L32.000,29.996 C32.000,31.101 31.104,31.997 29.999,31.997 ZM30.720,2.558 C30.720,1.852 30.147,1.278 29.440,1.278 L2.560,1.278 C1.853,1.278 1.280,1.852 1.280,2.558 L1.280,29.438 C1.280,30.146 1.853,30.719 2.560,30.719 L29.440,30.719 C30.147,30.719 30.720,30.146 30.720,29.438 L30.720,2.558 ZM3.840,25.599 L28.160,25.599 L28.160,26.879 L3.840,26.879 L3.840,25.599 ZM3.840,21.759 L28.160,21.759 L28.160,23.039 L3.840,23.039 L3.840,21.759 ZM3.840,17.919 L28.160,17.919 L28.160,19.199 L3.840,19.199 L3.840,17.919 ZM17.920,14.078 L28.160,14.078 L28.160,15.358 L17.920,15.358 L17.920,14.078 ZM17.920,10.238 L28.160,10.238 L28.160,11.518 L17.920,11.518 L17.920,10.238 ZM17.920,6.398 L28.160,6.398 L28.160,7.679 L17.920,7.679 L17.920,6.398 ZM12.800,15.358 L6.400,15.358 C4.986,15.358 3.840,14.212 3.840,12.799 L3.840,7.679 C3.840,6.265 4.986,5.119 6.400,5.119 L12.800,5.119 C14.214,5.119 15.360,6.265 15.360,7.679 L15.360,12.799 C15.360,14.212 14.214,15.358 12.800,15.358 ZM14.080,7.679 C14.080,6.972 13.506,6.398 12.800,6.398 L6.400,6.398 C5.693,6.398 5.120,6.972 5.120,7.679 L5.120,12.799 C5.120,13.505 5.693,14.078 6.400,14.078 L12.800,14.078 C13.506,14.078 14.080,13.505 14.080,12.799 L14.080,7.679 Z"></path>
                    </svg>
                    团队新闻
                </li>
                <li class="option " data-num="two"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.129cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M29.999,32.997 L1.999,32.997 C0.895,32.997 -0.000,32.074 -0.000,30.937 L-0.000,2.088 C-0.000,0.950 0.895,0.027 1.999,0.027 L17.936,0.027 L17.936,1.346 L1.280,1.346 L1.280,31.678 L30.720,31.678 L30.720,14.545 L31.999,14.545 L31.999,30.937 C31.999,32.074 31.104,32.997 29.999,32.997 ZM29.004,8.767 L13.385,24.883 L6.953,27.727 L5.116,25.831 L7.872,19.195 L22.572,4.027 L22.572,4.027 L23.491,3.078 L25.329,1.183 C26.851,-0.388 29.319,-0.388 30.841,1.183 C32.364,2.753 32.364,5.300 30.841,6.871 L29.004,8.767 ZM6.953,25.831 L12.466,23.935 L8.791,20.143 L6.953,25.831 ZM23.491,4.975 L9.710,19.195 L13.385,22.987 L27.166,8.766 L23.491,4.975 ZM29.923,2.131 C28.908,1.083 27.262,1.083 26.247,2.131 L24.410,4.027 L24.410,4.027 L25.368,5.016 L25.368,5.015 L27.192,6.898 L28.085,7.818 L29.923,5.923 C30.937,4.875 30.937,3.178 29.923,2.131 Z"></path>
                    </svg>
                    例会动态
                </li>
                <li class="option " data-num="three"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.058cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M23.670,22.447 C22.124,22.447 20.249,22.055 17.999,21.003 C14.114,19.188 10.503,18.639 7.549,18.639 C4.776,18.639 2.596,19.123 1.304,19.503 L1.304,32.339 C1.304,32.704 1.012,32.998 0.652,32.998 C0.292,32.998 -0.000,32.704 -0.000,32.339 L-0.000,19.952 L-0.000,3.299 L-0.000,2.093 C-0.000,2.093 3.606,0.041 8.940,0.041 C11.606,0.041 14.705,0.555 17.999,2.093 C20.249,3.144 22.124,3.538 23.670,3.538 C28.312,3.538 30.000,-0.009 30.000,-0.009 L30.000,18.901 C30.000,18.901 28.312,22.447 23.670,22.447 ZM28.695,3.364 C27.518,4.192 25.877,4.882 23.670,4.882 C21.774,4.882 19.685,4.356 17.462,3.318 C14.716,2.036 11.850,1.387 8.940,1.387 C5.292,1.387 2.519,2.403 1.304,2.943 L1.304,18.107 C2.716,17.721 4.880,17.294 7.549,17.294 C11.310,17.294 15.007,18.130 18.538,19.778 C20.420,20.657 22.147,21.102 23.670,21.102 C26.786,21.102 28.262,19.218 28.695,18.537 L28.695,3.364 Z"></path>
                    </svg>
                    文化活动
                </li>
                <li class="option " data-num="four"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.094cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M28.304,32.999 L2.695,32.999 C1.207,32.999 -0.000,31.817 -0.000,30.358 L-0.000,10.557 L-0.000,10.557 L-0.000,9.237 L-0.000,9.237 L-0.000,5.278 C-0.000,3.821 1.207,2.639 2.695,2.639 L8.094,2.639 L8.094,-0.004 L9.443,-0.004 L9.443,2.639 L21.556,2.639 L21.556,-0.004 L22.905,-0.004 L22.905,2.639 L28.304,2.639 C29.793,2.639 31.000,3.821 31.000,5.278 L31.000,30.358 C31.000,31.817 29.793,32.999 28.304,32.999 ZM29.652,5.278 C29.652,4.550 29.048,3.958 28.304,3.958 L22.905,3.958 L22.905,5.277 L21.556,5.277 L21.556,3.958 L9.443,3.958 L9.443,5.277 L8.094,5.277 L8.094,3.958 L2.695,3.958 C1.951,3.958 1.347,4.550 1.347,5.278 L1.347,9.237 L29.652,9.237 L29.652,5.278 ZM29.652,10.557 L1.347,10.557 L1.347,30.358 C1.347,31.088 1.951,31.679 2.695,31.679 L28.304,31.679 C29.048,31.679 29.652,31.088 29.652,30.358 L29.652,10.557 ZM20.235,22.437 L26.938,22.437 L26.938,29.036 L20.235,29.036 L20.235,22.437 ZM21.602,27.715 L25.570,27.715 L25.570,23.753 L21.602,23.753 L21.602,27.715 ZM20.235,13.197 L26.938,13.197 L26.938,19.796 L20.235,19.796 L20.235,13.197 ZM21.602,18.475 L25.570,18.475 L25.570,14.514 L21.602,14.514 L21.602,18.475 ZM12.148,22.437 L18.851,22.437 L18.851,29.036 L12.148,29.036 L12.148,22.437 ZM13.515,27.715 L17.483,27.715 L17.483,23.753 L13.515,23.753 L13.515,27.715 ZM12.148,13.197 L18.851,13.197 L18.851,19.796 L12.148,19.796 L12.148,13.197 ZM13.515,18.475 L17.483,18.475 L17.483,14.514 L13.515,14.514 L13.515,18.475 ZM4.061,22.437 L10.764,22.437 L10.764,29.036 L4.061,29.036 L4.061,22.437 ZM5.428,27.715 L9.396,27.715 L9.396,23.753 L5.428,23.753 L5.428,27.715 ZM4.061,13.197 L10.764,13.197 L10.764,19.796 L4.061,19.796 L4.061,13.197 ZM5.428,18.475 L9.396,18.475 L9.396,14.514 L5.428,14.514 L5.428,18.475 Z"></path>
                    </svg>
                    项目快报
                </li>
                <li class="option " data-num="five"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M27.060,19.797 L26.400,19.797 L26.400,26.397 L17.598,19.797 L11.220,19.797 C7.939,19.797 5.280,17.137 5.280,13.857 L5.280,5.937 C5.280,2.656 7.939,-0.002 11.220,-0.002 L27.060,-0.002 C30.340,-0.002 33.000,2.656 33.000,5.937 L33.000,13.857 C33.000,17.137 30.340,19.797 27.060,19.797 ZM31.680,5.607 C31.680,3.237 29.808,1.317 27.500,1.317 L10.780,1.317 C8.471,1.317 6.600,3.237 6.600,5.607 L6.600,14.187 C6.600,16.557 8.471,18.477 10.780,18.477 L18.742,18.477 L25.080,23.758 L25.080,18.478 L25.067,18.477 L27.500,18.477 C29.808,18.477 31.680,16.557 31.680,14.187 L31.680,5.607 ZM1.320,20.787 C1.320,23.156 3.191,25.076 5.500,25.076 L7.936,25.076 L7.920,25.078 L7.920,30.357 L14.258,25.076 L18.480,25.076 L18.480,26.397 L15.401,26.397 L6.600,32.997 L6.600,26.397 L5.940,26.397 C2.659,26.397 -0.000,23.738 -0.000,20.457 L-0.000,12.537 C-0.000,10.478 1.048,8.666 2.640,7.600 L2.640,9.092 C1.831,9.875 1.320,10.976 1.320,12.207 L1.320,20.787 Z"></path>
                    </svg>
                    交流合作
                </li>
               
            </ul>
        </header>

 
<!-- 5交流合作 -->
        <section class="five" id="js_five">
            <!-- <div class="title">
                <?php 
                $cat_id = get_category_by_slug('news')->term_id; 
                // echo get_cat_name($cat_id); 
                // echo category_description($cat_id);
                ?>
            </div> -->
            <div class="content">
                <?php
                 $current_page = max(1, get_query_var('paged')); //当前第几页
                $posts = new WP_Query(array(
                    'cat' => $cat_id ,
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $current_page //当前页
                    
                ));
                $count=get_category($cat_id)->count;//获取文章数
                $i=0;
                ?>
                <div class="page-box page-box-five"  isHide="false">

                <?php   if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();                   
                ?>
                        <a href="<?php the_permalink(  ); ?>">
                        <div class="box">
                            <div class="top">
                                <span class="time-1"><?php echo substr(get_the_date("Y-m-d" ),5,5);  ?></span>
                                <span class="time-2"><?php echo substr(get_the_date("Y-m-d" ),0,4);  ?></span>
                            </div>
                            <div class="txt-box">
                            
                                <h3><?php  the_title();?></h3>
                                <div class="p"><?php the_excerpt(  ); ?></div>
                            </div>
                        </div></a>
                <?php  $i++; } }?>
                </div><!-- postLis-->

                <div class="page-navs">
                    <?php  echo paginate_links( array(
							'prev_text'          => __( '上一页' ),
							'next_text'          => __( '下一页' ),
							'screen_reader_text'  => null,
							'total' => $posts->max_num_pages ,  //总页数
							'current' => $current_page, //当前页数
							) ) ?>
                </div>
            </div>
                
        </section>

    </main>
</section>

<?php get_footer(  ); ?>