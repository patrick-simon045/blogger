@extends('blogPost.blogPost')

@section('blog_contents')
<div class="contents">
    <!-- heading -->
    <div class="heading">Lorem ipsum dolor sit amet consectetur.</div>

    <!-- sub-head -->
    <div class="sub_heading">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae magni ea aliquam consequatur incidunt vel, quidem illo necessitatibus distinctio in.</div>

    <!-- blogger details -->
    <div class="blogger_details">
        <div class="writer_details">
            <div class="profile_image bordered"></div>
            <div class="vertical_arrangement writer_details_post_details">
                <div class="profile_name no_left_padding">
                    FC <span class="bold_part">Barca</span>
                </div>
                <div class="horizontal_arrangement">
                    <div>May 10/21</div>
                    <div class="read_time">6 min read</div>
                </div>
            </div>
        </div>
        <div class="writer_details_links">Links</div>
    </div>

    <!-- blog body -->
    <div class="blog_body">
        <!-- starting image -->
        <img src="{{ asset('images/blog-design.png') }}" alt="" class="blog_images large_image">

        <!-- paragraphs and images -->
        <p class="blog_content_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laboriosam delectus. Exercitationem vel, deleniti tempore cumque modi vero. Atque dignissimos ducimus nostrum suscipit doloribus nobis quam quo in doloremque autem molestias sed perspiciatis dolores, praesentium totam cum. Maiores fugit nam dolor voluptate. Aliquam, quo. Perspiciatis quasi voluptatibus ipsum dolore nesciunt maiores repellendus deleniti asperiores quae molestias sequi magni cupiditate impedit inventore voluptas, excepturi placeat vitae vel quos. Ad natus necessitatibus, quas ullam et mollitia quisquam eligendi, alias placeat officiis, nostrum quasi sed molestias sunt veritatis! Culpa ratione facilis tenetur eum modi a doloremque libero odit reprehenderit porro unde, blanditiis consectetur facere quam natus repudiandae veniam ducimus repellat hic commodi optio excepturi. Labore ab alias blanditiis nulla enim debitis impedit id error voluptatem voluptates sed exercitationem ipsum, tempora totam! Ducimus nam accusamus reprehenderit quaerat doloremque fugit enim quis fugiat rem pariatur illum accusantium doloribus quas quisquam quod aperiam, ex, ratione consectetur!</p>

        <img src="{{ asset('images/mentor-app-design.jpg') }}" alt="" class="blog_images medium_image">

        <p class="blog_content_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, cum sit? Officia, ipsa dolorum modi eligendi sequi facilis ad molestias beatae omnis quos praesentium illo numquam dolores laudantium porro obcaecati tempora aliquam accusantium libero nesciunt minus odit explicabo doloremque. Doloribus molestias est architecto quis. Nemo tempore quo repellat, delectus asperiores animi explicabo voluptatibus temporibus. Nisi dolor vel, officiis itaque molestias minima quae hic inventore quam ab, cupiditate sequi? Cumque dolor, totam, minus adipisci molestiae veritatis ipsum accusamus quam eaque libero sed unde perspiciatis tenetur. Alias, assumenda repellendus asperiores, deserunt quod blanditiis delectus sit officia sint quibusdam natus. Odit deserunt hic eaque porro aut. Eligendi deleniti, numquam ullam atque facere quasi minus ipsa quaerat tenetur mollitia blanditiis nisi accusamus et suscipit?</p>

        <div class="image_with_text_on_side">

            <img src="{{ asset('images/google-map-redesign.jpg') }}" alt="" class="blog_images small_image">

            <p class="blog_content_text blog_content_text_left_margin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quis nobis tenetur, quia sapiente est repellat minima fugit impedit ad accusamus ipsa in dignissimos animi, rerum cumque! Corrupti laborum hic omnis odit, mollitia expedita harum temporibus consectetur, esse cumque eos maiores molestias qui illum modi at non vero neque quae cupiditate dolor. Nihil voluptate laudantium corrupti placeat, odio, sint accusamus obcaecati minus, debitis reprehenderit commodi at autem! Rem, ea repellendus nam quasi ullam, mollitia, quia doloremque itaque magni veniam consectetur? Minima quos, nostrum consequuntur quibusdam maiores dolor eius illum modi?</p>
        </div>

        <p class="blog_content_text blog_content_text_left_margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reprehenderit assumenda illo quae, possimus vel commodi ullam quibusdam iure quasi expedita fuga quo consequatur quis, officia nam rem, adipisci ipsum minima vitae enim quia voluptatibus earum saepe! Eaque optio reprehenderit deleniti. Officiis facilis vero quas adipisci, voluptatum ipsam quasi commodi.</p>

        <div class="image_with_text_on_side">

            <p class="blog_content_text blog_content_text_left_margin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quis nobis tenetur, quia sapiente est repellat minima fugit impedit ad accusamus ipsa in dignissimos animi, rerum cumque! Corrupti laborum hic omnis odit, mollitia expedita harum temporibus consectetur, esse cumque eos maiores molestias qui illum modi at non vero neque quae cupiditate dolor. Nihil voluptate laudantium corrupti placeat, odio, sint accusamus obcaecati minus, debitis reprehenderit commodi at autem! Rem, ea repellendus nam quasi ullam, mollitia, quia doloremque itaque magni veniam consectetur? Minima quos, nostrum consequuntur quibusdam maiores dolor eius illum modi?</p>

            <img src="{{ asset('images/mentor-app-design-2.jpg') }}" alt="" class="blog_images small_image">
        </div>

        <p class="blog_content_text blog_content_text_left_margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reprehenderit assumenda illo quae, possimus vel commodi ullam quibusdam iure quasi expedita fuga quo consequatur quis, officia nam rem, adipisci ipsum minima vitae enim quia voluptatibus earum saepe! Eaque optio reprehenderit deleniti. Officiis facilis vero quas adipisci, voluptatum ipsam quasi commodi.</p>
    </div>
</div>
@endsection