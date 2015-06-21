<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">お問い合わせフォーム</div>

				@if($errors->any())
				<div class="row error-panel">
					<div class="col-sm-12 offset-left">
						<div class="alert alert-danger">
				@foreach($errors->all() as $error)
				<ul>
				<li>{{$error}}</li>
				</ul>
				@endforeach
						</div>
					</div>
				</div>
				@endif

				<div class="panel-body">
          {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('name', 'お名前:') !!}
            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => '山田 太郎']) !!}
        </div>
        <div class="row" style="margin-bottom:10px;">
            <div class="form-group col-sm-6">
                {!! Form::label('number', 'お電話番号:') !!}
                {!! Form::text('number', null, ['class' => 'form-control','placeholder' => '0338700099']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
				<div class="form-group">
					<h4>お問い合わせの内容を選択してください。</h4>
					<div class="radio-inline">
							 {!! Form::radio('contact','IRについてのお問い合わせ',true) !!}
							 {!! Form::label('IRについてのお問い合わせ') !!}　
					</div>
					<div class="radio-inline">
							 {!! Form::radio('contanct','取材・プレスについてのお問合せ') !!}
							 {!! Form::label('取材・プレスについてのお問合せ') !!}　
					</div>
					<div class="radio-inline">
							 {!! Form::radio('contanct','その他ご意見・ご要望') !!}
							 {!! Form::label('その他ご意見・ご要望') !!}
					 </div>
				</div>
        <div class="form-group">
            {!! Form::label('body', 'お問い合わせ内容:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('お問い合わせする', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>


  </body>
</html>
