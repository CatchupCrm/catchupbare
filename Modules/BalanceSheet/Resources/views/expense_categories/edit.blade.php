@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Expense Categories
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($expenseCategories, ['route' => ['balancesheet.expenseCategories.update', $expenseCategories->id], 'method' => 'patch']) !!}

                        @include('balancesheet.expense_categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection