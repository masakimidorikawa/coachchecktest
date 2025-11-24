<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // ← モデルを使うので追加

class ContactController extends Controller
{
    public function index()
    {
        return view('index'); // 入力画面
    }

    public function confirm(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'address' => 'required',
            'type' => 'required',
            'content' => 'required|max:120',
        ]);

        // 保存
        $contact = Contact::create($validated);

        // 保存済みデータを確認画面に渡す
        return view('confirm', compact('contact'));
    }

    public function send(Request $request)
    {
        // 本来はここで保存処理やメール送信などを行う
        return redirect()->route('thanks'); // 完了画面へ
    }

    public function thanks()
    {
        return view('thanks'); // 完了画面
    }
}