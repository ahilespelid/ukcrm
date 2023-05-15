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
 <h1 class="display-4 fw-bold">Показания счётчиков</h1>

 <div class="col-lg-6 mx-auto">
   <p class="lead mb-4"></p>
 </div>
</div>

<form action="/" method="POST">

    <h2>Внесите показания счётчиков до 25 числа</h2>
    <div class="form-group">
        <label> Холодная вода</label>
        <input type="text" name="types[ Хол.вода]" class="form-control" value="" placeholder="Последние показания: ">
    </div>
    <div class="form-group">
        <label> Горячая вода</label>
        <input type="text" name="types[ Горяч. вода]" class="form-control" value="" placeholder="Последние показания: ">
    </div>
    <div class="form-group">
        <label> Электр. день</label>
        <input type="text" name="types[ Электр.день]" class="form-control" value="" placeholder="Последние показания: ">
    </div>
    <div class="form-group">
        <label> Электр. ночь</label>
        <input type="text" name="types[ Электр. ночь]" class="form-control" value="" placeholder="Последние показания: ">
    </div>
    <div class="form-group justify-content-end d-flex">
        <input type="submit" value="Сохранить" class="btn btn-primary my-2 flex-end">
    </div>
    <hr>
</form>


<div id="dtBasicExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dtBasicExample_length"><label>Показать <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> записей</label></div></div><div class="col-sm-12 col-md-6"><div id="dtBasicExample_filter" class="dataTables_filter"><label>Поиск:<input type="search" class="form-control form-control-sm" placeholder="Что ищете?" aria-controls="dtBasicExample"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dtBasicExample" class="table table-striped table-bordered table-sm dataTable no-footer" role="grid" aria-describedby="dtBasicExample_info">
<thead>
 <tr role="row"><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Дата: активировать для сортировки столбца по возрастанию" style="width: 197.458px;">Дата</th><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Тип: активировать для сортировки столбца по возрастанию" style="width: 325.167px;">Тип</th><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Показание: активировать для сортировки столбца по возрастанию" style="width: 359.354px;">Показание</th></tr>
</thead>
<tbody>

     <tr role="row" class="odd">

   <td>01.2023</td>
   <td> Хол.вода</td>
   <td>20.655</td>
 </tr><tr role="row" class="even">

   <td>01.2023</td>
   <td> Горяч.вода</td>
   <td>13.365</td>
 </tr><tr role="row" class="odd">

   <td>01.2023</td>
   <td> Электр.день</td>
   <td>952</td>
 </tr><tr role="row" class="even">

   <td>01.2023</td>
   <td> Электр.ночь</td>
   <td>203</td>
 </tr></tbody>
</table>
</div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">Записи с 1 до 4 из 4 записей</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dtBasicExample_previous">
                    <a href="https://lk.uk.terminator.systems/counters/#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0" class="page-link">Предыдущая</a>
                </li>
                <li class="paginate_button page-item active">
                    <a href="https://lk.uk.terminator.systems/counters/#" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item next disabled" id="dtBasicExample_next">
                    <a href="https://lk.uk.terminator.systems/counters/#" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="0" class="page-link">Следующая</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

 var table = $('#dtBasicExample').DataTable( {
             language: {
     url: '//cdn.datatables.net/plug-ins/1.13.3/i18n/ru.json',
 },
         } );

</script>  </div>

</main>
@endsection
