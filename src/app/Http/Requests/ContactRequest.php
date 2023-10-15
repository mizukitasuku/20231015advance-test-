<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //デフォルトでは、falseになっていて、falseの場合は403エラーを返す仕様になっています。したがって、今回の場合は、trueに変更する必要があります。
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [   //ここにルールを記載します。
            'name1' => ['required', 'string', 'max:255'],//入力必須、文字列型、最大 255 文字
            'name2' => ['required', 'string', 'max:255'],//入力必須、文字列型、最大 255 文字
            'gender' => ['required'],//入力必須
            'email' => ['required', 'string', 'email', 'max:255'],//入力必須、文字列型、最大 255 文字
            'postcode' => ['required', 'regex:/^\d{3}-\d{4}$/'],//入力必須、数値型、3桁-4桁 計8桁の整数
            'address' => ['required', 'string', 'max:255'],//入力必須、文字列型、最大 255 文字
            'opinion' => ['required', 'max:255'],//入力必須、最大 255 文字
        ];
    }

    public function messages() //ここでpublic function rules()エラー内容を日本語へ変換することが出来ます。
    {
        return [
            //キー名.ルール => 'メッセージ'
            'name1.required' => '苗字を入力してください',
            'name1.string' => '苗字を文字列で入力してください',
            'name1.max' => '苗字を255文字以下で入力してください',
            'name2.required' => '名前を入力してください',
            'name2.string' => '名前を文字列で入力してください',
            'name2.max' => '名前を255文字以下で入力してください',
            'gender.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号は-込みで半角の8桁で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所は文字列、数字は記号は全角で入力してください',
            'address.max' => '住所は:max255文字以内で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見は120文字以内で入力してください'
        ];
    }
}
