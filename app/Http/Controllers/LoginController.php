<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        if ($name == 'root' && $password == 'a123456789') {
            $result = [
                "status" => "success",
                "apiType" => "A04",
                "message" => "User Login Successfully.",
                "version" => "1.0.0",
                "errorCode" => 0,
                "result" => [
                    "token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzRiM2Q2YmY1MDAxZjk4YzY4Y2Y4N2RkNDgyM2FlNjNkYmVlMjE1ZjA4N2E1NTc3YTQ3MzBjMzBjYjQyMTFhN2ViOTY1NzYyNWM1YjRmMmQiLCJpYXQiOiIxNjEyMjQ3NTI4LjgzOTMxOSIsIm5iZiI6IjE2MTIyNDc1MjguODM5MzQ1IiwiZXhwIjoiMTYxMjI0Nzg4OC43NDA3NTUiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.zD7Ffn9f0-L9Nh8MIWV_-4p2Mt28ojK5vuUZqZknIhwgcNU4EY4zrPVDukWaSv8r-3kZppSfbwa7YE8MRjchlVnMGw4rV921-fXoU7xnHe0rtcwzLShMgsCPNjR8aBMcWYfGuWZYUch4s85CUGeKy8RbEEqaqCJS7P8RRGrNHVJxC_yPrgS2kZnHhmTg0jKKED7GuKWtvWN6wYyOkvJn4KcJUB0r8BvaQGjGGtSvonSPOi5rgF2nvA62TDpDYQEWKxc3b2Fhvx9HpO0qvxd5uguIi9zrTtt5z4xbnw2U41kLsdfajcl3rpwXjgwTvzVkdORMw65pG_Qi7DcOnijAdR7w686rjeyCqihcnXKDuvGur5z3eeQLxq_hJEIDbUGfnhQ_Crnnut1-UJVYvUMeUf4CmNFCn5kQ5QnlDlM3w03sTqxf4pd7VSdXEfql3io07UGvyVIcdsBazbMrfLa9shB9tgqZ2FgSMbUyse1www69Wc7oY50yMyML2U0-8jCm7n28wkU-TlbXLaS_nhCpdUHuBuMdNKqOZA8VEcE-goUkg384iGlUi79TsJqbrAMlP-ib_IGJbIXVhicQ2-i7Wd8WuOyLB-ij6J8fxDfPyu4s17XUeNnO6Yq1QmrZ9mG7RArQfubO9O6Gjfaw0oL7LvJww_IKmBz7GeT6Y-asEvA",
                    "name" => $name
                ]
            ];
        }

        return response()->json($result);
    }
}
