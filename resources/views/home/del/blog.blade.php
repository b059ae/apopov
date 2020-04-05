<section id="blog">
    <div class="blog section-bg">
        <div class="blog__title">
            <h2 class="section__title">Blog</h2>
        </div>

        <div class="blog__layout">
            @for($i=0;$i<4;$i++)
                <div class="blog-item">
                    <img class="blog-item__image" src="https://picsum.photos/id/0/555/250">

                    <div class="blog-item__description">
                        Of the major social networks, Twitter is about the only place I regularly participate. It’s far from perfect (and I’ve become quite skilled at the ol’ report-and-block maneuver), but for me, Twitter is that right combination of breaking news, tech discussions, and comedy (safe to say we could all do without the white supremacists and bots on the service, of course).
                    </div>

                    <div class="blog-item__footer">
                        <a href="#" class="blog-item__link">
                            Continue reading →
                        </a>
                    </div>
                </div>
            @endfor

            <div class="blog__footer">
                <a href="#" class="blog__footer__link">
                    View all →
                </a>
            </div>
        </div>
    </div>
</section>
