<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">

<head>
    <!-- Title -->
    <title>Videos & Insights | Gnathos</title>
    <meta name="description" content="Watch the latest videos, patient stories, and medical insights from Gnathos's YouTube channel.">

    <?php include('header-links.php') ?>

    <style>
        .site-header {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        :root {
            --theme-color: #195FAC;
            --theme-light: #2196f3;
            --med-primary: #1976D2;
            --med-light: #64B5F6;
            --med-dark: #0D47A1;
            --med-pale: #E3F2FD;
        }

        .video-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            transition: all 0.4s ease;
            border: 1px solid rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .video-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(25, 118, 210, 0.1);
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            background: #000;
            cursor: pointer;
            overflow: hidden;
        }
        .video-thumb {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease, filter 0.3s ease;
        }
        .video-card:hover .video-thumb {
            transform: scale(1.05);
            filter: brightness(0.85);
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 65px;
            height: 65px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            z-index: 2;
        }
        .play-button svg {
            width: 26px;
            height: 26px;
            fill: var(--theme-color);
            margin-left: 4px;
            transition: fill 0.3s ease;
        }
        .video-card:hover .play-button {
            background: var(--theme-color);
            transform: translate(-50%, -50%) scale(1.1);
        }
        .video-card:hover .play-button svg {
            fill: #fff;
        }
        .video-info {
            padding: 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .video-date {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .video-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1.5;
            margin-bottom: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">

        <!-- Header -->
        <?php include('header.php') ?>
        <!-- Header End -->

        <main class="page-content">
            <!-- Hero Banner -->
            <div class="dz-bnr-inr dz-banner-dark dz-bnr-inr-md" style="background-image:url(assets/images/about-us.webp);">
                <div class="container">
                    <div class="dz-bnr-inr-entry d-table-cell">
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Latest Videos</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item "><a class="text-white" href="index">Home</a></li>
                                <li class="breadcrumb-item">Videos</li>
                            </ul>
                        </nav>
                        <div class="dz-btn">
                            <a href="https://www.youtube.com/channel/UCp3iV-G0jaZnovIu2OtNWdg" target="_blank" class="btn btn-lg btn-icon btn-primary radius-xl btn-shadow mb-3 mb-sm-0">
                                <span class="left-icon">
                                    <i class="fa-brands fa-youtube"></i>
                                </span>
                                Subscribe
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Gallery Section -->
            <section class="content-inner" style="background: linear-gradient(135deg, #fff 0%, var(--med-pale) 100%);">
                <div class="container">
                    <div class="section-head style-1 text-center m-b50">
                        <h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Explore Our Latest Updates</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s" style="max-width: 600px; margin: 0 auto;">Stay informed with the newest medical insights, patient journeys, and expert advice directly from our channel.</p>
                    </div>

                    <div class="video-grid wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 40px;">
                        <?php
                            $channel_id = 'UCp3iV-G0jaZnovIu2OtNWdg';
                            $rss_feed = 'https://www.youtube.com/feeds/videos.xml?channel_id=' . $channel_id;
                            
                            libxml_use_internal_errors(true);
                            $xml = @simplexml_load_file($rss_feed);
                            
                            if ($xml === false) {
                                echo "<div class='text-center w-100' style='grid-column: 1 / -1; padding: 40px;'>";
                                echo "  <p class='text-muted'>Unable to load videos at this time. Please check back later or <a href='https://www.youtube.com/channel/{$channel_id}' target='_blank' style='color: var(--theme-color); font-weight: 600;'>visit our YouTube channel directly</a>.</p>";
                                echo "</div>";
                            } else {
                                $namespaces = $xml->getNamespaces(true);
                                foreach ($xml->entry as $entry) {
                                    $video_id = str_replace('yt:video:', '', $entry->id);
                                    $title = $entry->title;
                                    $published = date('F j, Y', strtotime($entry->published));
                                    
                                    $thumbnail_url = "https://i.ytimg.com/vi/{$video_id}/maxresdefault.jpg";
                                    if (isset($namespaces['media'])) {
                                        $media = $entry->children($namespaces['media']);
                                        if (isset($media->group->thumbnail)) {
                                             $thumbnail_url = (string)$media->group->thumbnail->attributes()->url;
                                        }
                                    }
                                    
                                    echo '<div class="video-card">';
                                    echo '  <div class="video-wrapper" onclick="loadVideo(this, \'' . htmlspecialchars($video_id) . '\')">';
                                    echo '    <img src="' . htmlspecialchars($thumbnail_url) . '" alt="' . htmlspecialchars($title) . '" class="video-thumb" onerror="this.src=\'https://i.ytimg.com/vi/' . htmlspecialchars($video_id) . '/hqdefault.jpg\'">';
                                    echo '    <div class="play-button"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>';
                                    echo '  </div>';
                                    echo '  <div class="video-info">';
                                    echo '    <div class="video-date">' . htmlspecialchars($published) . '</div>';
                                    echo '    <h3 class="video-title">' . htmlspecialchars($title) . '</h3>';
                                    echo '  </div>';
                                    echo '</div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?php include('footer.php') ?>

    </div>

    <!-- Video Loader Script -->
    <script>
        function loadVideo(element, videoId) {
            const iframe = document.createElement('iframe');
            iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
            iframe.setAttribute('allowfullscreen', 'true');
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            
            element.innerHTML = '';
            element.appendChild(iframe);
        }
    </script>

    <!-- JAVASCRIPT FILES ========================================= -->
    <?php include('footer-links.php') ?>
</body>

</html>
