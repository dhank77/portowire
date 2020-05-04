<div>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <?php $exp = explode(',', $data->name) ?>
            <h2 class="mb-0" style="font-size:80px">{{ $exp[0] }},
                <span class="text-primary">{{ $exp[1] }}</span>
            </h2>
            <div class="subheading mb-5">{{ $data->address }} ·
            <?php $contact = explode(' ', $data->contact) ?>
                <a href="mailto:{{ $contact[0] }}">{{ $contact[0] }}</a>
                <a href="tel:{{ $contact[1] }}">{{ $contact[1] }}</a>
            </div>
            <p class="lead mb-5">{{ $data->description }}.</p>
            <?php $social = explode('~', $data->social) ?>
            <div class="social-icons">
                <a href="{{ $social[2] }}">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="{{ $social[1] }}">
                    <i class="fab fa-github"></i>
                </a>
                <a href="{{ $social[0] }}">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </section>
</div>
