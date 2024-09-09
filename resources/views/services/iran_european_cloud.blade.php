    <!-- resources/views/iran_european_cloud.blade.php -->
    @extends('layouts.master')

    @section('content')
    <div class=" my-5">
        <div class="">

            <div class=" bg-light  ">
            <div class="container d-flex justify-content-around align-items-center">

                <h1 class="display-3 text-primary fw-bold text-start ">Иранские и <br>европейские облачные серверы</h1>
                <img src="{{ asset('/storage/images/cloud-service.png') }}" alt="Cloud Servers" class="img-fluid " style="max-width: 30%;">
            </div>


            </div>
            <div class="col-md-12 container">
                <p class="lead">
                    Наши облачные серверы в Иране и Европе предоставляют высокопроизводительные и надежные решения для
                    хранения данных и запуска приложений. Мы предлагаем широкий выбор серверных конфигураций для
                    удовлетворения любых потребностей вашего бизнеса. Благодаря нашим дата-центрам в Иране и Европе, вы
                    можете выбрать оптимальное местоположение для минимизации задержек и обеспечения высокой доступности
                    ваших сервисов.
                </p>
                <div class="col-md-12">
                    <ul class="list-unstyled">
                        <li>- Высокая производительность и надежность</li>
                        <li>- Низкие задержки благодаря выбору местоположения</li>
                        <li>- Гибкие конфигурации серверов</li>
                        <li>- Быстрое масштабирование под ваши нужды</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
