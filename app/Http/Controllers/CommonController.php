<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Entry;

class CommonController extends Controller
{
  public function index(Request $request) {
    $alias = $request->moduleAlias;
    $module = Module::where('alias', $alias)->first();
    $entries = Entry::where('module_id', $module->id)->get();
    return view("entry.index", ['entries' => $entries, "name" => $module->name, 'alias' => $alias]);
  }

  public function add(Request $request) {
    $alias = $request->moduleAlias;
    return view("entry.add", ['alias' => $alias]);
  }

  public function store(Request $request) {
    $alias = $request->moduleAlias;
    $module = Module::where('alias', $alias)->first();
    $entry = new Entry();
    $entry->title = $request->title;
    $entry->content = $request->content;
    $entry->module_id = $module->id;
    $entry->save();
    die();
  }

  public function detail(Request $request) {
    $alias = $request->moduleAlias;
    $module = Module::where('alias', $alias)->first();
    $id = $request->id;
    $entry = Entry::where('module_id', $module->id)->where('id', $id)->first();
    echo '<pre>';
    print_r($entry);
    echo '</pre>';
    die();
  }
}
