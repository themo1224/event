<!-- resources/views/infrastructure_security.blade.php -->
@extends('layouts.master')

@section('content')
<div class="my-5">
    <div class="">

        <div class="bg-light">
            <div class="container d-flex justify-content-around align-items-center">

                <!-- Title -->
                <h1 class="display-3 text-primary fw-bold text-start">
                    Консультации по <br> безопасности инфраструктуры
                </h1>

                <!-- Image -->
                <img src="{{ asset('/storage/images/security-pin.png') }}" alt="Infrastructure Security" class="img-fluid" style="max-width: 30%;">
            </div>
        </div>

        <div class="col-md-12 container">
            <!-- Description -->
            <p class="lead">
                Наши услуги по консультированию в области безопасности инфраструктуры помогут защитить ваши данные и
                системы от современных киберугроз. Мы проводим полный аудит безопасности, разрабатываем стратегии
                защиты и внедряем решения для обеспечения безопасности вашей ИТ-инфраструктуры.
            </p>

            <!-- List of services or benefits -->
            <p>
                Наши эксперты имеют богатый опыт в области кибербезопасности и готовы предложить вам комплексные
                решения, включая защиту от DDoS-атак, настройку безопасных VPN, управление доступом и мониторинг сети.
            </p>
            <ul class="list-unstyled">
                <li>- Аудит безопасности и оценка рисков</li>
                <li>- Разработка и внедрение стратегии безопасности</li>
                <li>- Настройка и управление безопасной ИТ-инфраструктурой</li>
                <li>- Обучение сотрудников вопросам кибербезопасности</li>
            </ul>
        </div>
    </div>
</div>
@endsection
