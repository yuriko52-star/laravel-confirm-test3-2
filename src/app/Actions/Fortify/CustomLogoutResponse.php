<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\LogoutResponse;

class CustomLogoutResponse implements LogoutResponse
{
    /**
     * Handle logout response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toResponse($request)
    {
        // ログアウト後のリダイレクト先を指定
        return redirect('/login'); // 必要に応じて変更
    }
}
