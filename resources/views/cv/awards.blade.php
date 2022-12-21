@extends('cv.master');
@section('title','خبرات')

@section('content');

            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">

                    @foreach ($awards as $awards)
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                       {{ $awards }}
                    </li>

                    @endforeach
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis eaque reprehenderit voluptatem doloribus ipsam ut, a dolore aspernatur dolor, facere aperiam deleniti eos laboriosam quidem iure non architecto accusantium nisi!</p>

                    </ul>
                </div>
            </section>
            @stop
