<section id="portfolio">
    <div class="portfolio">
        <div class="portfolio__title">
            <h2 class="section__title">Portfolio</h2>
            <div class="nav-buttons">
                <a href="#" class="nav-buttons__link">
                    <svg height="24" class="octicon octicon-note" viewBox="0 0 14 16" version="1.1" width="28" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10h4V9H3v1zm0-2h6V7H3v1zm0-2h8V5H3v1zm10 6H1V3h12v9zM1 2c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H1z"></path>
                    </svg> Contact information
                </a>
                <a href="#" class="nav-buttons__link">
                    <svg height="24" class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="28" aria-hidden="true">
                        <path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"></path>
                    </svg> Send message
                </a>
                <a href="#" class="nav-buttons__link">
                    <svg height="24" class="octicon octicon-cloud-download" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 12h2l-3 3-3-3h2V7h2v5zm3-8c0-.44-.91-3-4.5-3C5.08 1 3 2.92 3 5 1.02 5 0 6.52 0 8c0 1.53 1 3 3 3h3V9.7H3C1.38 9.7 1.3 8.28 1.3 8c0-.17.05-1.7 1.7-1.7h1.3V5c0-1.39 1.56-2.7 3.2-2.7 2.55 0 3.13 1.55 3.2 1.8v1.2H12c.81 0 2.7.22 2.7 2.2 0 2.09-2.25 2.2-2.7 2.2h-2V11h2c2.08 0 4-1.16 4-3.5C16 5.06 14.08 4 12 4z"></path>
                    </svg> Download CV
                </a>
            </div>
        </div>

        <div class="portfolio__layout">
            @for($i=0;$i<9;$i++)
            <div class="portfolio-item">
                <div class="portfolio-item__image">
                    <img src="https://picsum.photos/seed/picsum/360/250">
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
