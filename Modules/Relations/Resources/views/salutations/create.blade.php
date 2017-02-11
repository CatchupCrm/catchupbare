@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Salutation
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'relations.salutations.store']) !!}

                        @include('relations.salutations.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
