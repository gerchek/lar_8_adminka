@extends('halk_bank.layout.layout')


@section('page')

<!-- Breadcrumb =============================================== -->
<div class="breadcrumb">
        <div class="auto_container">
            <div class="crumb_wrap">
                <a href="#" class="crumb_item">
                    Главная
                </a>
                <div class="crumb_item">
                    Банкоматы
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
                        <div class="info_data">
                            <div class="info_title">
                                Банкоматы
                            </div>
                            <div class="info_text">
                                Список банкоматов, установленных ГКБ "Халкбанк" Туркменистана
                            </div>
                        </div>
                        <div class="info_banner_photo">
                            <img src="images/infao_banner.png" alt="">
                        </div>
                    </div>

                    <div class="atm_table">
                         <form  class="search_table">  <!--method="POST" action="{{ route('atms_atms')}}"    @csrf-->
                          
                            <div class="atm_search">
                                <label for="search">
                                    Поисковая строка
                                </label>
                                <input type="text" id="search" placeholder="Поиск...">
                                <div class="search_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.608" height="12"
                                        viewBox="0 0 10.608 12">
                                        <path id="Иконка_поиск_" data-name="Иконка (поиск)"
                                            d="M18.39,18.806l-2.118-2.238a4.941,4.941,0,1,0-3.339,1.313,4.871,4.871,0,0,0,2.168-.509L17.36,19.78a.709.709,0,1,0,1.031-.974ZM9.405,12.941a3.529,3.529,0,1,1,3.529,3.529A3.529,3.529,0,0,1,9.405,12.941Z"
                                            transform="translate(-7.977 -7.999)" fill="#01815E" />
                                    </svg>
                                </div>
                            </div>
                            <div class="atm_select">
                                <label>Выбор региона</label>
                                <div class="select_box">
                                    <select onchange="myfunc()" id="select_id" name="aa"> <!-- onchange="this.form.submit()" -->
                                    @foreach ($Category as $data)
                                        <option class="product_sorting_btn" value="{{ $data->id }}">{{ $data->title }}</option>
                                        <!-- <option value="1">Mary</option>
                                        <option value="2">Ahal</option>
                                        <option value="3">Lebap</option>
                                        <option value="4">Dasoguz</option> -->
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="table_outer">
                            <table>
                                <thead>
                                    <tr>
                                        <th>П/П</th>
                                        <th>Название организации</th>
                                        <th>Адрес</th>
                                    </tr>
                                </thead>
                                <tbody>

                               

                                @if(isset($maglumat))
                                @foreach ($maglumat as $mag)
                                <tr>
                                        <td>{{ $mag->id }}</td>
                                        <td>{{ $mag->name }}</td>
                                        <td>ул. 1916 (Б. Аннаннова), д. 129</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                
                                <tr>
                                        <td>1</td>
                                        <td>"Банковская школа" ЦБ Туркменистана</td>
                                        <td>ул. 1916 (Б. Аннаннова), д. 129</td>
                                    </tr>
                                











                                





                                </tbody>
                            </table>
                            <div class="table_text">
                                На состояние 05.03.2018 г.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Info Block end ======================================= -->

    <script>
    // var divarrays = $(".select-items div");
    // divarrays.each(function (){
    //     $(this).attr("onclick", "myfunc()");
    // });

    function myfunc() {
       d = document.getElementById("select_id").value;
       console.log(d);
   }

        
    </script> 


    @endsection