<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterController extends Controller
{
    public function index(Request $request)
    {
        $result = [
            "status" => "success",
            "apiType" => "A05",
            "message" => "Router Successfully.",
            "version" => "1.0.0",
            "errorCode" => 0,
            "result" => [
                [
                    "name" => "後台設定",
                    "path" => "admin",
                    "children" => [
                        [
                            "name" => "後台管理者",
                            "path" => "managers",
                            "edit" => true,
                        ], [
                            "name" => "路由設定",
                            "path" => "routes",
                            "edit" => false,
                        ],
                    ],
                ],
                [
                    "name" => "前台頁面",
                    "path" => "front",
                    "icon" => "",
                    "children" => [
                        [
                            "name" => "會員資料",
                            "path" => "users",
                            "edit" => true,
                        ], [
                            "name" => "前台首頁",
                            "path" => "frontpage",
                            "edit" => true,
                        ], [
                            "name" => "文章列表",
                            "path" => "article",
                            "edit" => true,
                        ], [
                            "name" => "活動頁面",
                            "path" => "adpage",
                            "edit" => true,
                        ], [
                            "name" => "服務介紹",
                            "path" => "service",
                            "edit" => true,
                        ], [
                            "name" => "最新消息",
                            "path" => "news",
                            "edit" => true,
                        ], [
                            "name" => "寵知識",
                            "path" => "knowledge",
                            "edit" => true,
                        ], [
                            "name" => "合作提案",
                            "path" => "cooperation",
                            "edit" => true,
                        ], [
                            "name" => "汪貓投稿",
                            "path" => "contribution",
                            "edit" => true,
                        ],
                    ],
                ]

            ]
        ];

        return response()->json($result);
    }
}
