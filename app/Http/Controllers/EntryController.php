<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Requests;
  use App\Http\Controllers\Controller;


  class EntryController extends Controller
  {
      /**
       * Display a listing of the resource.
       *
       * @return Response
       */
      public function index()
      {
          //
          return view('entry.index');
      }

      public function entry(Requests\PostEntryRequest $request)
      {
          //
          $inputs = \Request::all();

          $incomingUrl = '【発行されたWebhook URL】';

          // 内容を記載
          $payload = array(
          'text' => $inputs['name']."さんからお問い合わせがありました。\n
          メール：".$inputs['email']."\n
          電話番号：".$inputs['number']."\n
          項目：".$inputs['contact']."\n
          内容：".$inputs['body'], // メッセージ（必須）
          'username' => 'お問い合わせ', // 投稿者名
          'icon_emoji' => ':blush:', // 投稿者名のアイコンを変更
          'channel' => '#random', // Channel（#または@から始まるchannel名）
          );

          // slackへポスト
          $result = slackIncomingWebhook($incomingUrl, $payload);

          // compleateへリダイレクト
          return redirect('compleate');
      }

      public function compleate()
      {
          //
          return view('entry.compleate');
      }

}
