<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MenuController extends Controller
{
    /**
     * Devuelve la estructura del menú en formato JSON
     *
     * @return JsonResponse
     */
    public function getMenu(): JsonResponse
    {
        $menu = [
            "menu" => [
                "id" => "file",
                "value" => "File",
                "popup" => [
                    "menuitem" => [
                        [
                            "value" => "New",
                            "onclick" => "CreateNewDoc()"
                        ],
                        [
                            "value" => "Open",
                            "onclick" => "OpenDoc()"
                        ],
                        [
                            "value" => "Close",
                            "onclick" => "CloseDoc()"
                        ]
                    ]
                ]
            ]
        ];

        return response()->json($menu);
    }
}
