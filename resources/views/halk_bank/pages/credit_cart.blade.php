@extends('halk_bank.layout.layout')


@section('page')
<!-- Breadcrumb =============================================== -->
<div class="breadcrumb">
        <div class="auto_container">
            <div class="crumb_wrap">
                <a href="#" class="crumb_item">
                    Главная
                </a>
                <a href="#" class="crumb_item">
                    Физические лица
                </a>
                <div class="crumb_item">
                    Карты
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb end =========================================== -->

<!-- Info Block =========================================== -->
<section class="other_page">
        <section class="info">
            <div class="auto_container">
                <div class="info_wrap">
                    <div class="info_banner">
                        <div class="info_data def">
                            <div class="info_title">
                                Карты
                            </div>
                            <div class="info_text">
                                Банк – Всегда в Ваших руках
                            </div>
                        </div>
                        <div class="info_banner_photo">
                            <img src="images/credit-card.png" alt="photo">
                        </div>
                    </div>

                    <div class="credit_card_info">
                        <div class="credit_card_box">

                        @foreach ($data as $item)
                            <div class="credit_card_item">
                                <div class="credit_card_photo">
                                    <img src="{{ $item->image }}" alt="photo">
                                </div>
                                <div class="credit_card_group">
                                    <div class="credit_card_title">
                                    {{ $item->title }}
                                    </div>
                                    <div class="credit_card_text">
                                    {{ $item->text }}
                                    </div>
                                </div>
                            </div>
                         @endforeach    
                        </div>
                        <a href="#" class="credit_card_btn">
                            Правила безопасности
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Info Block end ======================================= -->


    @endsection