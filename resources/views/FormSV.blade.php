@extends('/Template/template')
@section('formProduct')
    <style>
        .error {
            color: red;
        }

        .success {
            color: #2ca02c;
        }

        body {
            background-color: #6b7280;
            color: #dfdfdf;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                {!! Form::open(['url' => '/insert/submit','files'=>true] ) !!}
                <h1>Nhập Thông tin sinh viên </h1>
                <hr>

                @if(count($errors)>0)
                    LỖI <br>
                    @foreach( $errors->all() as $err)
                        <div class="error">
                            <b> {{ $err }}</b>
                        </div><br>
                    @endforeach
                @endif

                @if(isset($mess))
                    <div class="success">
                        {{ $mess }}
                    </div>
                @endif

                {{ Form::label('masv', 'Mã Sinh viên') }}
                {{ Form::text('masv', '', ['class' => 'form-control', 'placeholder' => 'Nhập mã sinh viên']) }}

                {{ Form::label('tensv', 'Tên Sinh Viên') }}
                {{ Form::text('tensv', '', ['class' => 'form-control', 'placeholder' => 'Nhập Tên Sinh viên']) }}

                {{ Form::label('hinhsv', 'Hình ảnh sinh viên') }}
                {{ Form::file('hinhsv', ['class' => 'form-control']) }}

                {{ Form::label('ngaysinh', 'Ngày Sinh') }}
                {{ Form::date('ngaysinh', '', ['class' => 'form-control']) }}

                {{ Form::label('noisinh', 'Nơi Sinh') }}
                {{ Form::text('noisinh', '', ['class' => 'form-control', 'placeholder' => 'Nhập nơi sinh']) }}


                {{ Form::label('lop', 'Lớp') }}
                {{ Form::text('lop', '', ['class' => 'form-control', 'placeholder' => 'Nhập Lớp']) }}

                {{ Form::label('tenkhoa', 'Khoa') }}
                {!! Form::select('tenkhoa',
                            [
                                'Công nghệ thông tin' => 'Công nghệ thông tin',
                                'Kinh Tế' => 'Kinh Tế',
                                'Đồ Hoạ' => 'Đồ Hoạ',
                            ]
                        ,'CNTT',['class'=>'form-control','placeholder'=>'Chọn Khoa']) !!}

                {{ Form::submit('Luu',  ['class' => 'btn btn-primary btn-block mt-3']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>