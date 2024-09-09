<!-- resources/views/support_launch_educational_platforms.blade.php -->
@extends('layouts.master')

@section('content')
<div class="my-5">
    <div class="">

        <div class="bg-light">
            <div class="container d-flex justify-content-around align-items-center">

                <!-- Title -->
                <h1 class="display-3 text-primary fw-bold text-start">
                    Поддержка и запуск <br> образовательных платформ
                </h1>

                <!-- Image -->
                <img src="{{ asset('/storage/images/data-analysis.png') }}" alt="Educational Platforms" class="img-fluid" style="max-width: 30%;">
            </div>
        </div>

        <div class="col-md-12 container">
            <!-- Description -->
            <p class="lead">
                Наша образовательная платформа — это комплексное и гибкое решение для обучения профессионалов и
                специализированного обучения по любой дисциплине. Платформа позволяет организациям и учебным центрам
                легко проводить курсы в формате онлайн, офлайн и очных занятий, а также автоматически управлять
                образовательным процессом.
            </p>

            <!-- List of platform features -->
            <p class="lead">Возможности платформы включают:</p>
            <ul class="list-unstyled">
                <li>- Онлайн-обучение: Проведение живых занятий или предоставление записанных курсов с интерактивными функциями.</li>
                <li>- Офлайн-обучение: Доступ к заранее записанным учебным материалам в любое время.</li>
                <li>- Автоматизация очного обучения: Автоматическое управление очными занятиями, учёт посещаемости и проведение оценок.</li>
                <li>- Поддержка и консультации: Наша команда готова помочь на всех этапах — от проектирования до внедрения и полной поддержки платформы.</li>
            </ul>

            <p class="lead">
                Эта платформа легко настраивается и адаптируется для любого типа образовательных курсов и предназначена для оптимизации учебных процессов и повышения качества обучения.
            </p>
        </div>
    </div>
</div>
@endsection
