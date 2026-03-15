<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedbacks;

class FeedbackController extends Controller
{
    public function store(FeedbackRequest $request)
    {
        // Валидация
        $request->validated();

        // Раз в 10 секунд можно отправить запрос
        if (time() - $request->time < 10) {
            return back()->withErrors(['form_time' => 'Слишком быстрая отправка']);
        }

        // Уникальный хэш-код
        $hash = md5(string: $request->email. $request->message);

        Feedbacks::firstOrCreate(['hash' => $hash], [
        'hash' => $hash, 
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'message' => $request->message,
        ]);

        return back()->with('success', value('Ваше предложение успешно отправлено'));

    }
}
