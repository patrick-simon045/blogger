<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogPost.css">
    <title>Blogger</title>
</head>

<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        border-radius: 0px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #222222;
        border-radius: 1%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: whitesmoke;
    }

    .navigation_bar {
        height: 60px;
        padding: 0 60px;
        margin-bottom: 20px;
        background-color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .footer {
        height: 70vh;
        width: 100%;
        margin-top: 20px;
        position: relative;
        background-color: #222222;
    }

    .horizontal_arrangement {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .vertical_arrangement {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .logo {
        font-weight: 100;
        font-size: 30px;
    }

    .bold_part {
        font-weight: bold;
    }

    .profile_image {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background: linear-gradient(90deg, rgba(185, 182, 230, 1) 0%, rgba(9, 125, 55, 1) 35%, rgba(0, 212, 255, 1) 100%);
    }

    .bordered {
        border: 2px solid red;
        padding: 5px;
    }

    .profile_name {
        padding-left: 10px;
        font-size: 12px;
        font-weight: 100;
    }

    .no_left_padding {
        padding-left: 0;
    }

    .user_profile {
        margin-left: 40px;
    }

    .publish_button {
        height: 100%;
        width: 100px;
        background-color: blueviolet;
        color: white;
        font-weight: bold;
        font-size: 12px;
    }

    .contents {
        width: 60vw;
        margin: 0 auto;
        padding: 20px 0;
    }

    .heading {
        width: 100%;
        font-size: 50px;
        font-weight: bold;
        text-align: center;
    }

    .sub_heading {
        width: 100%;
        margin-top: 10px;
        font-size: 18px;
        font-weight: normal;
    }

    .writer_details {
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .writer_details_post_details {
        margin-left: 10px;
    }

    .read_time {
        margin-left: 5px;
    }

    .blogger_details {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .blog_images {
        z-index: 10;
        position: relative;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }

    .blog_images:hover {
        cursor: pointer;
    }

    .large_image {
        width: 98vw;
        margin-left: -19vw;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .medium_image {
        width: 60vw;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .small_image {
        width: 30vw;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .image_with_text_on_side {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .blog_content_text {
        font-size: 18px;
        line-height: 1.5;
    }

    .blog_content_text_left_margin {
        padding-left: 20px;
    }
</style>

<body>
    <!-- navigation bar -->
    <section class="navigation_bar">
        <div class="horizontal_arrangement">

            <!-- logo -->
            <h4 class="logo">S<span class="bold_part">B</span></h4>

            <!-- user profile -->
            <div class="user_profile">
                <div class="horizontal_arrangement">
                    <div class="profile_image"></div>
                    <div class="profile_name">Steven <span class="bold_part">Mathew</span></div>
                </div>
            </div>
        </div>

        <!-- publish button -->
        <div class="publish_button horizontal_arrangement">Publish</div>
    </section>

    <!-- contents -->
    @yield('blog_contents')

    <!-- footer -->
    <section class="footer"></section>
</body>

</html>