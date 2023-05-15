@extends('lk.index')

@section('content')
<main>
    <form action="/" method="POST">
    <div class="container px-5">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label> Лицевой счет: </label>
                    <input type="text" name="" class="form-control" value="{{ __('$lc') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> Пользователь: </label>
                    <input type="text" name="" class="form-control" value="{{ __('$user_name') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> Адрес: </label>
                    <input type="text" name="" class="form-control" value="{{ __('$user_addreses') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> общая площадь: </label>
                    <input type="text" name="types[ Электр.день]" class="form-control" value="{{ __('$sum') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> число проживающих: </label>
                    <input type="text" name="types[ Электр.день]" class="form-control" value="{{ __('$sum') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label> Состояние расчетов: </label>
                    <input type="text" name="types[ Электр.день]" class="form-control" value="{{ __('$sum') }}">
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>

    <div class="form-group">
        <label> Плательщик ФИО: </label>
        <input type="text" name="" class="form-control" value="">
        <hr>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label> Заводской № ИПУ холодной воды: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата окончасния поверки: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Последние показания: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата передачи показаний: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label> Заводской № ИПУ горячей воды: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата окончасния поверки: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Последние показания: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата передачи показаний: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label> Заводской № ИПУ электричества (день): </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата окончасния поверки: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Последние показания: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата передачи показаний: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label> Заводской № ИПУ электричества (ночь): </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата окончасния поверки: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Последние показания: </label>
                <input type="text" name="" class="form-control" value="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label> Дата передачи показаний: </label>
                <input type="text" name="types[ Электр.день]" class="form-control" value="">
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>

</form>
    </div>
</main>

@endsection
