@extends('main')

@section('main-content')
    <div>
        <h1 class="text-center text-md-left">roger medico piqué</h1>
        <div class="text-center">
            <img class="cv-image img-fluid mb-3 mb-md-2 ml-md-3" src="{{asset('storage/cv_round.png')}}" alt="Profile photo">
        </div>
        <div class="mb-3">
            <h2>{{__('what I am looking for')}}</h2>
            <div class="cv-body ml-3">
                <p class="ml-3 py-2">{{__('I am excited by the opportunity to work permanently with an innovative company in which I can utilize my experience and my skills as a frontend and/or a backend web developer and thus contribute to the success of the company.')}} </p>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('about me')}}</h2>
            <div class="cv-body ml-3">
                    <p class="ml-3 py-2">
                        {!!__('After 8 years working as an audio-visual and computer technician, I decided to expand my personal and professional horizons by moving to Sweden and later to the UK while finishing my BSc in Computer Science and completing my MS in Web Development in a distance-learning university. As a freelance web developer, I have successfully developed personal websites and a corporate intranet using Angular as a frontend and Laravel as a backend, which are only an example of some of the technical skills I possess. Personally, I’m a fast learner, logical minded and a responsible team player who can also work independently. I’m currently seeking a permanent position as a frontend or backend web developer in an exciting and innovative company.')!!}
                    </p>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('education and training')}}</h2>
            <div class="cv-body ml-3">
                <ul class="list-unstyled ml-3 py-2">
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('MSc in Web Development')}}</span> {{__('in Universitat Oberta de Catalunya, finished the 7th of July 2021.')}}
                    </li>
                    <li>
                        <span class="font-weight-bold">{{__('BSc in Computer Science')}}</span> {{__('in Universitat Oberta de Catalunya, finished the 10th of January 2020.')}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('work experience')}}</h2>
            <div class="cv-body ml-3">
                <ul class="list-unstyled ml-3 py-2">
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Freelance web developing')}}</span> {{__('(1st of January 2021 – current). Web development mainly in Angular and Laravel.')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Nextec Technological Projects S.L.')}}</span> {{__('(17th of January 2017 – 22th of December 2017). Touchscreens, audio-visual equipment and computer deployment. Network deployment and enhancements.')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Grup Comm Technology Tarragona Lleida S.L.')}}</span> {{__('(2nd of July 2010 – 16th of January 2017). Touchscreens, audio-visual equipment and computer deployment. Network deployment and enhancements.')}}
                    </li>
                    <li>
                        <span class="font-weight-bold">{{__('Solucions d\'Assessorament Gestió i Implementació Audiovisual i Informàtica de Catalunya S.L.')}}</span> {{__('(11th of August 2009 – 1st of July 2010). Helpdesk to high schools.')}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('technical skills')}}</h2>
            <div class="cv-body ml-3">
                <ul class="list-unstyled ml-3 py-2">
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Web development related:')}}</span> {{__('HTML, CSS, SASS, JS, TypeScript, PHP, PHPUnit, MySQL, NPM, Git, Composer, Node.js, RxJS, Angular, Laravel, Codeigniter, Redux, Bootstrap, Angular Material, Tailwind, LAMP, PhpMyAdmin.')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Other programming languages:')}}</span> {{__('C, Java, R, Python, Bash.')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Development patterns:')}}</span> {{__('TDD, OOP, MVC.')}}
                    </li>
                    <li>
                        <span class="font-weight-bold">{{__('Other skills:')}}</span> {{__('Embedded systems, microcontrollers, networks.')}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('languages')}}</h2>
            <div class="cv-body ml-3">
                <ul class="list-unstyled ml-3 py-2">
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('English:')}}</span> {{__('Independent user (B2 CEFR & living in the UK).')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Catalan:')}}</span> {{__('Proficiency user (Native).')}}
                    </li>
                    <li>
                        <span class="font-weight-bold">{{__('Spanish:')}}</span> {{__('Proficiency user (Native).')}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h2>{{__('personal info')}}</h2>
            <div class="cv-body ml-3">
                <ul class="list-unstyled ml-3 py-2">
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Phone:')}}</span> {{__('+34 690208110 and +44 (0) 7521126691')}}
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Email:')}}</span> <a href="mailto:roger.medico@gmail.com">roger.medico@gmail.com</a>
                    </li>
                    <li class="mb-1">
                        <span class="font-weight-bold">{{__('Residency:')}}</span> {{__('Newcastle Upon Tyne (UK) (open to relocation)')}}
                    </li>
                    <li>
                        <span class="font-weight-bold">{{__('Availability:')}}</span> {{__('Immediate')}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
