<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index(Request $request)
    {
        $result = [
            "status" => "success",
            "apiType" => "A05",
            "message" => "Sidebar Successfully.",
            "version" => "1.0.0",
            "errorCode" => 0,
            "result" => [
                [
                    "name" => "後台設定",
                    "path" => "admin",
                    "icon" => "",
                    "children" => [
                        [
                            "name" => "後台管理者",
                            "path" => "managers",
                            "icon" => "fas fa-users-cog",
                        ], [
                            "name" => "路由設定",
                            "path" => "routes",
                            "icon" => "fas fa-route",
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
                            "icon" => "far fa-user",
                        ], [
                            "name" => "前台首頁",
                            "path" => "frontpage",
                            "icon" => "far fa-window-maximize",
                        ], [
                            "name" => "文章列表",
                            "path" => "article",
                            "icon" => "far fa-newspaper",
                        ], [
                            "name" => "活動頁面",
                            "path" => "adpage",
                            "icon" => "fas fa-ad",
                        ], [
                            "name" => "服務介紹",
                            "path" => "service",
                            "icon" => "fas fa-server",
                        ], [
                            "name" => "最新消息",
                            "path" => "news",
                            "icon" => "fas fa-rss",
                        ], [
                            "name" => "寵知識",
                            "path" => "knowledge",
                            "icon" => "fas fa-info-circle",
                        ], [
                            "name" => "合作提案",
                            "path" => "cooperation",
                            "icon" => "far fa-handshake",
                        ], [
                            "name" => "汪貓投稿",
                            "path" => "contribution",
                            "icon" => "far fa-paper-plane",
                        ],
                    ],
                ]

            ]
        ];

        return response()->json($result);
    }
}
