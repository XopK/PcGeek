<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>PcGeek</title>
</head>

<body>
    <div class="container config-con">
        <x-header></x-header>
        <h1>Конфигуратор</h1>
        <div class="configurator d-flex">
            <div class="list-spec">
                <div class="components">
                    <img src="/images/configurator-1 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Процессор
                        </h3>
                        <span>Процессор (CPU) – сердце компьютера. Чем выше частота тем быстрее обрабатываются данные, а
                            количество ядер позволяет распределить нагрузку и повысить быстродействие всей
                            системы.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-2 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Охлаждение
                        </h3>
                        <span>Охлаждения (cooler) – радиатор с прикреплённым вентилятором предназначенный для охлаждения
                            процессора. Показатель теплоотвода (TDP) кулера не должен быть меньше показателя
                            тепловыделения (TDP) процессора.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-3 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Материнская плата
                        </h3>
                        <span>Материнская плата (MB) – основа компьютера. На плату как конструктор собираются остальные
                            комплектующие. Материнская плата не отвечает за быстродействие компьютера, но за функционал,
                            от нее зависит количество нужных выходов и разъемов.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-4 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Оперативная память
                        </h3>
                        <span>Оперативная память (Mem) – отвечает за то, с каким объемом данных в данный момент времени
                            может работать процессор. Чем ее больше, тем быстрее работает компьютер.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-8 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Видеокарта
                        </h3>
                        <span>Видеокарта (GPU) – это устройство отвечающее за поддержку и быстродействие игрового
                            процесса. Основой видеокарты есть графический чип, чем выше мощность тем лучше.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img style="width: 99px" src="/images/428026d4402424ae13a72218cab0a40c.png" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Блок питания
                        </h3>
                        <span>Блок питания обеспечивает током все компоненты и противостоит всем перегрузкам и скачкам
                            сети. Мощность блока питания выбирается всегда с запасом, так он дольше прослужит без
                            пиковых нагрузок.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-6 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            SSD
                        </h3>
                        <span>Твердотельный накопитель (SSD) – это скоростное устройство для хранения данных. Его
                            скорость работы в несколько раз быстрее обычного жесткого диска. Обычно SSD используют для
                            установки на него Операционной системы.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/configurator-5 1.svg" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Жесткий диск
                        </h3>
                        <span>Жесткий диск тоже является устройством для хранения данных, но его скорость работы
                            значительнее медленнее SSD накопителей. Обычно HDD используют для хранения больших
                            файлов.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
                <div class="components">
                    <img src="/images/2a153bd32671f1797af5d261d74b062c.png" alt="configurator.svg">
                    <div class="components-text">
                        <h3 style="margin-bottom: 0">
                            Корпус
                        </h3>
                        <span>Корпус – не маловажная составляющая системного блока. Толщина стенок определяют прочность
                            и шума-изоляцию. Размер влияет на охлаждение внутренних компонентов.</span>
                        <br>
                        <button class="btn btn-cust-config">Выбрать компонент</button>
                    </div>

                </div>
            </div>
            <div class="cost">
                <h3>Стоимость пк</h3>
                <div class="total">
                    <span>Итого:</span>
                    <span>0₽</span>
                </div>
                <button class="btn btn-cust hover-cost">Поделиться</button>
                <button class="btn btn-cost">Очистить</button>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
