@extends('lk.index')

@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h4 class="display-6">Лицевой счет:</h4>
                <h5 class="display-7">{{ auth()->user()->lc = 021000253 }}</h5>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4 class="display-6">{{ auth()->user()->name }}</h4>
                <h5 class="display-7">{{ auth()->user()->addreses = 'ул. Фрунзе 11 кв. 2'}}</h5>
            </div>
            <div class="col-md-auto col-sm-12">
                <h4 class="display-6 text-end">{{ __('Сосотояние расчетов:') }}</h4>
                <h5 class="display-7 text-end text-danger">{{ __('-5000') }} (задолженность)</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h4 class="display-7"></h4>
            <h1 class="display-4 fw-bold">Направить обращение</h1>

            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"></p>
            </div>
        </div>

        <form action="/" method="POST" class="w-75 mx-auto">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label> Пользователь:</label>
                        <input type="text" name="types[ Хол.вода]" class="form-control" value="{{ auth()->user()->name }}" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label> Email:</label>
                        <input type="text" name="types[ Горяч. вода]" class="form-control" value="{{ auth()->user()->email }}" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label> Текст обращения:</label>
                        <textarea type="text" name="message" class="form-control" rows="5" value="" placeholder="Укажите ваше обращение " required></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group justify-content-end d-flex">
                <input type="submit" value="Отправить" class="btn btn-outline-primary my-2 flex-end">
            </div>

        </form>
    </div>
</main>
@endsection
