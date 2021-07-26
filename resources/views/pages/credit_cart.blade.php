@extends('layout.layout')


@section('page')

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

                        @foreach ($Image as $product)
                            <div class="credit_card_item">
                                <div class="credit_card_photo">
                                    <img src="/image/{{ $product->image }}" alt="photo">
                                </div>
                                <div class="credit_card_group">
                                    <div class="credit_card_title">
                                    {{ $product->name }}
                                    </div>
                                    <div class="credit_card_text">
                                        Банковская карта, на которую зачисляется заработная плата клиента. Открывается на
                                        основании договора между банком и предприятием. Эта карта предоставляет полный
                                        перечень услуг по безналичному платежу в терминалах, перевод денежных средств с
                                        одной зарплатной карты на другую, а также получению наличных денежных средств в
                                        банкоматах на территории Туркменистана.
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