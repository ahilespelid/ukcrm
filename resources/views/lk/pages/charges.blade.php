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
 <h1 class="display-4 fw-bold">Начисления</h1>

 <div class="col-lg-6 mx-auto">
   <p class="lead mb-4"></p>
 </div>
</div>

<div id="dtBasicExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dtBasicExample_length"><label>Показать <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> записей</label></div></div><div class="col-sm-12 col-md-6"><div id="dtBasicExample_filter" class="dataTables_filter"><label>Поиск:<input type="search" class="form-control form-control-sm" placeholder="Что ищете?" aria-controls="dtBasicExample"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dtBasicExample" class="table table-striped table-bordered table-sm dataTable no-footer" role="grid" aria-describedby="dtBasicExample_info">
<thead>
 <tr role="row"><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Период: активировать для сортировки столбца по возрастанию" style="width: 192.229px;">Период</th><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Начислено: активировать для сортировки столбца по возрастанию" style="width: 262.333px;">Начислено</th><th scope="col" class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="К оплате: активировать для сортировки столбца по возрастанию" style="width: 220.833px;">К оплате</th></tr>
</thead>
<tbody>
       <tr role="row" class="odd">

   <td>01.2023</td>
   <td>3167.61</td>
   <td>3167.61</td>
 </tr><tr role="row" class="even">

   <td>12.2022</td>
   <td>4720.91</td>
   <td></td>
 </tr><tr role="row" class="odd">

   <td>11.2022</td>
   <td>3625.96</td>
   <td></td>
 </tr><tr role="row" class="even">

   <td>10.2022</td>
   <td>3541.75</td>
   <td></td>
 </tr><tr role="row" class="odd">

   <td>09.2022</td>
   <td>1872.03</td>
   <td></td>
 </tr><tr role="row" class="even">

   <td>08.2022</td>
   <td>2455.7</td>
   <td></td>
 </tr><tr role="row" class="odd">

   <td>07.2022</td>
   <td>2307.46</td>
   <td></td>
 </tr><tr role="row" class="even">

   <td>06.2022</td>
   <td>1222.68</td>
   <td></td>
 </tr><tr role="row" class="odd">

   <td>05.2022</td>
   <td>3703.57</td>
   <td></td>
 </tr></tbody>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">Записи с 1 до 9 из 9 записей</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dtBasicExample_previous"><a href="https://lk.uk.terminator.systems/billing/#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0" class="page-link">Предыдущая</a></li><li class="paginate_button page-item active"><a href="https://lk.uk.terminator.systems/billing/#" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="dtBasicExample_next"><a href="https://lk.uk.terminator.systems/billing/#" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="0" class="page-link">Следующая</a></li></ul></div></div></div></div>

<script type="text/javascript">

 var table = $('#dtBasicExample').DataTable( {
             language: {
     url: '//cdn.datatables.net/plug-ins/1.13.3/i18n/ru.json',
 },
         } );

</script>  </div>

</main>
@endsection
