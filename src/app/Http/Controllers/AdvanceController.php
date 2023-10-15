<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest; //作成したフォームリクエストをAdvanceControllerから呼び出し,デフォルトはuse Illuminate\Http\Request;

use App\Models\Contact;
//Contact モデルを AdvanceController で使用するために、このコードの記述が必要

class AdvanceController extends Controller
{
    public function index() //表示する View ファイルの指定
    {
        return view('index');
    }

    public function todo() //表示する View ファイルの指定
    {
        return view('todo');
    }

    public function back(ContactRequest $request)
    {
        $data = $request->session()->get('form_data', []); // デフォルト値として空の配列を使用

        return view('javascript:history.back();index');
    }

    public function confirm(ContactRequest $request)
    {
        // リクエストからデータを取得

        $name1 = $request->input('name1');
        $name2 = $request->input('name2');

        // name1とname2を結合してfullnameを作成
        $fullname = $name1 . ' ' . $name2;


        $genderValue = $request->input('gender');
        $gender = ($genderValue == '1') ? '男性' : '女性'; // この行は短い条件文で簡潔に記述しています

        // ビューに渡すための配列を準備
        $contact = $request->only(['email', 'postcode', 'address', 'building_name', 'opinion']);
        $contact['fullname'] = $fullname;
        $contact['gender'] = $gender;

        // ビューにデータを渡す
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        // validate request or use form request validations

        // combine name1 and name2 to create fullname
        $fullname = $request->name1 . ' ' . $request->name2;

        // create new contact - make sure all the fields are validated before this step
        $contact = Contact::create([
            'fullname' => $fullname,
            'gender' => $request->gender, // assuming gender is directly coming from the request
            // ... other fields
        ]);

        return view('/thanks');
    }

}