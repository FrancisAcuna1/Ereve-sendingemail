<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailchuchuness;

Route:: get("/", [mailchuchuness::class, "output"]);
Route:: post("sending", [mailchuchuness::class, "send_email"]);
Route:: get("success", [mailchuchuness::class, "success"]);
